<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Card;
use App\Http\Requests\CardFormRequst;
use Image;

class PagesController extends Controller
{
    //
    public function home()
    {
        return view('home');
    }

    public function create()
    {
        return view('create');
    }

    public function store(CardFormRequst $request)
    {
        if ( $files = $request->file('image') ){
            dd('success');
        }
        dd($request);
        $input['image'] = time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('images'), $input['image']);
        dd('success');

        $card = new Card(array(
            'name' => $request->get('name'),
            'place_of_birth' => $request->get('place_of_birth')
        ));
        $card->save();
        return redirect('/create')->with('status', 'تم اضافة كارت جديد!');
    }

}