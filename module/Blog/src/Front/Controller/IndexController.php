<?php
/**
 * Created by Victor Guo
 * User: 俞
 * Date: 13-3-30
 * Time: 下午4:29
 */
namespace Front\Controller;

use Zend\View\Model\ViewModel;

class IndexController extends BaseController{
    public function indexAction()
    {
        return new ViewModel();
    }
}