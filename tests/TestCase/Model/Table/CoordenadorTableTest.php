<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CoordenadorTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CoordenadorTable Test Case
 */
class CoordenadorTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CoordenadorTable
     */
    public $Coordenador;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.coordenador'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Coordenador') ? [] : ['className' => 'App\Model\Table\CoordenadorTable'];
        $this->Coordenador = TableRegistry::get('Coordenador', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Coordenador);

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
