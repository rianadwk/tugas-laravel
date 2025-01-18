<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class usercontroller extends Controller

{
    //
    public function tugas1()
    {
        return view ('tugas1');
    }
    
    public function tugas2()
    {
        return view ('tugas2');
    }

    public function tugas3()
    {
        return view ('tugas3');
    }

    public function master()
    {
        return view ('template/master');
    }









}
