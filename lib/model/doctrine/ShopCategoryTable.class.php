<?php


class ShopCategoryTable extends Doctrine_Table
{
//    public function getWithItems()
//    {
//        $q = $this->createQuery('c')
//            ->leftJoin('c.ShopMains j')
//            ->where('j.expires_at > ?', date('Y-m-d H:i:s', time()));
//        $q->andWhere('j.is_activated = ?',  1);
//        return q->execute();
//
//    }

    
    public static function getInstance()
    {
        return Doctrine_Core::getTable('ShopCategory');
    }
}