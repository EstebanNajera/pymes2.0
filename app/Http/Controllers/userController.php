<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class userController extends Controller
{
    //

    public function index()
    {
    	$users = User::all('id','nombre','apellidoP','apellidoM','email','id_role');

    	return view('alumnos')->with('estudiantes', $users);
    }


    public function create()
	{
		return view('createUsers');

	}
	public function store(userrsFromRequest $request)
	{

		User::create($request->all());
		return Redirect::to('test');
	}
	public function show($id)
	{
		return view('view',['user'=>user::findOrFail($id)]);
	}
	public function edit($id)
	{
		return view('edit',['user'=>user::findOrFail($id)]);
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
		User::findOrFail($id)->delete();
		return redirect('/Administrador');
	}
}
