<?php

namespace App\Http\Controllers;

use App\Models\Goodthings;
use App\Models\Goodplace;
use Illuminate\Http\Request;

class GoodthingsController extends Controller
{
    public function index() {
        // route --> /goodthings/
        //fetch all records & pass into the index value
        // $goodthings = Goodthings::all()->get(); // Return all good things
        $goodthings = Goodthings::with('goodplace')->orderBy('created_at', 'desc')->paginate(10);

        return view('secretstuff.secretpage', ["goodstuff" => $goodthings ]);
    }

    public function show($id) {
        // route --> /secretpage/goodthings/{id}
        // fetch a single record & pass into show view
        $goodthings = Goodthings::with('goodplace')->findOrFail($id);

        return view('secretstuff.goodthings', ["goodthings" => $goodthings]);
    }

    public function create() {
        // route --> /secretstuff/create
        // render a create view (with web form) to users
        $goodplaces = Goodplace::all();

        return view('secretstuff.create', ["goodplaces" => $goodplaces]);
    }

    public function store(Request $request) {
        // --> /goodthings/create (POST)
        // handle POST request to store a new ninja record in table
    
        $validated = $request->validate([
            'goodthings' => 'required|string|max:255',
            'goodvalues' => 'required|integer|min:0|max:100',
            'description' => 'required|string|min:10|max:1000',
            'goodplace_id' => 'required|exists:goodplaces,id',
        ]);

        $goodthing = Goodthings::create($validated);

        return redirect()->route('goodthings', $goodthing)->with('success', 'Goodthings created!');
    }

    public function destroy($id){
        $goodthings = Goodthings::findOrFail($id);
        $goodthings->delete();

        return redirect()->route('goodthings')->with('success', 'Goodthings deleted!');;
    }


}
