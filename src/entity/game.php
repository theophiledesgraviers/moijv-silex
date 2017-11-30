<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Entity;

/**
 * Description of game
 *
 * @author Etudiant
 */
class game {
     
 
    /*
     *
     * @var integer
     */
    private $id;
    
    
    /*
     * 
     * @var string
     */
    private $title;
    
    
    /*
     * 
     * @var string
     */
    private $image;
    
    /*
     * the user that dis this loaning
     * @var \entity\user
     */
    private $user;
    
    
     /*
     * the user that dis this loaning
     * @var \entity\category
     */
    private $category;
    
    
    public function getId() {
        return $this->id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getImage() {
        return $this->image;
    }

    public function getUser() {
        return $this->user;
    }

    public function getCategory() {
        return $this->category;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function setImage($image) {
        $this->image = $image;
    }

    public function setUser(\entity\user $user) {
        $this->user = $user;
    }

    public function setCategory(\entity\category $category) {
        $this->category = $category;
    }




}
