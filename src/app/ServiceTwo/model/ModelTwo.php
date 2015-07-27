<?php
/**
 * Created by PhpStorm.
 * User: marcio
 * Date: 27/07/15
 * Time: 08:49
 */

namespace app\ServiceTwo\model;

use app\ServiceTwo\repository\RepositoryTwo;
use weverest\weservice;

class ModelTwo implements weservice\IModel
{

    private $repotitory;

    private $id;

    public function __construct()
    {
        //Não é a melhor forma, mas um teste
        $this->repotitory = new RepositoryTwo();
    }

    public function setIdUser($id)
    {
        if(is_int($id)){
            $this->id = $id;
        }

    }

    public function getUser()
    {
        return $this->repotitory->getUserById($this->id);
    }

}