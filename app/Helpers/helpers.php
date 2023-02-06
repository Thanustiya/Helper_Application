<?php
use DB;
use App\Models\User;
 
  function getMessage($msg="Controller Function"){
    $txt=$msg;
    return explode("  ", $txt);
  }

function getUserData(){
    //$data=DB::table('data_source_x') ->get();
    $data=User::get();
    return $data;
  }
