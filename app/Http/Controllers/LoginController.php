<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * @param LoginRequest $request
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function login(LoginRequest $request)
    {
        if (!Auth::attempt($request->validated())) {
            return response(['message' => trans('messages.errors.wrong_credentials')], 400);
        }

        return response([
            'message' => trans('messages.login_successfully'),
            'token' => auth()->user()->createToken('API Token')->plainTextToken
        ], 200);
    }
}
