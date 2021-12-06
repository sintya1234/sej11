<?php

// namespace App\Http\Controllers\Api;

// use App\Models\User;
// use Illuminate\Http\Request;
// use App\Http\Controllers\Controller;
// use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Validator;


// class AuthController extends Controller
// {
//     public $successStatus = 200;
//     public function register(Request $request)
//     {
//         $validator = Validator::make($request->all(), [
//             'name' => 'required',
//             'email' => 'required|email',
//             'password' => 'required',
//             'c_password' => 'required|same:password',
//         ]);
//         if ($validator->fails()) {
//             return response()->json(['error' => $validator->errors()]);
//         }

//         $input = $request->all();
//         $input['password'] = bcrypt($input['password']);
//         $user = User::Create($input);
//         $success['token'] = $user->createToken('nApp')->accessToken;
//         $success['name'] = $user->name;

//         return response()->json(['success' => $success], $this->successStatus);
//     }

//     public function login()
//     {
//         if (Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
//             $user = Auth::user();
//             $success['token'] = $user->createToken('nApp')->accessToken();
//             return response()->json(['success' => $success], $this->successStatus);
//         } else {
//             return response()->json(['error' => 'Error'], 401);
//         }
//     }
// }
