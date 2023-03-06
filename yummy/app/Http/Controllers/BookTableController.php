<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookTableController extends Controller
{
    public function insert(Request  $request){
        DB:: table('_book_table')->insert([
            'name'=> $request->name,
            'email'=> $request->email,
            'phone'=>$request->phone,
            'date'=> $request->date,
            'time'=> $request->time,
            'num_of_people' => $request->people,
            'massage' => $request->message
        ]);
        return response('your data is adeed');
    }
}
