<?php
/**
 * Created by PhpStorm.
 * User: brian
 * Date: 10/15/13
 * Time: 7:00 PM
 */

namespace ApplicationTest\Model;

use Application\Model\Todo;

class TodoTest extends \PHPUnit_Framework_TestCase
{
    private $todo;

    public function test_get_id_set_id()
    {
        $this->todo->setId('id');
        $this->assertEquals('id', $this->todo->getId());
    }

    public function test_set_is_complete()
    {
        $this->todo->setComplete(true);
        $this->assertTrue($this->todo->isComplete());
    }

    public function test_get_set_name()
    {
        $this->todo->setName('name');
        $this->assertEquals('name', $this->todo->getName());
    }

    protected function setUp()
    {
        $this->todo = new Todo();
    }
}
 