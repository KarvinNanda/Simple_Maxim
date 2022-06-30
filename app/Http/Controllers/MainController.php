<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if(Auth::check()){
            $find = User::find(Auth::id());
            return view('main')->with('user',$find);
        }
    }

    public function bikePage(){
        if(Auth::check()){
            $find = User::find(Auth::id());
            return view('bike')->with('user',$find);
        }

    }

    public function carPage(){
        if(Auth::check()) {
            $find = User::find(Auth::id());
            return view('car')->with('user', $find);
        }
    }

    public function orderPage(Request $req){
            $rule=[
              'pickup' => 'required',
                'destination' => 'required',
                'point' => 'required'
            ];

            $val=Validator::make($req->all(),$rule);

            if($val->fails()){
                return back()->withErrors($val);
            }



            $ran = random_int(1,5);
            $driver = DB::table('drivers')->where('driver_id','=',$ran)->get();

            $order = new Order();
            $order->user_id = $req->uid;
            $order->driver_id = $ran;
            $order->payment_id = $req->but;
            $order->pickup_location = $req->pickup;
            $order->destination = $req->destination;
            $order->price = 15000;
            $order->save();

            return view('order')->with('driver',$driver);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
