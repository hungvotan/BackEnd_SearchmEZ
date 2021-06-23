<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminFeedController extends Controller
{
    public function logout(Request $request) {
        Auth::logout();
        return redirect('/login');
    }
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
