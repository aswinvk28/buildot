<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Bundle\SiteBundle\EventListener;

use Symfony\Component\Console\CommandLoader\CommandLoaderInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\CommandLoader;

/**
 * Description of VariableLoaderSubscriber
 *
 * @author aswin.vijayakumar
 */
class VariableLoaderSubscriber implements CommandLoaderInterface
{
    
    public function get($name): Command
    {
        
    }

    public function getNames(): CommandLoader\string[]
    {
        
    }

    public function has($name): bool 
    {

    }

}
