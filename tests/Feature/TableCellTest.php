<?php

namespace Javaabu\Forms\Tests\Feature;

use Javaabu\Forms\Tests\TestCase;

class TableCellTest extends TestCase
{
    /** @test */
    public function it_can_render_status_table_cell_entries_for_bootstrap_5()
    {
        $this->setFrameworkBootstrap5();
        $this->registerTestRoute('table-cell-status');

        $this->visit('/table-cell-status')
            ->seeElement('td')
            ->within('td', function () {
                $this->seeElement('span.status.text-bg-success')
                    ->within('span.status', function () {
                        $this->seeText('Published');
                    });
            });

    }

    /** @test */
    public function it_can_render_status_table_cell_entries_for_material_admin_26()
    {
        $this->setFrameworkMaterialAdmin26();
        $this->registerTestRoute('table-cell-status');

        $this->visit('/table-cell-status')
            ->seeElement('td')
            ->within('td', function () {
                $this->seeElement('span.status.bg-success')
                    ->within('span.status', function () {
                        $this->seeText('Published');
                    });
            });

    }

    /** @test */
    public function it_can_render_boolean_table_cells()
    {
        $this->setFrameworkBootstrap5();
        $this->registerTestRoute('table-cell-boolean');

        $this->visit('/table-cell-boolean')
            ->seeElement('td')
            ->seeInElement('td', 'Yes');
    }

    /** @test */
    public function it_can_render_array_text_table_cells()
    {
        $this->setFrameworkBootstrap5();
        $this->registerTestRoute('table-cell-array');

        $this->visit('/table-cell-array')
            ->seeElement('td')
            ->seeInElement('td', 'orange');
    }

    /** @test */
    public function it_can_render_multiline_text_table_cells()
    {
        $this->setFrameworkBootstrap5();
        $this->registerTestRoute('table-cell-multiline');

        $this->visit('/table-cell-multiline')
            ->seeElement('td')
            ->seeInElement('td', "Javaabu<br>\nCompany");
    }

    /** @test */
    public function it_can_set_the_table_cell_from_model()
    {
        $this->setFrameworkBootstrap5();
        $this->registerTestRoute('table-cell-model');

        $this->visit('/table-cell-model')
            ->seeElement('tr')
            ->within('tr', function () {
                $this->seeElement('td')
                    ->seeInElement('td', 'Javaabu');
            });
    }

    /** @test */
    public function it_can_set_the_table_cell_from_value()
    {
        $this->setFrameworkBootstrap5();
        $this->registerTestRoute('table-cell-value');

        $this->visit('/table-cell-value')
            ->seeElement('td')
            ->seeInElement('td', 'Javaabu');
    }

    /** @test */
    public function it_can_generate_bootstrap_5_table_cell()
    {
        $this->setFrameworkBootstrap5();
        $this->registerTestRoute('table-cell');

        $this->visit('/table-cell')
            ->seeElement('td')
            ->seeInElement('td', 'Javaabu');
    }

    /** @test */
    public function it_can_generate_material_admin_26_table_cell()
    {
        $this->setFrameworkMaterialAdmin26();
        $this->registerTestRoute('table-cell');

        $this->visit('/table-cell')
            ->seeElement('td')
            ->seeInElement('td', 'Javaabu');
    }
}
