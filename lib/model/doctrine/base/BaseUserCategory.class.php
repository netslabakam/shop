<?php

/**
 * BaseUserCategory
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $name
 * @property Doctrine_Collection $Users
 * 
 * @method string              getName()  Returns the current record's "name" value
 * @method Doctrine_Collection getUsers() Returns the current record's "Users" collection
 * @method UserCategory        setName()  Sets the current record's "name" value
 * @method UserCategory        setUsers() Sets the current record's "Users" collection
 * 
 * @package    shop
 * @subpackage model
 * @author     farrukh
 * @version    SVN: $Id: Builder.php 7691 2011-02-04 15:43:29Z jwage $
 */
abstract class BaseUserCategory extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('user_category');
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
        $this->hasMany('User as Users', array(
             'local' => 'id',
             'foreign' => 'user_category_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}