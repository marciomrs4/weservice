<?php
/**
 * Created by PhpStorm.
 * User: marcio
 * Date: 27/07/15
 * Time: 08:50
 */

namespace app\ServiceOne;


use app\ServiceOne\model\ModelOne;
use app\ServiceOne\repository\RepositoryOne;
use weverest\weservice;

class ServiceOneTest extends \PHPUnit_Framework_TestCase
{

    public function testMustInstanceOfModel()
    {
        $model = new ModelOne();
        $this->assertInstanceOf('app\ServiceOne\model\ModelOne',$model);
    }

    public function testMustBeInstanceOfRepository()
    {
        $repository = new RepositoryOne();
        $this->assertInstanceOf('app\ServiceOne\repository\RepositoryOne',$repository);
    }

    public function testMustBeReturnArray()
    {

        $repository = new RepositoryOne();
        $array = $repository->getUserById(1);
        $this->assertInternalType('array',$array);

        $valor = 1;
        $this->assertInternalType('integer',$valor);
    }
}
