<?php
/**
 * Created by PhpStorm.
 * User: minhngoc
 * Date: 21/10/2019
 * Time: 16:24
 */

namespace App\Http\Controllers\V1;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UserController extends Controller
{
    function store(Request $request){
        $user_check = User::where('email',$request->email)->first();
        if(empty($user_check)){
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = password_hash($request->password, PASSWORD_BCRYPT, ['cost' => 12]);
            if($user->save()){
                return $this->createResponse('create');
            }
            return $this->createResponse('save user error',500);

        }
        return $this->createResponse('User đã tồn tại',500);
    }

}