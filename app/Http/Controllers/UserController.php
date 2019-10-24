<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Session;
use DB;
use App\User;

class UserController extends Controller
{
    public function getRefreshUserList(){
        $users = User::all();
        return view('userlist', compact("users"));
    }
}
