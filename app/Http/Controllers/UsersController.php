<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\User;

class UsersController extends Controller
{

	public function index()
    {
        $users = User::all();

        return view('users.index', compact('users'));
    }

    public function create($email)
    {

    }

    public function edit($id)
    {

    }

    public function delete ($id)
    {

    }


}
