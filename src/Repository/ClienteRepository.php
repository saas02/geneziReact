<?php

namespace App\Repository;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use Doctrine\ORM\EntityRepository;

/**
 * Description of ProductRepository
 *
 * @author sergio.amaya
 */
class ClienteRepository extends EntityRepository
{
    public function duplicateNitName($clien_nit, $email)
    {        
        return $this->getEntityManager()
            ->createQuery(
                "SELECT p FROM App:Cliente p WHERE p.nit = '$clien_nit' OR p.email = '$email' ORDER BY p.nit ASC"
            )
            ->getResult();        
                
    }
}
