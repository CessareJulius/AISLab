<?php

namespace App\Http\Controllers;

use App\User;
use App\People;
use Illuminate\Http\Request;

class PeopleController extends Controller
{
    public function index()
    {
    	$people = People::paginate();
    	//dd($people);
    	return view('people.index', compact('people'));
    }

    public function view($val, $name)
    {
    	$people = People::where(['name' => $name, 'type' => $val])->first();
    	dd($people);
    }

    public function store(Request $request)
    {
        $person = new People($request->all());
        $person->save();

        

        return back(); 

    }

}
