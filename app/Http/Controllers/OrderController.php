<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $orders = \App\Order::all();
        
        $estados = $orders->groupBy("estado");
        return view("order.indexOrders", compact("orders", "estados"));
    }

    public function home() {
        
//        $order = \App\Order::find($id);
//        $order->enviar = true;
//        $order->save();
        
        $order =  \Auth::user()->order;
        $order->enviar = true;
        $order->estado= "preparando";
        $order->save();
        
       
        
       return redirect()->route("index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
        
        
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id) {
        
        $order = new \App\Order();
        $order->product_id = $id;
        $order->user_id = \Auth::user()->id;
        $order->cantidad = $request->input("quantity");
        $order->enviar = false;
        
        $order->save();
        
      
        return redirect()->route("index");
        
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($estado,$id) {
        
        $order = \App\Order::find($id);
        $order->estado = $estado;
        $order->save();
        
         return redirect()->route("order.index");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

}
