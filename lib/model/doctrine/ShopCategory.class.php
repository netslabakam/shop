<?php

/**
 * ShopCategory
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    shop
 * @subpackage model
 * @author     farrukh
 * @version    SVN: $Id: Builder.php 7691 2011-02-04 15:43:29Z jwage $
 */
class ShopCategory extends BaseShopCategory
{
    public function getActiveItems($max = 10)
    {
        $q = Doctrine_Query::create()
            ->from('ShopMain s')
            ->where('s.category_id = ?', $this->getId())
            ->limit($max);

        return Doctrine_Core::getTable('ShopMain')->getActiveItems($q);
    }
}