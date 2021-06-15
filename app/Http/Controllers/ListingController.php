<?php

namespace App\Http\Controllers;

use App\Model\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ListingController extends Controller
{

  public function Animals()
  {
    $breadcrumbs = [
      ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Listing"], ['name' => "Animal"]
    ];
    $get_listing = $this->get_listing('animals');
    $data['breadcrumbs'] = $breadcrumbs;
    $data['get_listing'] = $get_listing;
      $data['listing'] = 'animals';
    return view('/listing/listing-animals', $data);
  }

    public function Auction()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Listing"], ['name' => "Auction"]
        ];
        $get_listing = $this->get_listing('auction');
        $data['breadcrumbs'] = $breadcrumbs;
        $data['get_listing'] = $get_listing;
        $data['listing'] = 'auction';
        return view('/listing/listing-auction', $data);
    }
    public function Automobiles()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Listing"], ['name' => "Automobiles"]
        ];
        $get_listing = $this->get_listing('automobiles');
        $data['breadcrumbs'] = $breadcrumbs;
        $data['get_listing'] = $get_listing;
        $data['listing'] = 'automobiles';
        return view('/listing/listing-automobiles', $data);
    }
    public function Blogs()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Listing"], ['name' => "Blogs"]
        ];
        $get_listing = $this->get_listing('blogs');
        $data['breadcrumbs'] = $breadcrumbs;
        $data['get_listing'] = $get_listing;
        $data['listing'] = 'blogs';
        return view('/listing/listing-blogs', $data);
    }
    public function Booking()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Listing"], ['name' => "Booking"]
        ];
        $get_listing = $this->get_listing('booking');
        $data['breadcrumbs'] = $breadcrumbs;
        $data['get_listing'] = $get_listing;
        $data['listing'] = 'booking';
        return view('/listing/listing-booking', $data);
    }
    public function Coupon()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Listing"], ['name' => "Coupon"]
        ];
        $get_listing = $this->get_listing('coupon');
        $data['breadcrumbs'] = $breadcrumbs;
        $data['get_listing'] = $get_listing;
        $data['listing'] = 'coupon';
        return view('/listing/listing-coupon', $data);
    }
    public function Edibles()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Listing"], ['name' => "Edibles"]
        ];
        $get_listing = $this->get_listing('edibles');
        $data['breadcrumbs'] = $breadcrumbs;
        $data['get_listing'] = $get_listing;
        $data['listing'] = 'edibles';
        return view('/listing/listing-edibles', $data);
    }
    public function Events()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Listing"], ['name' => "Events"]
        ];
        $get_listing = $this->get_listing('events');
        $data['breadcrumbs'] = $breadcrumbs;
        $data['get_listing'] = $get_listing;
        $data['listing'] = 'events';
        return view('/listing/listing-events', $data);
    }
    public function Generallisting()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Listing"], ['name' => "Generallisting"]
        ];
        $get_listing = $this->get_listing('generallisting');
        $data['breadcrumbs'] = $breadcrumbs;
        $data['get_listing'] = $get_listing;
        $data['listing'] = 'generallisting';
        return view('/listing/listing-generallisting', $data);
    }
    public function Jobs()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Listing"], ['name' => "Jobs"]
        ];
        $get_listing = $this->get_listing('jobs');
        $data['breadcrumbs'] = $breadcrumbs;
        $data['get_listing'] = $get_listing;
        $data['listing'] = 'jobs';
        return view('/listing/listing-jobs', $data);
    }
    public function Places()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Listing"], ['name' => "Places"]
        ];
        $get_listing = $this->get_listing('places');
        $data['breadcrumbs'] = $breadcrumbs;
        $data['get_listing'] = $get_listing;
        $data['listing'] = 'jobs';
        return view('/listing/listing-places', $data);
    }
    public function Products()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Listing"], ['name' => "Products"]
        ];
        $data['listing'] = 'products';
        $get_listing = $this->get_listing($data['listing']);
        $data['breadcrumbs'] = $breadcrumbs;
        $data['get_listing'] = $get_listing;
        return view('/listing/listing-products', $data);
    }
    public function Realestate()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Listing"], ['name' => "Real estate"]
        ];
        $data['listing'] = 'realestate';
        $get_listing = $this->get_listing($data['listing']);
        $data['breadcrumbs'] = $breadcrumbs;
        $data['get_listing'] = $get_listing;
        return view('/listing/listing-realestate', $data);
    }
    public function Services()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Listing"], ['name' => "Services"]
        ];
        $data['listing'] = 'services';
        $get_listing = $this->get_listing($data['listing']);
        $data['breadcrumbs'] = $breadcrumbs;
        $data['get_listing'] = $get_listing;
        return view('/listing/listing-services', $data);
    }
    public function Webdirectory()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Listing"], ['name' => "Web directory"]
        ];
        $data['listing'] = 'webdirectory';
        $get_listing = $this->get_listing($data['listing']);
        $data['breadcrumbs'] = $breadcrumbs;
        $data['get_listing'] = $get_listing;
        return view('/listing/listing-webdirectory', $data);
    }

    public function addnew(Request $request)
    {
        $userId = Auth::id();
        $rules = [
            'title' => 'required',
            'description' => 'required',
        ];
        $validator = Validator::make($request->all(),$rules);

        if ($validator->fails()) {
            return redirect()->back()->withInput()
                ->with('errors','Errors');
        } else {
            //Product
            $slug = str_replace(' ', '-', $request->post('title'));
            try {
                $products_id = DB::table('product')->insertGetId([
                    'userId' => $userId,
                    'listing' => $request->post('listing'),
                    'list' => $request->post('list'),
                    'template' => $request->post('template'),
                    'slug' => $slug,
                    'type' => $request->post('type'),
                    'title' => $request->post('title'),
                    'description' => $request->post('description'),
                    'status' => 'Open'
                ]);
            } catch(Exception $e){
                return redirect()->back()->with('error','Errors.');
            }

            if(isset($products_id)) {
                try {
                    if($request->post('checkbox')) {
                        $checkbox = implode('|',$request->post('checkbox'));
                    } else {
                        $checkbox = '';
                    }
                    if($request->post('booking_checkbox')) {
                        $booking_checkbox = implode('|',$request->post('booking_checkbox'));
                    } else {
                        $booking_checkbox = '';
                    }
                    if($request->post('realestate_checkbox')) {
                        $realestate_checkbox = implode('|',$request->post('realestate_checkbox'));
                    } else {
                        $realestate_checkbox = '';
                    }
                    if($request->post('services_checkbox')) {
                        $services_checkbox = implode('|',$request->post('services_checkbox'));
                    } else {
                        $services_checkbox = '';
                    }

                    DB::table('product_listing')->insertGetId([
                        'product_id' => $products_id,
                        'asking_price' => $request->post('asking_price'),
                        'googlemap' => $request->post('googlemap'),
                        'location' => $request->post('location'),
                        'category' => $request->post('category'),
                        'age' => $request->post('age'),
                        'color' => $request->post('color'),
                        'weight' => $request->post('weight'),
                        'length' => $request->post('length'),
                        'width' => $request->post('width'),
                        'height' => $request->post('height'),
                        'special_traits' => $request->post('special_traits'),
                        'checkbox' => $checkbox,
                        'shipping_method' => $request->post('shipping_method'),
                        'shipping_fee' => $request->post('shipping_fee'),
                        'include_question'  => $request->post('include_question'),
                        'starting_price'  => $request->post('starting_price'),
                        'auction_closing_date'  => $request->post('auction_closing_date'),
                        'auction_closing_time'  => $request->post('auction_closing_time'),
                        'body_type'  => $request->post('body_type'),
                        'model'  => $request->post('model'),
                        'year'  => $request->post('year'),
                        'odometer'  => $request->post('odometer'),
                        'fuel_type'  => $request->post('fuel_type'),
                        'transmission_type'  => $request->post('transmission_type'),
                        'seats'  => $request->post('seats'),
                        'conditions'  => $request->post('conditions'),
                        'engine_size'  => $request->post('engine_size'),
                        'industry'  => $request->post('industry'),
                        'job_type'  => $request->post('job_type'),
                        'job_term'  => $request->post('job_term'),
                        'candidates_needed'  => $request->post('candidates_needed'),
                        'pay_per'  => $request->post('pay_per'),
                        'pay_range'  => $request->post('pay_range'),
                        'experience_requirement'  => $request->post('experience_requirement'),
                        'organization'  => $request->post('organization'),
                        'perks'  => $request->post('perks'),
                        'key_responsibilities'  => $request->post('key_responsibilities'),
                        'ideal_candidate'  => $request->post('ideal_candidate'),
                        'company_profile'  => $request->post('company_profile'),
                        'food_type'  => $request->post('food_type'),
                        'manufactured_date'  => $request->post('manufactured_date'),
                        'best_before_date'  => $request->post('best_before_date'),
                        'expriy_date'  => $request->post('expriy_date'),
                        'batch_number'  => $request->post('batch_number'),
                        'country_of_origin'  => $request->post('country_of_origin'),
                        'manufacturer'  => $request->post('manufacturer'),
                        'any_special_requirement'  => $request->post('any_special_requirement'),
                        'price_per_adult'  => $request->post('price_per_adult'),
                        'price_per_child'  => $request->post('price_per_child'),
                        'booking_checkbox'  => $booking_checkbox,
                        'maximum_number'  => $request->post('maximum_number'),
                        'notable_amenities'  => $request->post('notable_amenities'),
                        'deal_ends'  => $request->post('deal_ends'),
                        'quantity'  => $request->post('quantity'),
                        'coupon_type'  => $request->post('coupon_type'),
                        'coupon_value'  => $request->post('coupon_value'),
                        'keywords'  => $request->post('keywords'),
                        'start_date'  => $request->post('start_date'),
                        'start_time'  => $request->post('start_time'),
                        'end_date'  => $request->post('end_date'),
                        'end_time'  => $request->post('end_time'),
                        'price_per'  => $request->post('price_per'),
                        'realestate_checkbox'  => $realestate_checkbox,
                        'bedroom'  => $request->post('bedroom'),
                        'bathroom'  => $request->post('bathroom'),
                        'car_parks'  => $request->post('car_parks'),
                        'year_built'  => $request->post('year_built'),
                        'open_house'  => $request->post('open_house'),
                        'land_area'  => $request->post('land_area'),
                        'floor_area'  => $request->post('floor_area'),
                        'roof_materials'  => $request->post('roof_materials'),
                        'floor_materials'  => $request->post('floor_materials'),
                        'wall_materials'  => $request->post('wall_materials'),
                        'amenities'  => $request->post('amenities'),
                        'services_checkbox'  => $services_checkbox,
                        'delivery_date'  => $request->post('delivery_date'),
                        'guarantee'  => $request->post('guarantee'),
                    ]);
                } catch(Exception $e){
                    return redirect()->back()->with('error','Errors.');
                }
                if ($request->hasFile('feature_image')) {
                    $files = $request->file('feature_image');

                    $destinationPath = 'searchmez/images/'.$request->post('listing').'/'; // upload path
                    $profileImage = $files->getClientOriginalName();
                    $files->move($destinationPath, $profileImage);
                    try {
                        DB::table('product_image')->insertGetId([
                            'product_id' => $products_id,
                            'type' => 'feature_image',
                            'url'  => $profileImage
                        ]);
                    } catch(Exception $e){
                        return redirect()->back()->with('error','Errors.');
                    }

                }
                if ($request->hasFile('file_video')) {
                    $files = $request->file('file_video');
                    $destinationPath = 'searchmez/images/'.$request->post('listing').'/';
                    if($request->hasFile('file_video'))
                    {
                        foreach ($files as $file) {
                            $profileImage = $file->getClientOriginalName();
                            $file->move($destinationPath, $profileImage);
                            try {
                                DB::table('product_image')->insertGetId([
                                    'product_id' => $products_id,
                                    'type' => 'file_video',
                                    'url'  => $profileImage
                                ]);
                            } catch(Exception $e){
                                return redirect()->back()->with('error','Errors.');
                            }
                        }
                    }
                }
                if ($request->hasFile('image')) {
                    $files = $request->file('image');
                    $destinationPath = 'searchmez/images/'.$request->post('listing').'/';
                    if($request->hasFile('image'))
                    {
                        foreach ($files as $file) {
                            $profileImage = $file->getClientOriginalName();
                            $file->move($destinationPath, $profileImage);
                            try {
                                DB::table('product_image')->insertGetId([
                                    'product_id' => $products_id,
                                    'type' => 'image',
                                    'url'  => $profileImage
                                ]);
                            } catch(Exception $e){
                                return redirect()->back()->with('error','Errors.');
                            }
                        }
                    }
                }
            }

        }

        return redirect()->back()->with('status', 'You have successfully created.');
    }
    public function get_listing($listing) {
      $user_id = Auth::id();

      $get_user = DB::table('users')
          ->select('*')
          ->where('id',$user_id)
          ->first();

        if(!isset($get_user)) {
            return null;
        }
        if($get_user->admin == 0) {
            $get_listing = DB::table('product')
                ->select('*')
                ->where('userId ',$user_id)
                ->where('listing',$listing)
                ->orderBy('id', 'desc')
                ->get();
        } else {
            $get_listing = DB::table('product')
                ->select('*')
                ->where('listing',$listing)
                ->orderBy('id', 'desc')
                ->get();
        }

       return $get_listing;
    }
}
