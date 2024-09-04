<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Rules\Uppercase;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate(15); //también existe el simplePaginate, además de where()->paginate()
        return view('index', compact('users')); 
    }

    //API   
    public function getUsers()
    {
        return User::paginate(15);
    }

    public function search()
    {
        return view('search');
    }

    public function searchPost(Request $request)
    {
        $request->validate([
            'name' => ['required|min:4|max:255', new Uppercase] //regla personalizada
        ]);

        $users = User::where('name','LIKE',"%" . $request->name . "%")->get();
        return view('search-results', compact('users'));

    }

}
