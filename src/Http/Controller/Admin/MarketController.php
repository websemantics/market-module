<?php namespace Websemantics\MarketModule\Http\Controller\Admin;

use Anomaly\Streams\Platform\Http\Controller\AdminController;

/**
 * Class MarketController
 *
 *
 * @package   Websemantics\MarketModul\Http\Controller\Admin
 */

class MarketController extends AdminController
{
 /**
   * Return master admin view.
   *
   * @return \Illuminate\View\View|\Symfony\Component\HttpFoundation\Response
   */
  public function index()
  {
       return view('websemantics.module.market::admin.master');
  }
}