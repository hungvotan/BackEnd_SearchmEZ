<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminFeedController extends Controller
{

  public function AdminFeed()
  {
    $breadcrumbs = [
      ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "AdminFeed"], ['name' => "AdminFeed"]
    ];
    return view('/adminfeed/adminfeed', [
      'breadcrumbs' => $breadcrumbs
    ]);
  }


}
