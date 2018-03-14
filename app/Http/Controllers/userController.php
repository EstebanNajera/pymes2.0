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


    public function create()
	{
		return view('test.createUsers');

	}
	public function store(userrsFromRequest $request)
	{
		$user = new User;
		$user->nombre=$request->get('nombre');
		$user->apellidoM=$request->get('apellidoM');
		$user->apellidoP=$request->get('apellidoP');
		$user->email=$request->get('email');
		$user->password=$request->get('password');
		$user->save();

		return Redirect::to('test');
	}
	public function show($id)
	{
		return view('test.show',['user'=>user::findOrFail($id)]);
	}
	public function edit($id)
	{
		return view('test.edit',['user'=>user::findOrFail($id)]);
	}
	public function update(userrsFromRequest $request,$id)
	{
		$user = User::findOrFail($id);
		$user->nombre=$request->get('nombre');
		$user->apellidoM=$request->get('apellidoM');
		$user->apellidoP=$request->get('apellidoP');
		$user->email=$request->get('email');
		$user->password=$request->get('password');
		$user->update();

		return Redirect::to('test');
	}
	public function destroy($id)
	{
		$user = User::findOrFail($id);
		$user->update();
		return Redirect::to('test');
	}
}
