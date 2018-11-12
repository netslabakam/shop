<?php

/**
 * shop module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage shop
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: helper.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseShopGeneratorHelper extends sfModelGeneratorHelper
{
  public function getUrlForAction($action)
  {
    return 'list' == $action ? 'shop_main' : 'shop_main_'.$action;
  }
}
