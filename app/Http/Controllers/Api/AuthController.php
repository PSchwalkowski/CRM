<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Api\ApiController;

use Validator;

use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;


class AuthController extends ApiController {

	public function login(Request $request) {
		$validator = Validator::make($request->all(), [
			'email' => 'required|exists:users,email',
			'password' => 'required',
		]);

		if ($validator->fails()) {
			return response()->json(['errors' => $validator->errors()], self::ERROR_CODE);
		}

		if (!$token = JWTAuth::attempt($request->only('email', 'password'))) {
			return response()->json(
				['errors' => ['password' => ['Invalid password.']]],
				self::ERROR_CODE
			);
		}

		return response()->json(['token' => $token]);
	}

}
