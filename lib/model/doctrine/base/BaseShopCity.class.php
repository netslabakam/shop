<?php

/**
 * BaseShopCity
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $name
 * 
 * @method string   getName() Returns the current record's "name" value
 * @method ShopCity setName() Sets the current record's "name" value
 * 
 * @package    shop
 * @subpackage model
 * @author     farrukh
 * @version    SVN: $Id: Builder.php 7691 2011-02-04 15:43:29Z jwage $
 */
abstract class BaseShopCity extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('shop_city');
        $this->hasColumn('name', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'unique' => true,
             'length' => '255',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}