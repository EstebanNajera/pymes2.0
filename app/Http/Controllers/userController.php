<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;

class userController extends Controller
{
    //

    public function index()
    {
    	$users = Users::all('id','nombre','apellidoP','apellidoM','email','id_role');

    	return view('alumnos')->with('estudiantes', $users);
    }
}
