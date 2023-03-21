<?php

namespace App\Http\Controllers\api;

use Illuminate\Routing\Controller as BaseController;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Auth,Hash, Validator};

class UserController extends BaseController
{
 public function createUser(Request $request){
    // pr($request->all());
    $validator = Validator::make($request->all(), [
            'name'             => 'required',
            'email'            => 'required|unique:users,email|email',
            'phone'            => 'required|numeric|unique:users,phone',
            'insta_username'   => 'required|unique:users,insta_username',
            'interest'         => 'required',
            'message'          => 'required',
            'password'         => 'required'
    ]);
    if ($validator->fails()) {
        return response()->json($validator->errors(), 202);
    }
    $data = $request->except(['_token', 'password']);
    $data['password'] = Hash::make($request->password);
    $inserUser = User::addUser($data);
    if ($inserUser) {
        return response()->json([
            'mesage' => 'User is created',
            'data'   => $inserUser
        ], 200);
    }

 }
}
