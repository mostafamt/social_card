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

    public function index()
    {
        $cards = Card::all();

        return view('home')->with('cards', $cards);
    }

    public function store(CardFormRequst $request)
    {
        if ($request->file('image')) {
            $file = $request->file('image');
            $name = time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path() . '/images/', $name);

            $card = new Card(array(
                'degree' => $request->get('degree'),
                'name' => $request->get('name'),
                'place_of_birth' => $request->get('place_of_birth'),
                'image' => $name,
            ));
            $card->save();

            return redirect('/create')->with('status', 'تم اضافة الكارت بنجاح !');
        }

    }

}