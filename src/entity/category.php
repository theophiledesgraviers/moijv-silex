<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Entity;

/**
 * Description of category
 *
 * @author Etudiant
 */
class category {
    
    
    
    /*
     * id of the category
     * @var integer
     */
    private $id;
    
    /*
     * user name
     * @var string
     */
    private $name;
    
      
    
    public function getId(){
    return $this->id;
    }

    public function getName() {
    return $this->username;
    }

   
    public function setId($id) {
    $this->id = $id;
    }

    public function setName($name) {
    $this->name = $name;
    }

    
}
