<?php

namespace App\Http\Controllers;

use App\Models\User;
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

}
