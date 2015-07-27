<?php
/**
 * Created by PhpStorm.
 * User: marcio
 * Date: 27/07/15
 * Time: 08:49
 */

namespace app\ServiceOne\model;

use app\ServiceOne\repository\RepositoryOne;
use weverest\weservice;

class ModelOne implements weservice\IModel
{

    private $repotitory;

    private $id;

    public function __construct()
    {
        //Não é a melhor forma, mas um teste
        $this->repotitory = new RepositoryOne();
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