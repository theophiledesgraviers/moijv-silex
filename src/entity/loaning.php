<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Entity;

/**
 * Description of loaning
 *
 * @author Etudiant
 */
class loaning {
      
    
    /*
     *
     * @var integer
     */
    private $id;
    
    /*
     * 
     * @var \Datetime
     */
    private $dateStart;
    
    
    /*
     * 
     * @var \Datetime
     */
    private $dateEnd;
    
    /*
     * the user that dis this loaning
     * @var \entity\user
     */
    private $user;
    
    
    /*
     * The game associated with this loaning
     * @var \entity\game
     */
    private $game;
    
      
    
    function getId() {
        return $this->id;
    }

    function getDateStart() {
        return $this->dateStart;
    }

    function getDateEnd() {
        return $this->dateEnd;
    }

    function getUser() {
        return $this->user;
    }

    function getGame() {
        return $this->game;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setDateStart($dateStart) {
        
        if($dateStart instanceof string){
            $dateStart = \DateTime::createFromFormat('Y/m/d', $dateStart);
        
        }    
        $this->dateStart = $dateStart;
        
    }

    
    function setDateEnd($dateEnd) {
        
        if($dateEnd instanceof string){
            $dateEnd = \DateTime::createFromFormat('Y/m/d', $dateEnd);
        
        }    
        $this->dateStart = $dateEnd;
        
    }


    function setUser(\entity\user $user) {
        $this->user = $user;
    }

    function setGame(\entity\game $game) {
        $this->game = $game;
    }


}
