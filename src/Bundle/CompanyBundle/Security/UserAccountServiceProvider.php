<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Bundle\CompanyBundle\Security;

use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use App\Repository\UserTypeRepository;
use Symfony\Bridge\Doctrine\Security\User\EntityUserProvider;

/**
 * Description of UserAccountServiceProvider
 *
 * @author aswin.vijayakumar
 */
class UserAccountServiceProvider extends EntityUserProvider implements UserProviderInterface
{
    
}
