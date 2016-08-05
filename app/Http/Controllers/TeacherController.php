<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function user_posts_all(Request $request)
	{
		//
		$teacher = $request->teacher();
		return view('/auth/register');
	}
}
