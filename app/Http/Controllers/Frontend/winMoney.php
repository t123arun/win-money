<?php

namespace App\Http\Controllers\Frontend;



use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Player;

class winMoney extends Controller
{
   // public function index(){
   //  //    return view('frontend.index');
   //    return Players::all();
   // }
   public function list(){
      $data =  Player::all();
      return view('frontend.index',['data'=>$data]);
   } 
}
