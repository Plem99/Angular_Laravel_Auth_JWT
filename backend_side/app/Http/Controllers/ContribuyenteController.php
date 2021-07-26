<?php

namespace App\Http\Controllers;

use App\Models\contribuyente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class ContribuyenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        //Return all data form contribuyentes from the user connected
        return contribuyente::where('id_user', '=', Auth::user()->id)->get();
        //return contribuyente::all();
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
     * @param  \App\Models\contribuyente  $contribuyente
     * @return \Illuminate\Http\Response
     */
    public function show(contribuyente $contribuyente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\contribuyente  $contribuyente
     * @return \Illuminate\Http\Response
     */
    public function edit(contribuyente $contribuyente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\contribuyente  $contribuyente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, contribuyente $contribuyente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\contribuyente  $contribuyente
     * @return \Illuminate\Http\Response
     */
    public function destroy(contribuyente $contribuyente)
    {
        //
    }
}
