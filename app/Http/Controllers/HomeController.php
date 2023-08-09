<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
// use App\Models\Backend\District;
// use App\Models\Backend\City;
// use App\Models\Backend\Slider;
// use App\Models\Backend\Institute;
// use App\Models\Backend\Filter;
// use App\Models\Backend\Stream;
// use App\Models\Backend\Promotionslider;
// use App\Models\Backend\Promotionslidertwo;
// use App\Models\Backend\Category;
// use App\Models\Institute\InstituteReview;
// use App\Models\Backend\Contactus;
// use Illuminate\Support\Facades\Validator;
// use Illuminate\Support\Str;
// use App\Models\Backend\Users;
// use App\Models\Backend\Otp;
use App\Models\Backend\Filtercategory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
// use Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Institute\InstituteContact_us;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }
    
    public function index()
    {
        return view('welcome');
    }
}
   
