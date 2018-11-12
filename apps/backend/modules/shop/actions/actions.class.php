<?php

require_once dirname(__FILE__).'/../lib/shopGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/shopGeneratorHelper.class.php';

/**
 * shop actions.
 *
 * @package    shop
 * @subpackage shop
 * @author     farrukh
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class shopActions extends autoShopActions
{
    public function executeBatchExtend(sfWebRequest $request)
    {
        $ids = $request->getParameter('ids');

        $q = Doctrine_Query::create()
            ->from('ShopMain s')
            ->whereIn('s.id', $ids);

        foreach ($q->execute() as $shop)
        {
            $shop->extend(true);
        }

        $this->getUser()->setFlash('notice', 'The selected jobs have been extended successfully.');

        $this->redirect('shop_main');
    }
    public function executeListExtend(sfWebRequest $request)
    {
        $shop = $this->getRoute()->getObject();
        $shop->extend(true);

        $this->getUser()->setFlash('notice', 'The selected jobs have been extended successfully.');

        $this->redirect('shop_main');
    }
    public function executeListDeleteNeverActivated(sfWebRequest $request)
    {
        $nb = Doctrine::getTable('ShopMain')->cleanup(60);

        if ($nb)
        {
            $this->getUser()->setFlash('notice', sprintf('%d never activated jobs have been deleted successfully.', $nb));
        }
        else
        {
            $this->getUser()->setFlash('notice', 'No item to delete.');
        }

        $this->redirect('shop_main');
    }
}
