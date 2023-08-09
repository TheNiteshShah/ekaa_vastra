<?php
namespace App\Http\Controllers\api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Users;
use App\Models\Backend\Otp;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
// use Response;
// use Illuminate\Http\Response;
use Laravel\Sanctum\PersonalAccessToken;
// use Str;
use Auth;
use Illuminate\Support\Str;
class LoginController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $data = null;
        $validator = Validator::make($request->all(), [
            'phone' => 'required',
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
        $checkUser = Users::where('phone', $request->phone)->first();
        $OTP = random_int(100000, 999999);
        // $OTP = 123456;
        if ($checkUser) {
            if ($checkUser->is_active == 1) {
                //------ start send otp sms --------
                $msg = 'Dear user, Your OTP for log in on Edurators is ' . $OTP . '.Thanks for visiting us.';
                $dlt = LOGIN_DLT;
                $message = urlencode($msg);
                $curl = curl_init();
                curl_setopt_array($curl, array(
                    CURLOPT_URL => 'http://api.msg91.com/api/sendotp.php?authkey=' . SMSAUTH . '&mobile=91' . $request->phone . '&message=' . $message . '&sender=' . SMSID . '&otp=' . $OTP . '&DLT_TE_ID=' . $dlt . '',
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => '',
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 0,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => 'GET',
                    CURLOPT_HTTPHEADER => array(
                        'Cookie: PHPSESSID=prqus0jgeu7bi43bp2d1hjgtv0'
                    ),
                ));
                $response = curl_exec($curl);
                curl_close($curl);
                // echo $response;die();
                //------ stop send otp sms --------
                $otp = new Otp();
                $otp->phone = $request->phone;
                $otp->otp = $OTP;
                $otp->status = 0;
                $otp->ip = $request->ip();
                $otp->save();
                $data =  [
                    'status' => 200,
                    'message' => 'Please enter otp sent to your mobile number',
                ];
                return response()->json($data, $data['status']);
            } else {
                $data =  [
                    'status' => 201,
                    'message' => 'Your account is not active yet!',
                ];
                return response()->json($data);
            }
        } else {
            $otp = new Otp();
            $otp->phone = $request->phone;
            $otp->otp = $OTP;
            $otp->status = 0;
            $otp->ip = $request->ip();
            $otp->save();
            //------ start send otp sms --------
            $msg = 'Dear user, Your OTP for log in on Edurators is ' . $OTP . '.Thanks for visiting us.';
            $dlt = LOGIN_DLT;
            $message = urlencode($msg);
            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL => 'http://api.msg91.com/api/sendotp.php?authkey=' . SMSAUTH . '&mobile=91' . $request->phone . '&message=' . $message . '&sender=' . SMSID . '&otp=' . $OTP . '&DLT_TE_ID=' . $dlt . '',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'GET',
                CURLOPT_HTTPHEADER => array(
                    'Cookie: PHPSESSID=prqus0jgeu7bi43bp2d1hjgtv0'
                ),
            ));
            $response = curl_exec($curl);
            curl_close($curl);
            // echo $response;die();
            //------ stop send otp sms --------
            $data =  [
                'status' => 200,
                'message' => 'Please enter otp sent to your mobile number',
            ];
            return response()->json($data);
        }
    }
    public function VerifyOtp(Request $request)
    {
        $checkUser = Users::where('phone', $request->phone)->first();
        $validator = Validator::make($request->all(), [
            'name' => '',
            'phone' => 'required',
            'otp' => 'required',
        ]);
        $data = null;
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
        $otpData = Otp::where('phone', $request->phone)->latest()->first();
        if (!empty($otpData)) {
            if ($request->otp == $otpData->otp) {
                if ($otpData->status == 0) {
                    if (empty($checkUser)) {
                        $user = new Users();
                        $user->phone = $request->phone;
                        $user->ip = $request->ip();
                        $user->is_active = 1;
                        if ($user) {
                            $user->save();
                            $otpData->status = 1;
                            $otpData->save();
                            $token = $user->createToken('auth_token')->plainTextToken;
                            $data =  [
                                'status' => 200,
                                'message' => 'Account Successfully Registered!',
                                'user' => $user,
                                'token' => $token,
                            ];
                            return response()->json($data, $data['status']);
                        } else {
                            $data = [
                                'status' => 201,
                                'message' => 'Something went wrong',
                            ];
                            return response()->json($data);
                        }
                    } else {
                        $otpData->status = 1;
                        $otpData->save();
                        $token = $checkUser->createToken('auth_token')->plainTextToken;
                        $data =  [
                            'status' => 200,
                            'message' => 'Login Successfully!',
                            'user' => $checkUser,
                            'token' => $token,
                        ];
                        return response()->json($data, $data['status']);
                    }
                } else {
                    $data = [
                        'status' => 201,
                        'message' => 'OTP already used!',
                    ];
                    return response()->json($data);
                }
            } else {
                $data = [
                    'status' => 201,
                    'message' => 'Wrong OTP!',
                ];
                return response()->json($data);
            }
        } else {
            $data = [
                'status' => 201,
                'message' => 'Something went wrong',
            ];
            return response()->json($data);
        }
    }
}
