<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CategoriasCarrosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CategoriasCarrosTable Test Case
 */
class CategoriasCarrosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CategoriasCarrosTable
     */
    public $CategoriasCarros;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.categorias_carros',
        'app.carros'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('CategoriasCarros') ? [] : ['className' => CategoriasCarrosTable::class];
        $this->CategoriasCarros = TableRegistry::get('CategoriasCarros', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CategoriasCarros);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
