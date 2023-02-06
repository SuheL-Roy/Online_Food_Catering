<?php

namespace App\Http\Controllers;

use App\Coupon;
use Illuminate\Http\Request;

class offersController extends Controller
{
    public function view() {
        $coupon = Coupon::latest()->get();
        return view ('FrontEnd.include.offers',compact('coupon'));

    }
}
