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
class ProductoRepository extends EntityRepository
{
    public function findAllByStock()
    {       
        return $this->getEntityManager()
            ->createQuery(
                'SELECT p FROM App:Producto p WHERE p.stock > 0 AND p.estado = 1 ORDER BY p.inpromo DESC'
            )
            ->getResult();
    }
    
    public function findAllByInHome()
    {        
        return $this->getEntityManager()
            ->createQuery(
                'SELECT p FROM App:Producto p '
                .'WHERE p.stock > 0 '
                .'AND p.inhome = 1 '
                .'AND p.estado = 1 '
                .'ORDER BY p.nombreprod ASC'
            )
            ->getResult();
    }
    
    public function findAllByCreado()
    {        
        return $this->getEntityManager()
            ->createQuery(
                'SELECT p FROM App:Producto p '
                .'WHERE p.stock > 0 '
                .'AND p.estado = 1 '                
                .'ORDER BY p.inpromo DESC '                
            )
            ->setMaxResults(10)
            ->getResult();
    }
    
}
