<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;//cuando se mueve a otra carpeta se debe agregar esto
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->middleware('auth:sanctum')->except(['login','register']);
    }

    
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:4', 'confirmed'],
        ]);
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Json Response with success or failed.
     */
    public function login(Request $request)
    {
        if (Auth::attempt($request->only('email', 'password'))) {
            //$token = Str::random(60);//esto se utiliza con el campo api_token dentro de la tabla y con hash activado en config/auth.hp
            //$user=User::find($request->user()->id)->update(['api_token' => hash('sha256', $token)]);
            $user=User::find($request->user()->id)->firstOrFail();
            $token = $user->createToken('auth_token')->plainTextToken;
            return response()->json([
                'response' => 'success',
                'message' => 'Login successful',
                'token' => $token,
                'user' => $user->name,
            ], 200);
        }else{
            return response()->json(['response' => 'failed','message' => 'Invalid login credentials'], 401);
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Json Response with success or failed.
     */
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();
        //$token = Str::random(60);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            //'api_token' => hash('sha256', $token),
        ]);

        $token = $user->createToken('auth_token')->plainTextToken;
        //$this->guard()->login($user);

        return response()->json([
                                'response' => 'success',
                                'message'=> 'registration successful',
                                'token'=> $token,
                                'user' => $user->name,
                                ], 200);
    }

    /**
     * Display a listing of the resource.
     */
    /*protected function guard()
    {
        return Auth::guard();
    }*/

    /**
     * Cierra la sesión actual
     */
    public function logout(Request $request)
    {
        if(Auth::check()){
            //User::find($request->user()->id)->update(['api_token' => null]);
            $request->user()->currentAccessToken()->delete();
            return response()->json(['response' => 'success','message' => 'Logged Out'], 200);
        }else{
            return response()->json(['response' => 'success','error' =>'something went wrong'], 500);
        }
    }

    /**
     * Cierra todas las sesiones
     */
    public function logoutall(Request $request)
    {
        if(Auth::check()){
            $user = $request->user();
            $user->tokens()->where('tokenable_id', $user->id)->delete();
            return response()->json(['response' => 'success','message' => 'Logged Out'], 200);
        }else{
            return response()->json(['response' => 'success','error' =>'something went wrong'], 500);
        }
    }

    /**
     * Display a current user
     *
     * @return \Illuminate\Http\Response
     */
    public function profile(Request $request)
    {
        return $request->user();
    }
}
