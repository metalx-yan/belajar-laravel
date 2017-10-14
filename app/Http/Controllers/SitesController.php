<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SitesController extends Controller
{
  /**
   * Show the welcome page for the root path
   *
   * @return view
   */
  public function welcome()
  {
    return view('sites.welcome');
  }

  /**
   * Show hello page
   *
   * @return view
   */
  public function hello()
  {
      return view('sites.hello');
  }
  /**
   * Show hello name page
   *
   * @return view
   */
  public function helloName($param)
  {
      return view('sites.hello-name', compact('param'));
  }
  
}
