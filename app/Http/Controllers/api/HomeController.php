<?php
namespace App\Http\Controllers\api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use App\Models\User;
use App\Models\Backend\District;
use App\Models\Backend\City;
use App\Models\Backend\Slider;
use App\Models\Backend\Institute;
use App\Models\Backend\Promotionslider;
use App\Models\Backend\Promotionslidertwo;
use App\Models\Backend\Filtercategory;
use App\Models\Backend\Filter;
use App\Models\Institute\InstituteGallery;
use App\Models\Institute\InstituteReview;
use App\Models\Institute\InstituteContact_us;
use App\Models\Backend\Users;
use App\Models\Backend\Contactus;
// use Facade\FlareClient\Http\Response as HttpResponse;
use Illuminate\Support\Facades\Validator;
// use Response;
use Laravel\Sanctum\PersonalAccessToken;
use Str;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //---- Home Start -------//
    public function home(Request $request)
    {
        $fields = ['id', 'name', 'image', 'address', 'short_description'];
        $bearerToken = $request->header('Authorization');
        if ($bearerToken) {
            $token_word = explode(" ", $bearerToken);
            $token = PersonalAccessToken::findToken($token_word[1]);
            if ($token) {
                $fields = ['id', 'name', 'image', 'address', 'short_description', 'phone'];
            }
        }
        $sliders = Slider::wherenull('deleted_at')->Where("is_active", 1)->latest()->get(['id', 'image']);
        $Promotionslider = Promotionslider::wherenull('deleted_at')->Where("is_active", 1)->latest()->get(['id', 'image']);
        $Promotionslider2 = Promotionslidertwo::wherenull('deleted_at')->Where("is_active", 1)->latest()->get(['id', 'image']);
        $category = DB::table('category')->Where("is_active", 1)->get(['id', 'name', 'image']);
        $school = Institute::wherenull('deleted_at')->Where(["category_id" => 1, "is_active" => 1])->inRandomOrder()->limit(10)->get($fields);
        $coaching = Institute::wherenull('deleted_at')->Where(["category_id" => 2, "is_active" => 1])->inRandomOrder()->limit(10)->get($fields);
        $college = Institute::wherenull('deleted_at')->Where(["category_id" => 3, "is_active" => 1])->inRandomOrder()->limit(10)->get($fields);
        $academy = Institute::wherenull('deleted_at')->Where(["category_id" => 4, "is_active" => 1])->inRandomOrder()->limit(10)->get($fields);
        $pg_hostel = Institute::wherenull('deleted_at')->Where(["category_id" => 5, "is_active" => 1])->inRandomOrder()->limit(10)->get($fields);
        $library = Institute::wherenull('deleted_at')->Where(["category_id" => 6, "is_active" => 1])->inRandomOrder()->limit(10)->get($fields);
        //---- slider image manage ----
        foreach ($sliders as $slide) {
            if (!empty($slide->image)) {
                $slide->image =  asset($slide->image);
            } else {
                $slide->image = '';
            }
        }
        //---- slider image manage ----
        foreach ($Promotionslider as $slide) {
            if (!empty($slide->image)) {
                $slide->image =  asset($slide->image);
            } else {
                $slide->image = '';
            }
        }
        //---- slider image manage ----
        foreach ($Promotionslider2 as $slide) {
            if (!empty($slide->image)) {
                $slide->image =  asset($slide->image);
            } else {
                $slide->image = '';
            }
        }
        //---- category image manage ----
        foreach ($category as $cat) {
            if (!empty($cat->image)) {
                $cat->image =  asset($cat->image);
            } else {
                $cat->image = '';
            }
        }
        //---- school image manage ----
        foreach ($school as $scl) {
            if (!empty($scl->image)) {
                $scl->image =  asset($scl->image);
            } else {
                $scl->image = '';
            }
        }
        //---- coaching image manage ----
        foreach ($coaching as $coa) {
            if (!empty($coa->image)) {
                $coa->image =  asset($coa->image);
            } else {
                $coa->image = '';
            }
        }
        //---- college image manage ----
        foreach ($college as $clg) {
            if (!empty($clg->image)) {
                $clg->image =  asset($clg->image);
            } else {
                $clg->image = '';
            }
        }
        //---- academy image manage ----
        foreach ($academy as $acd) {
            if (!empty($acd->image)) {
                $acd->image =  asset($acd->image);
            } else {
                $acd->image = '';
            }
        }
        //---- pg_hostel image manage ----
        foreach ($pg_hostel as $pg) {
            if (!empty($pg->image)) {
                $pg->image =  asset($pg->image);
            } else {
                $pg->image = '';
            }
        }
        //---- library image manage ----
        foreach ($library as $lb) {
            if (!empty($lb->image)) {
                $lb->image =  asset($lb->image);
            } else {
                $lb->image = '';
            }
        }
        $response = array(
            'sliders' => $sliders,
            'Promotionslider' => $Promotionslider,
            'Promotionslider2' => $Promotionslider2,
            'category' => $category,
            'school' => $school,
            'coaching' => $coaching,
            'college' => $college,
            'academy' => $academy,
            'pg_hostel' => $pg_hostel,
            'library' => $library,
        );
        $data =  [
            'status' => '200',
            'message' => 'success',
            'data' => $response
        ];
        return response()->json($data);
    }
    //---- Home End-------//
    ///----- State  Start------//
    public function getState(Request $request)
    {
        $stateData = DB::table('all_states')->get();
        $response = [];
        foreach ($stateData as $data) {
            $response[] = array(
                'label' => $data->state_name,
                'value' => $data->id,
            );
        }
        $data =  [
            'status' => '200',
            'message' => 'success',
            'data' => $response
        ];
        return response()->json($data);
    }
    ///----- District End------//
    ///----- District  Start------//
    public function getDistrict($id)
    {
        $district = District::where(['state_id' => $id, 'is_active' => 1])->get(['id', 'district_name']);
        $response = [];
        foreach ($district as $data) {
            $response[] = array(
                'label' => $data->district_name,
                'value' => $data->id,
            );
        }
        $data =  [
            'status' => '200',
            'message' => 'success',
            'data' => $response
        ];
        return response()->json($data);
    }
    ///----- District End------//
    ///----- City  Start------//
    public function getCity($id)
    {
        $City = City::where(['district_id' => $id, 'is_active' => 1])->get(['id', 'city']);
        $response = [];
        foreach ($City as $data) {
            $response[] = array(
                'label' => $data->city,
                'value' => $data->id,
            );
        }
        $data =  [
            'status' => '200',
            'message' => 'success',
            'data' => $response
        ];
        return response()->json($data);
    }
    ///----- City End------//
    function checkValuesExist($array1, $array2)
    {
        foreach ($array1 as $value) {
            if (in_array($value, $array2)) {
                return true;
            }
        }
        return false;
    }
    ///----- GetAllInstitutes Start------//
    public function GetAllInstitutes(Request $request)
    {
        $fields = ['id', 'name', 'image', 'address', 'short_description', 'filter_id'];
        $bearerToken = $request->header('Authorization');
        if ($bearerToken) {
            $token_word = explode(" ", $bearerToken);
            $token = PersonalAccessToken::findToken($token_word[1]);
            if ($token) {
                $fields = ['id', 'name', 'image', 'address','short_description',  'phone', 'filter_id'];
            }
        }
        $data = null;
        $validator = Validator::make($request->all(), [
            'state_id' => 'required',
            'district_id' => 'required',
            'city_id' => 'required',
            'category_id' => 'required',
            'filters' => '',
        ]);
        if ($validator->fails()) {
            $messages = [];
            $errors = $validator->errors();
            foreach ($errors->all() as $message) {
                $messages = $message;
                break;
            }
            $data =  [
                'status' => '201',
                'message' => $messages,
            ];
            return response()->json($data);
        }
        // $filtersArray = $request->filters;
        $filtersArray = json_decode($request->filters);
        $instituteData = Institute::where(['category_id' => $request->category_id, 'state_id' => $request->state_id, 'district_id' => $request->district_id, 'city_id' => $request->city_id, 'is_active' => 1])->get($fields);
        // Function to check if values from $array1 exist in $array2
        //---- institute image manage ----
        foreach ($instituteData as  $key => $lb) {
            if (!empty($filtersArray)) {
                if ($this->checkValuesExist(json_decode(($lb->filter_id)), $filtersArray)) {
                    $average = InstituteReview::where(['institute_id' => $lb->id, 'is_active' => 1,])->avg('rating');
                    $count = InstituteReview::where(['institute_id' => $lb->id, 'is_active' => 1,])->count();
                    $lb->average = $average == null ? 0 : round($average,1);
                    $lb->count = $count;
                    if (!empty($lb->image)) {
                        $lb->image =  asset($lb->image);
                    } else {
                        $lb->image = '';
                    }
                } else {
                    // Remove the index from the array
                    unset($instituteData[$key]);
                }
            } else {
                $average = InstituteReview::where(['institute_id' => $lb->id, 'is_active' => 1,])->avg('rating');
                $count = InstituteReview::where(['institute_id' => $lb->id, 'is_active' => 1,])->count();
                $lb->average = $average == null ? 0 : round($average,1);
                $lb->count = $count;
                if (!empty($lb->image)) {
                    $lb->image =  asset($lb->image);
                } else {
                    $lb->image = '';
                }
            }
        }
        $category = DB::table('category')->Where("id", $request->category_id)->get(['id', 'name']);
        $filterCategory = Filtercategory::where(['category_id' => $request->category_id, 'is_active' => 1])->get(['id', 'name']);
        // Eager load the filters for each category
        $filterCategory->load(['filters' => function ($query) {
            $query->where('is_active', 1);
        }]);
        $response = array(
            'instituteData' => $instituteData,
            'category' => $category,
            'filterCategory' => $filterCategory,
        );
        $data =  [
            'status' => '200',
            'message' => 'success',
            'data' => $response,
        ];
        return response()->json($data);
    }
    ///----- GetAllInstitutes End------//
    ///----- InstituteDetails Start------//
    public function InstituteDetails(Request $request)
    {
        $fields = ['id', 'name', 'address', 'image', 'short_description', 'description', 'fees_structure', 'fees_structure_pdf',];
        $bearerToken = $request->header('Authorization');
        if ($bearerToken) {
            $token_word = explode(" ", $bearerToken);
            $token = PersonalAccessToken::findToken($token_word[1]);
            if ($token) {
                $fields = ['id', 'name', 'address', 'image', 'short_description', 'description', 'fees_structure', 'fees_structure_pdf', 'phone'];
            }
        }
        $id = $request->header('Id');
        $instituteData = Institute::where(['id' => $id, 'is_active' => 1])->first($fields);
        $galleryData = InstituteGallery::where(['institute_id' => $id, 'is_active' => 1, 'is_approved' => 1])->get(['id', 'image']);
        $ReviewData = InstituteReview::where(['institute_id' => $id, 'is_active' => 1,])->latest()->limit(10)->get(['id', 'rating', 'message', 'user_id', 'created_at']);
        $average = InstituteReview::where(['institute_id' => $id, 'is_active' => 1,])->avg('rating');
        if (!empty($instituteData->image)) {
            $instituteData->image =  asset($instituteData->image);
        } else {
            $instituteData->image = '';
        }
        if (!empty($instituteData->fees_structure)) {
            $instituteData->fees_structure =  asset($instituteData->fees_structure);
        } else {
            $instituteData->fees_structure = '';
        }
        if (!empty($instituteData->fees_structure_pdf)) {
            $instituteData->fees_structure_pdf =  asset($instituteData->fees_structure_pdf);
        } else {
            $instituteData->fees_structure_pdf = '';
        }
        //---- galleryData image manage ----
        foreach ($galleryData as $lb) {
            if (!empty($lb->image)) {
                $lb->image =  asset($lb->image);
            } else {
                $lb->image = '';
            }
        }
        //---- ReviewData manage ----
        foreach ($ReviewData as $rv) {
            $userData = Users::where('id', $rv->user_id)->first();
            $rv->name = $userData ? $userData->name : '';
            $rv->date = date('d-M-Y', strtotime($rv->created_at));;
        }
        $response = array(
            'instituteData' => $instituteData,
            'galleryData' => $galleryData,
            'ReviewData' => $ReviewData,
            'average' => round($average,1),
            'count' => count($ReviewData),
        );
        $data =  [
            'status' => '200',
            'message' => 'success',
            'data' => $response,
        ];
        return response()->json($data);
    }
    ///----- GetAllInstitutes End------//
    ///----- contactInstitute Start------//
    public function contactInstitute(Request $request)
    {
        $bearerToken = $request->header('Authorization');
        if ($bearerToken) {
            $token_word = explode(" ", $bearerToken);
            $token = PersonalAccessToken::findToken($token_word[1]);
            if ($token) {
                $user = $token->tokenable;
            }
        }
        if (!empty($user)) {
            $data = null;
            $validator = Validator::make($request->all(), [
                'institute_id' => 'required',
                'name' => 'required',
                'email' => 'required',
                'message' => 'required',
            ]);
            if ($validator->fails()) {
                $messages = [];
                $errors = $validator->errors();
                foreach ($errors->all() as $message) {
                    $messages = $message;
                    break;
                }
                $data =  [
                    'status' => '201',
                    'message' => $messages,
                ];
                return response()->json($data);
            }
            $reviews = new InstituteContact_us();
            $reviews->user_id =  $user->id;
            $reviews->institute_id =  $request->institute_id;
            $reviews->name =  $request->name;
            $reviews->email =  $request->email;
            $reviews->message =  $request->message;
            $reviews->ip = $request->ip();
            $reviews->is_active = 1;
            $reviews->save();
            if ($reviews) {
                $data =  [
                    'status' => '200',
                    'message' => 'Request successfully submitted!',
                ];
                return response()->json($data);
            } else {
                $data =  [
                    'status' => '201',
                    'message' => 'Some error occurred!',
                ];
                return response()->json($data);
            }
        } else {
            $data =  [
                'status' => '201',
                'message' => 'Some error occurred!',
            ];
            return response()->json($data);
        }
    }
    ///----- GetAllInstitutes End------//
    ///----- addReview Start------//
    public function addReview(Request $request)
    {
        $bearerToken = $request->header('Authorization');
        if ($bearerToken) {
            $token_word = explode(" ", $bearerToken);
            $token = PersonalAccessToken::findToken($token_word[1]);
            if ($token) {
                $user = $token->tokenable;
            }
        }
        if (!empty($user)) {
            $data = null;
            $validator = Validator::make($request->all(), [
                'institute_id' => 'required',
                'rating' => 'required',
                'review' => 'required',
            ]);
            if ($validator->fails()) {
                $messages = [];
                $errors = $validator->errors();
                foreach ($errors->all() as $message) {
                    $messages = $message;
                    break;
                }
                $data =  [
                    'status' => '201',
                    'message' => $messages,
                ];
                return response()->json($data);
            }
            $reviews = new InstituteReview();
            $reviews->user_id =  $user->id;
            $reviews->institute_id =  $request->institute_id;
            $reviews->rating =  $request->rating;
            $reviews->message =  $request->review;
            $reviews->ip = $request->ip();
            $reviews->is_active = 1;
            $reviews->save();
            if ($reviews) {
                $data =  [
                    'status' => '200',
                    'message' => 'Review successfully submitted!',
                ];
                return response()->json($data);
            } else {
                $data =  [
                    'status' => '201',
                    'message' => 'Some error occurred!',
                ];
                return response()->json($data);
            }
        } else {
            $data =  [
                'status' => '201',
                'message' => 'Some error occurred!',
            ];
            return response()->json($data);
        }
    }
    ///----- addReview End------//
    public function getReviews(Request $request)
    {
        $data = null;
        $id = $request->header('Id');
        if ($id) {
            $ReviewData = InstituteReview::where(['institute_id' => $id, 'is_active' => 1,])->latest()->get(['id', 'rating', 'message', 'user_id', 'created_at']);
            $average = InstituteReview::where(['institute_id' => $id, 'is_active' => 1,])->avg('rating');
            //---- ReviewData manage ----
            foreach ($ReviewData as $rv) {
                $userData = Users::where('id', $rv->user_id)->first();
                $rv->name = $userData ? $userData->name : '';
                $rv->date = date('d-M-Y', strtotime($rv->created_at));;
            }
            $response = ['ReviewData' => $ReviewData, 'average' => round($average,1),];
            $data =  [
                'status' => '200',
                'message' => 'success',
                'data' => $response,
            ];
            return response()->json($data);
        } else {
            $data =  [
                'status' => '201',
                'message' => 'Some error occurred!',
            ];
            return response()->json($data);
        }
    }
    ///----- GetAllInstitutes End------//
    //-----user update profile Start-------//
    public function update_profile(Request $request)
    {
        $bearerToken = $request->header('Authorization');
        $token_word = explode(" ", $bearerToken);
        $token = PersonalAccessToken::findToken($token_word[1]);
        $user = $token->tokenable;
        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);
        if ($validator->fails()) {
            $messages = [];
            $errors = $validator->errors();
            foreach ($errors->all() as $message) {
                $messages = $message;
                break;
            }
            $data =  [
                'status' => '201',
                'message' => $messages,
            ];
            return response()->json($data);
        }
        $user = Users::where('id', $user->id)->first();
        $user->name = $request->name;
        $user->save();
        if ($user) {
            $data = [
                'status' => 200,
                'message' => 'Information updated.',
            ];
            $status = 200;
        } else {
            $data = [
                'status' => '201',
                'message' => 'Something went wrong',
            ];
            $status = 400;
        }
        return  response()->json($data);
    }
    //------User Update Profile End-----//
}
