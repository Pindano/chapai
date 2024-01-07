<?php

namespace App\Http\Controllers;

use App\Models\Chapati;
use Illuminate\Http\Request;

class ChapatiController extends Controller
{
    public function store(Request $request){
        $attribute = $request->validate([
           'number_input' => 'required|min:0|numeric'
        ]);



        Chapati::create($attribute);
        return redirect('/dashboard')->with('success', 'Chapo Added');
    }
}
