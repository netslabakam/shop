<?php

/**
 * ShopMain form.
 *
 * @package    shop
 * @subpackage form
 * @author     farrukh
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ShopMainForm extends BaseShopMainForm
{
  public function configure()
  {
      unset(
          $this{'created_at'},
          $this{'expires_at'},
          $this{'updated_at'},
          $this{'is_activated'}
      );

      $this->validatorSchema['email'] = new sfValidatorAnd(array(
          $this->validatorSchema{'email'},
              new sfValidatorEmail(),
      ));
      $this->widgetSchema['city'] = new sfWidgetFormChoice(array(
          'choices' =>array_keys(Doctrine_Core::getTable('ShopMain')->getCities()),
      ));
      $this->widgetSchema{'img'} = new sfWidgetFormInputFile(array(
          'label' => 'Image',
      ));
      $this->validatorSchema['img'] = new sfValidatorFile(array(
         'required' => false,
          'path' => sfConfig::get('sf_upload_dir').'/shop_img',
          'mime_types' => 'web_images',
      ));
  }
}
