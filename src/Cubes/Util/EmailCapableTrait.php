<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Cubes\Util;

/**
 *
 * @author backend
 */
trait EmailCapableTrait {
    //put your code here
    
    protected $email;
    
    public function getMail() {
        
        return $this->email;
    }
    
    public function setEmail($email) {
        
        $this->email = $email;
        
        return $this;
    }
    
}
