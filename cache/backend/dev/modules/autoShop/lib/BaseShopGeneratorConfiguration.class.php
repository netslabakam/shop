<?php

/**
 * shop module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage shop
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: configuration.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseShopGeneratorConfiguration extends sfModelGeneratorConfiguration
{
  public function getActionsDefault()
  {
    return array();
  }

  public function getFormActions()
  {
    return array(  '_delete' => NULL,  '_list' => NULL,  '_save' => NULL,  '_save_and_add' => NULL,);
  }

  public function getNewActions()
  {
    return array();
  }

  public function getEditActions()
  {
    return array();
  }

  public function getListObjectActions()
  {
    return array(  'extend' => NULL,  '_edit' => NULL,  '_delete' => NULL,);
  }

  public function getListActions()
  {
    return array(  'deleteNeverActivated' =>   array(    'label' => 'Delete never activated jobs',  ),);
  }

  public function getListBatchActions()
  {
    return array(  '_delete' => NULL,  'extend' => NULL,);
  }

  public function getListParams()
  {
    return '%%is_activated%% <small>%%shop_category%%</small> - %%type%% (<em>%%email%%</em>) is looking for a %%=item_name%% (%%location%%)';
  }

  public function getListLayout()
  {
    return 'stacked';
  }

  public function getListTitle()
  {
    return 'Category Phone';
  }

  public function getEditTitle()
  {
    return 'Editing item "%%type%% is looking for a %%type%%"';
  }

  public function getNewTitle()
  {
    return 'Shop creation';
  }

  public function getFilterDisplay()
  {
    return array(  0 => 'category_id',  1 => 'city',  2 => 'description',  3 => 'is_activated',  4 => 'phone',  5 => 'email',  6 => 'expires_at',);
  }

  public function getFormDisplay()
  {
    return array(  'Content' =>   array(    0 => 'category_id',    1 => 'type',    2 => 'city',    3 => 'img',    4 => 'location',    5 => 'description',    6 => 'phone',    7 => 'email',  ),  'Admin' =>   array(    0 => '_generated_token',    1 => 'is_activated',    2 => 'expires_at',  ),);
  }

  public function getEditDisplay()
  {
    return array();
  }

  public function getNewDisplay()
  {
    return array();
  }

  public function getListDisplay()
  {
    return array(  0 => 'item_name',  1 => 'city',  2 => 'location',  3 => 'type',  4 => 'is_activated',  5 => 'email',);
  }

  public function getFieldsDefault()
  {
    return array(
      'id' => array(  'is_link' => true,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'category_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
      'city' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'type' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'item_name' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'img' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'location' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'description' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'token' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'is_activated' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Boolean',  'label' => 'Activated?',  'help' => 'Whether the user has activated the item',  'or' => 'not',),
      'email' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'phone' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'expires_at' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
      'created_at' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
      'updated_at' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
    );
  }

  public function getFieldsList()
  {
    return array(
      'id' => array(),
      'category_id' => array(),
      'city' => array(),
      'type' => array(),
      'item_name' => array(),
      'img' => array(),
      'location' => array(),
      'description' => array(),
      'token' => array(),
      'is_activated' => array(),
      'email' => array(),
      'phone' => array(),
      'expires_at' => array(),
      'created_at' => array(),
      'updated_at' => array(),
    );
  }

  public function getFieldsFilter()
  {
    return array(
      'id' => array(),
      'category_id' => array(),
      'city' => array(),
      'type' => array(),
      'item_name' => array(),
      'img' => array(),
      'location' => array(),
      'description' => array(),
      'token' => array(),
      'is_activated' => array(),
      'email' => array(),
      'phone' => array(),
      'expires_at' => array(),
      'created_at' => array(),
      'updated_at' => array(),
    );
  }

  public function getFieldsForm()
  {
    return array(
      'id' => array(),
      'category_id' => array(),
      'city' => array(),
      'type' => array(),
      'item_name' => array(),
      'img' => array(),
      'location' => array(),
      'description' => array(),
      'token' => array(),
      'is_activated' => array(),
      'email' => array(),
      'phone' => array(),
      'expires_at' => array(),
      'created_at' => array(),
      'updated_at' => array(),
    );
  }

  public function getFieldsEdit()
  {
    return array(
      'id' => array(),
      'category_id' => array(),
      'city' => array(),
      'type' => array(),
      'item_name' => array(),
      'img' => array(),
      'location' => array(),
      'description' => array(),
      'token' => array(),
      'is_activated' => array(),
      'email' => array(),
      'phone' => array(),
      'expires_at' => array(),
      'created_at' => array(),
      'updated_at' => array(),
    );
  }

  public function getFieldsNew()
  {
    return array(
      'id' => array(),
      'category_id' => array(),
      'city' => array(),
      'type' => array(),
      'item_name' => array(),
      'img' => array(),
      'location' => array(),
      'description' => array(),
      'token' => array(),
      'is_activated' => array(),
      'email' => array(),
      'phone' => array(),
      'expires_at' => array(),
      'created_at' => array(),
      'updated_at' => array(),
    );
  }


  /**
   * Gets the form class name.
   *
   * @return string The form class name
   */
  public function getFormClass()
  {
    return 'BackendShopMainForm';
  }

  public function hasFilterForm()
  {
    return true;
  }

  /**
   * Gets the filter form class name
   *
   * @return string The filter form class name associated with this generator
   */
  public function getFilterFormClass()
  {
    return 'ShopMainFormFilter';
  }

  public function getPagerClass()
  {
    return 'sfDoctrinePager';
  }

  public function getPagerMaxPerPage()
  {
    return 10;
  }

  public function getDefaultSort()
  {
    return array('expires_at', 'desc');
  }

  public function getTableMethod()
  {
    return 'retrieveBackendShopList';
  }

  public function getTableCountMethod()
  {
    return '';
  }
}
