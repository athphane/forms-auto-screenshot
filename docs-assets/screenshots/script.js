// Usage
//   node script.js
//   node script.js "absolute/schema/key"
//   node script.js "wildcard/schema/key/*"
//
// For Apple Silicon, you might need to export the following variables if Chromium cannot be found:
// export PUPPETEER_SKIP_CHROMIUM_DOWNLOAD=true
// export PUPPETEER_EXECUTABLE_PATH=`which chromium`

import fs from 'fs'
import puppeteer from 'puppeteer'
import schema from './schema.js'
import emitter from 'events'
import * as process from 'process'
import sharp from 'sharp'

emitter.setMaxListeners(1024)

const processScreenshot = async (file, options) => {
    configure(options.configure)

    const directory = file.substring(0, file.lastIndexOf('/'))

    if (directory) {
        fs.mkdirSync(`images/${directory}`, { recursive: true })
    }

    const browser = await puppeteer.launch()
    const page = await browser.newPage()
    await page.setViewport(
        options.viewport ?? {
            width: 1920,
            height: 1080,
            deviceScaleFactor: 3,
        },
    )
    await page.goto(`http://127.0.0.1:8000/${options.url}`, {
        waitUntil: 'networkidle2',
    })

    await page.emulateMediaFeatures([
        {
            name: 'prefers-color-scheme',
            value: 'light'
        }
    ])

    await new Promise((resolve) => setTimeout(resolve, 500))

    if (options.before) {
        await options.before(page, browser)
    }

    const element = await page.waitForSelector(options.selector)
    await element.screenshot({ path: `images/${file}.jpg` })

    await element.dispose()
    await browser.close()

    configure()

    if (options.crop) {
        fs.createWriteStream(`images/${file}.jpg`).write(
            await options.crop(sharp(fs.readFileSync(`images/${file}.jpg`))).toBuffer()
        )
    }
}

const failures = []

const stringMatchesRule = (string, rule) => {
    const escapeRegex = (str) => str.replace(/([.*+?^=!:${}()|\[\]\/\\])/g, '\\$1')

    return new RegExp('^' + rule.split('*').map(escapeRegex).join('.*') + '$').test(string)
}

for (const [file, options] of Object.entries(schema)) {
    if ((process.argv[2] ?? null) && (!stringMatchesRule(file, (process.argv[2] ?? null)))) {
        continue
    }

    console.log(`⏳  Processing ${file}`)

    try {
        await processScreenshot(file, options)
    } catch (error) {
        console.error(`❌  Failed to generate ${file} - ${error}`)
        failures.push(`${file}`)
    }
}

if (failures.length) {
    console.error(`❌  Failed to generate ${failures.length} screenshots:`)
    failures.forEach((failure) => console.error(`-  ${failure}`))
    process.exit(1)
}

process.exit(0)

function configure(php = null) {
    //     fs.writeFileSync(
    //         '../app/app/Providers/Filament/configure.php',
    //         `<?php

    // use Filament\\Panel;

    // return function (Panel $panel): void {
    //     ${php ?? '//'}
    // };
    // `,
    //     )
}
