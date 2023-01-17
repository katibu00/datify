<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{

    public function loginIndex() {
        return view('auth.login');
    }

    public function registerIndex() {
        return view('auth.register');
    }

    public function login(Request $request) {

        $validator = Validator::make($request->all(), [
            'login'=>'required|max:191',
            'password'=>'required|max:191'
        ]);
       
        if($validator->fails()){
            return response()->json([
                'status'=>400,
                'errors'=>$validator->messages(),
            ]);
        }else{


            
            $login = request()->input('login');
           

            $fieldType = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'login';
            request()->merge([$fieldType => $login]);


            if(!auth()->attempt($request->only($fieldType, 'password'),$request->remember)){
                return response()->json([
                    'status'=>401,
                    'message'=>'Invalid Credentials'
                ]);
            }

            if(Auth::user()->role == 'admin'){
                return response()->json([
                    'status'=>200,
                    'user'=>'admin',
                ]);
            }else if (Auth::user()->role == 'user'){
                return response()->json([
                    'status'=>200,
                    'user'=>'user',
                ]);
            }else{
                return back()->with('status','You are not authorized to access this content');
            }


        }


    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:191',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|digits:11|unique:users,phone',
            'password' => 'required|min:8',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 401,
                'errors' => $validator->messages(),
            ]);
        } else {

            $user = new User();
            $user->name = $request->name;
            $user->role = 'user';
            $user->phone = $request->phone;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->save();

            return response()->json([
                'status' => 201,
                'message' => 'User Registered Successfully',
            ]);

        }

    }

    public function logout(){
        auth()->logout();
        return redirect()->route('login');
    }
}
