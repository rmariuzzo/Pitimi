<?php

namespace App\Http\Controllers;

use App\Http\Requests;

/**
 * Class UserController
 * @package App\Http\Controllers
 */
class UserController extends Controller
{
    public function getList()
    {
        return view('users.list-users');
    }

    public function getNew()
    {
        return view('users.new-user');
    }

    public function postNew()
    {
    }

    public function getEdit()
    {
        return view('users.edit-user');
    }

    public function postEdit()
    {
    }
}
