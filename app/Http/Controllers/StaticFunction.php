<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\City;
use App\Ward;
use App\District;
use App\Post;
use App\User;

class StaticFunction extends Controller 
{
	public static function getDiaChi($id_xa, $id_qh) {
		$str = "";

		if ($id_xa != NULL)
			$str = $str.Ward::find($id_xa)->name.", ";
		
		$str = $str.District::find($id_qh)->name.", ";
		$str = $str.City::find(District::find($id_qh)->id_city)->name;

		return $str;
	}

	public static function getUsername($id) {
		$data = User::find($id);
		return $data->username;
	}

	public static function getAvatar($id) {
		$user = User::find($id);
		return $user->avatar;
	}
}