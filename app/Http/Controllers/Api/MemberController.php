<?php

namespace App\Http\Controllers\Api;
use App\Member;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MemberController extends Controller
{
   public function index(){
       $members = Member::all();
       return response()->json($members);
   }
   public function store(Request $request){
       $members = Member::all();
       $members->first_name = $request->get('firstname');
       $members->save();
       dd($members);
       return response()->json($members);

   } 
}
