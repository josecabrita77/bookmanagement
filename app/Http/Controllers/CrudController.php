<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\BookContacts;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CrudController extends Controller
{
    
    public function create()
    {
        return view('layouts.create');
    }

    public function adicionar(Request $request)
    {
        //dd($request);
        $validator = Validator::make($request->all(), [
            
            'InputFirstName' => 'required|max:40',
            'InputLasName' => 'required|max:40',
            'InputAddress' => 'required|max:255',
            'InputTelephone' => 'required|numeric',
            'InputEmail' => 'required|email|max:255',

        ]);
 
        if ($validator->fails()) {
            return redirect('/create')
                        ->withErrors($validator)
                        ->withInput();
        }
 
        // Retrieve the validated input...
        $validated = $validator->validated();
        //dd($validated);

        //Get id user

        $user = DB::table('users')->select('id')->get();
        $user_id = $user[0]->id;

        $new_contact = new BookContacts;
        $new_contact->firstName = $request->get('InputFirstName');
        $new_contact->lasName = $request->get('InputLasName');
        $new_contact->address = $request->get('InputAddress');
        $new_contact->telephone = $request->get('InputTelephone');
        $new_contact->email = $request->get('InputEmail');
        $new_contact->user_id = $user_id;
        $new_contact->save();

        $list_contacts = BookContacts::all()->where('user_id', '=', $user_id);
        //dd($list_contacts);

        return view('home.index');

 
    }

    public function editar($id_book)
    {
        $item_book = DB::table('bookcontacts')->where('id', '=', $id_book)->get();
        $item_book = $item_book[0];

        return view('home.index', ['editar'=> $item_book]);

    }

    public function update(Request $request)
    {
        //dd($request);

        $update = DB::update('update bookcontacts set firstName="'.$request->get('firstName').'", lasName="'.$request->get('lasName').'", address="'.$request->get('address').'", telephone="'.$request->get('telephone').'", email="'.$request->get('email').'" where id=?',[$request->get('id')]);
        //dd($update);
        //Get id user

        $id_user = Auth::id();

        //Get List Book

        $book = DB::table('bookcontacts')->where('user_id', '=', $id_user)->get();

        return view('home.index', ['update_comment'=>$update, 'list' => $book]);


    }
}
