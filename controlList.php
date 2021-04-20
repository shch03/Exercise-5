<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controlList extends Controller
{
    public function about (){
        return view('about');
    }

    public function list(){

        $books=[ 
            'book'=>[
                [
                    'title' => 'Milk',
                    'isbn' =>'1231231',
                    'category' => 'Education',
                    'page'=> 10
                ], 
                [
                    'title' => 'Sayonara',
                    'isbn' =>'1412',
                    'category' => 'Romance',
                    'page'=> 121
                ],
                [
                    'title' => 'Gogo',
                    'isbn' =>'1672',
                    'category' => 'Life',
                    'page'=> 34
                ],
                [
                    'title' => 'Finance',
                    'isbn' =>'1611',
                    'category' => 'Management',
                    'page'=> 456
                ]   
            ]
        ];
        return view ('list', compact('books'));
    }
}
