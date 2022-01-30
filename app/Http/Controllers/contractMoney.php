<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;

class contractMoney extends Controller
{
    function getData(Request $req){
        //   print_r($req->input());
          $player = new player;
        //   $player->player_id = $req->player_id;
          $player->period = $req->period;
          $player->number = $req->number;
          $player->price = $req->price;
          $player->save();
    }
}
