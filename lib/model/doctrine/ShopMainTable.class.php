<?php


class ShopMainTable extends Doctrine_Table
{
    
    public static function getInstance()
    {
        return Doctrine_Core::getTable('ShopMain');
    }
    public function getActiveItems(Doctrine_Query $q = null)
    {
        if (is_null($q))
        {
            $q = Doctrine_Query::create()
                ->from('ShopMain s');
        }

        $q->andWhere('s.expires_at > ?', date('Y-m-d h:i:s', time()))
            ->addOrderBy('s.expires_at DESC');

        return $q->execute();
    }
    public function retrieveActiveItem(Doctrine_Query $q)
    {
        $q->andWhere('a.expires_at > ?', date('Y-m-d h:i:s', time()));

        return $q->fetchOne();
    }
    static public $cities = array(
        'fergana' => 'Fergana',
        'andijan' => 'Andijan',
        'namangan' => 'Namangan'
    );
    public function getCities(){
        return self::$cities;
    }
    public function retrieveBackendShopList(Doctrine_Query $q)
    {
        $rootAlias = $q->getRootAlias();
        $q->leftJoin($rootAlias . '.ShopCategory c');
        return $q;
    }

}