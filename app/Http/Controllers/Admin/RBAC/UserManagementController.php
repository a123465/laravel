<?php

namespace App\Http\Controllers\Admin\RBAC;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserManagementController extends Controller
{
    
    protected $user;
    public function __construct()
    {
     //  $this->middleware('auth');
     //  $this->middleware('admin-auth')->only('admin');
      // $this->middleware('team-member')->except('admin');
    }
    //显示所有用户123
    public function index()
    {

        return view('/admin/config');		 

    }
    public function home()
    {
        return "hello world!";
    }
 
}