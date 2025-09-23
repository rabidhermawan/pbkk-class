<?php

namespace App\Http\Controllers;

use App\Models\Goodthings;
use Illuminate\Http\Request;

class GoodthingsController extends Controller
{
    public function index() {
        // route --> /goodthings/
        //fetch all records & pass into the index value
        // $goodthings = Goodthings::all()->get(); // Return all good things
        $goodthings = Goodthings::orderBy('created_at', 'desc')->get();

        return view('secretstuff.secretpage', ["goodstuff" => $goodthings ]);
    }

    public function show($id) {
        // route --> /goodthings/{id}
        // fetch a single record & pass into show view
    }

    public function create() {
        // route --> /goodthings/create
        // render a create view (with web form) to users
    }

    public function store() {
        // --> /goodthings/create (POST)
        // handle POST request to store a new ninja record in table
    }


}
