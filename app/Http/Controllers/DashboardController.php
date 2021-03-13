<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {        
        $users = User::all();
        
        return view('admin.indexAdmin', compact('users'));
    }
}
