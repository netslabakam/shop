<?php
/**
 * Created by PhpStorm.
 * User: Администратор
 * Date: 12.11.2018
 * Time: 2:14
 */

class BackendShopMainForm extends ShopMainForm
{
    public function configure()
    {
        parent::configure();

        $this->widgetSchema['img'] = new sfWidgetFormInputFileEditable(array(
            'label'     => 'Item image',
            'file_src'  => '/uploads/shop_img/'.$this->getObject()->getImg(),
            'is_image'  => true,
            'edit_mode' => !$this->isNew(),
            'template'  => '<div>%file%<br />%input%<br />%delete% %delete_label%</div>',
        ));

        $this->validatorSchema['img_delete'] = new sfValidatorPass();
    }

    protected function removeFields()
    {
        unset(
            $this['created_at'], $this['updated_at'],
            $this['token']
        );
    }
}