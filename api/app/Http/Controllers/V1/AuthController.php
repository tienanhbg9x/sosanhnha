<?php
namespace App\Http\Controllers\V1;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|max:255',
            'password' => 'required',
        ]);
        if ($validator->fails()) return $this->createResponse($validator->errors(),403);
        $user = User::where('email',$request->email)->first();
        if($user){
            if(password_verify($request->password,$user->password)){
                if($user->active==0){
                    return $this->createResponse(['message'=>'Tài khoản đang bị khóa!'],500);
                }
                return $this->createResponse(['access_token'=>createJwt(['id'=>$user->id],$user->password,365*24*3600)]);
            }else{
                return $this->createResponse(['message'=>'Mật khẩu không đúng'],401);
            }
        }
        return $this->createResponse('Tài khoản không tồn tại!',404);
    }

    public function register(Request $request){
            $validator = Validator::make($request->all(),[
                'name' => 'required|min:6|max:255',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:6',
                'c_password' => 'required|same:password'

            ]);

            if ($validator->fails()){
                return response()->json(['error' => $validator->errors()], 401);
            }

            $input = $request->all();
                $input['password'] = bcrypt($input['password']);
                $user = User::create($input);
                $success['token'] = $user->createToken('access_token')->accessToken;
                $success['name'] = $user->name;
                return response()->json(['success' => $success], 200);


    }

}