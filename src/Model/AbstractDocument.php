<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Model;

/**
 * Description of AbstractDocument
 *
 * @author aswin.vijayakumar
 */
abstract class AbstractDocument 
{
    public function hashFileName($filename)
    {
        return time() . '-' . md5($filename);
    }
    
    public function hashDirectory()
    {
        $dateTime = new \DateTime('now');
        $month = $dateTime->format('M');
        $day = $dateTime->format('d');
        return md5($month . '-' . $day);
    }
    
    public function createDirectoryIfNotExists($directory)
    {
        if(!is_dir($directory)) {
            mkdir($directory);
        }
        return $directory;
    }
}
