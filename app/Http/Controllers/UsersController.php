<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function home()
    {
    	return view('users.home');
    }

    public function index()
    {
    	$users = User::paginate()->where('role', 'user');
    	//dd($users);
    	return view('users.index', compact('users'));
    }

    public function add()
    {

    }

    public function view($id)
    {   
        if($this->ruta('view'))
            $view = 'view';
        else
            $view = 'profile';

        $user = User::find($id);
        
        return view("users.$view", compact('user'));
    }

    public function edit($id)
    {
        
    }
}
