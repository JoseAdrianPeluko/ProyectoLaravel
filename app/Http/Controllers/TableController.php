<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TableController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

//        $tables = \DB::Table('tables')->paginate(5);
        $tables = \App\Table::paginate(5);

//          dd($tables);


        return view("table.indexTable", compact("tables"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //reservar mesa vista

        if( \Auth::user()->table_id){
            return redirect()->route("index");
        }
        
        $tables = \App\Table::all();

        
        return view("table.tables", compact("tables"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store() {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
//        \Auth()->user()->table_id = $id;
        $user = \Auth::user();
        $user->table_id = $id;
        $user->save();

        $table = \App\Table::find($id);
        $table->reservado = true;

        $table->save();
        return redirect()->route("index");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        return view("table.domicilio");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $table;
        if ($table = \App\Table::find($id)) {
            
        } else {
            $table = new \App\Table();
        }

        $table->plazas = $request['plazas'];
        empty($request->reservado) ? $table->reservado = 0 : $table->reservado = 1;
        $table->save();
        return redirect()->route("table.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {

        $flight = \App\Table::find($id);

        $flight->delete();

        return redirect()->route("table.index");
    }

}
