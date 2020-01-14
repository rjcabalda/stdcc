<?php

namespace App\Http\Controllers;

use App\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }
public function member_list()
    {
      
      return view('panel.memberlist');
    }
    public function add_form(){
      return view('panel.add');
    }
}
