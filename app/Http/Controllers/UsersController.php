<?php

namespace App\Http\Controllers;

use App\User;
use App\People;
use App\Http\Requests\CreateUserRequest;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a view home.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        return view('users.home');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where('role', 'user')
            ->with('people')
            ->get();

        //return redirect('/messages/view/'.$message->id);
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateUserRequest $request)
    {
        //Este Metodo se usa cuando no se necesite un dato del objeto guardado, ejem: el id del obj guardado 
        /*$people = new People($request->all());
        $user = new User($request->all());*/

        // Este metodo crea directamente a la db el objeto instanciado
        // al crearlo devuelve ese objeto para ver y/o manipular esos datos
        $person = People::create([
            'dni' => $request->input('dni'),
            'name' => $request->input('name'),
            'lastname' => $request->input('lastname'),
            'phone' => $request->input('phone'),
            'direction' => $request->input('direction'),
            'type' => 'prof',
        ]);

        $user = User::create([
            'role' => 'user',
            'position' => 'profesor',
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'remember_token' => str_random(100),
            'people_id' => $person->id,
        ]);

        return back();
        //dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user) // Usamos Route Model Binding
    {
        if($this->ruta('profile'))
            $view = 'profile';
        else
            $view = 'view';

        /*$user = User::where('id', $id)
            ->with('people')
            ->get();*/

        //dd($user->with('people')->get());
        
        return view("users.$view", ['user' => $user]); // ['user' => $user[0]]
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $user = User::where('id', $id)
            ->with('people')
            ->get();

        return view('people.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
