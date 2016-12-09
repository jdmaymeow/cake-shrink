<?php
namespace CakeShrink\Test\TestCase\Controller\Component;

use CakeShrink\Controller\Component\ShrinkerComponent;
use Cake\Controller\ComponentRegistry;
use Cake\TestSuite\TestCase;

/**
 * CakeShrink\Controller\Component\ShrinkerComponent Test Case
 */
class ShrinkerComponentTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \CakeShrink\Controller\Component\ShrinkerComponent
     */
    public $Shrinker;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $registry = new ComponentRegistry();
        $this->Shrinker = new ShrinkerComponent($registry);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Shrinker);

        parent::tearDown();
    }

    /**
     * Test initial setup
     *
     * @return void
     */
    public function testInitialization()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
