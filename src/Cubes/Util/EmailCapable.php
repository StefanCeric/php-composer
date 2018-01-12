<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Cubes\Util;

/**
 * Description of EmailCapable
 *
 * @author Stefan Ceric <stefanceric88@gmail.com>
 */
interface EmailCapable {
    //put your code here
    
    /**
     * @return string Description
     */
    public function getMail();
    
    /**
     * @return string email
     */
    public function setEmail();
    
    
}
