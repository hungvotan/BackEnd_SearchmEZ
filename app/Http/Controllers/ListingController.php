<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListingController extends Controller
{

  public function Animals()
  {
    $breadcrumbs = [
      ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Listing"], ['name' => "Animal"]
    ];
    return view('/listing/listing-animals', [
      'breadcrumbs' => $breadcrumbs
    ]);
  }

    public function Auction()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Listing"], ['name' => "Auction"]
        ];
        return view('/listing/listing-auction', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }
    public function Automobiles()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Listing"], ['name' => "Automobiles"]
        ];
        return view('/listing/listing-automobiles', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }
    public function Blogs()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Listing"], ['name' => "Blogs"]
        ];
        return view('/listing/listing-blogs', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }
    public function Booking()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Listing"], ['name' => "Booking"]
        ];
        return view('/listing/listing-booking', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }
    public function Coupon()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Listing"], ['name' => "Coupon"]
        ];
        return view('/listing/listing-coupon', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }
    public function Edibles()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Listing"], ['name' => "Edibles"]
        ];
        return view('/listing/listing-edibles', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }
    public function Events()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Listing"], ['name' => "Events"]
        ];
        return view('/listing/listing-events', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }
    public function Generallisting()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Listing"], ['name' => "Generallisting"]
        ];
        return view('/listing/listing-generallisting', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }
    public function Jobs()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Listing"], ['name' => "Jobs"]
        ];
        return view('/listing/listing-jobs', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }
    public function Places()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Listing"], ['name' => "Places"]
        ];
        return view('/listing/listing-places', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }
    public function Products()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Listing"], ['name' => "Products"]
        ];
        return view('/listing/listing-products', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }
    public function Realestate()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Listing"], ['name' => "Real estate"]
        ];
        return view('/listing/listing-realestate', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }
    public function Services()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Listing"], ['name' => "Services"]
        ];
        return view('/listing/listing-services', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }
    public function Webdirectory()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Listing"], ['name' => "Web directory"]
        ];
        return view('/listing/listing-webdirectory', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }
}
