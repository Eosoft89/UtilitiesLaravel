<?php

namespace App\Http\Controllers;

use App\Http\Requests\SearchRequest;
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

    public function searchPost(SearchRequest $request)
    {
        $users = User::where('name','LIKE',"%" . $request->name . "%")->get();
        return view('search-results', compact('users'));

    }

}
