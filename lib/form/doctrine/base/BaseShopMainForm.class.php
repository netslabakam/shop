<?php

/**
 * ShopMain form base class.
 *
 * @method ShopMain getObject() Returns the current form's model object
 *
 * @package    shop
 * @subpackage form
 * @author     farrukh
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseShopMainForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'category_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ShopCategory'), 'add_empty' => false)),
      'city'         => new sfWidgetFormInputText(),
      'type'         => new sfWidgetFormInputText(),
      'item_name'    => new sfWidgetFormInputText(),
      'img'          => new sfWidgetFormInputText(),
      'location'     => new sfWidgetFormInputText(),
      'description'  => new sfWidgetFormTextarea(),
      'token'        => new sfWidgetFormInputText(),
      'is_activated' => new sfWidgetFormInputCheckbox(),
      'email'        => new sfWidgetFormInputText(),
      'phone'        => new sfWidgetFormInputText(),
      'expires_at'   => new sfWidgetFormDateTime(),
      'created_at'   => new sfWidgetFormDateTime(),
      'updated_at'   => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'category_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ShopCategory'))),
      'city'         => new sfValidatorString(array('max_length' => 20)),
      'type'         => new sfValidatorString(array('max_length' => 255)),
      'item_name'    => new sfValidatorString(array('max_length' => 255)),
      'img'          => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'location'     => new sfValidatorString(array('max_length' => 255)),
      'description'  => new sfValidatorString(array('max_length' => 4000)),
      'token'        => new sfValidatorString(array('max_length' => 255)),
      'is_activated' => new sfValidatorBoolean(array('required' => false)),
      'email'        => new sfValidatorString(array('max_length' => 255)),
      'phone'        => new sfValidatorString(array('max_length' => 255)),
      'expires_at'   => new sfValidatorDateTime(),
      'created_at'   => new sfValidatorDateTime(),
      'updated_at'   => new sfValidatorDateTime(),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'ShopMain', 'column' => array('token')))
    );

    $this->widgetSchema->setNameFormat('shop_main[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ShopMain';
  }

}
