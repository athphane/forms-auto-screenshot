import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import concat from 'rollup-plugin-concat';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/web/app.scss',
                'resources/js/app.js',
                'resources/js/static.js',
            ],
            refresh: true,
        }),
        concat({
            groupedFiles: [
                {
                    files: [
                        'node_modules/jquery/dist/jquery.min.js',
                        'node_modules/popper.js/dist/umd/popper.min.js',
                        'node_modules/bootstrap-4/dist/js/bootstrap.min.js'
                    ],
                    outputFile: 'public/js/jquery-bootstrap-4.js',
                },
                {
                    files: [
                        'node_modules/jquery/dist/jquery.min.js',
                        'node_modules/bootstrap/dist/js/bootstrap.bundle.min.js'
                    ],
                    outputFile: 'public/js/jquery-bootstrap.js',
                },
                {
                    files: [
                        'node_modules/jasny-bootstrap/js/fileinput.js',
                        'node_modules/bootstrap-notify/bootstrap-notify.min.js',
                        'node_modules/sweetalert2/dist/sweetalert2.min.js',
                        'node_modules/autosize/dist/autosize.min.js',
                        'node_modules/moment/min/moment.min.js',
                        'node_modules/flatpickr/dist/flatpickr.min.js',
                        'node_modules/select2/dist/js/select2.full.min.js'
                    ],
                    outputFile: 'public/js/vendors.js',
                },
                {
                    files: [
                        'node_modules/jasny-bootstrap/js/fileinput.js',
                        'node_modules/bootstrap-notify/bootstrap-notify.min.js',
                        'node_modules/sweetalert2/dist/sweetalert2.min.js',
                        'node_modules/autosize/dist/autosize.min.js',
                        'node_modules/moment/min/moment.min.js',
                        'node_modules/flatpickr/dist/flatpickr.min.js',
                        'node_modules/dropzone/dist/min/dropzone.min.js',
                        'node_modules/select2/dist/js/select2.full.min.js'
                    ],
                    outputFile: 'public/js/admin-vendors.js',
                },
            ],
        }),
    ],
});
