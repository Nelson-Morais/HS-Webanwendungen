<?php

/*
Personal access client created successfully.
Client ID: 1
Client secret: R4Salb5SmM3F1gLxSPi2lgGrZhwjMW3LrgOyLFBl
Password grant client created successfully.
Client ID: 2
Client secret: agaXwlwe5TA5Wh5SXitlhGOiFjBvOj02tNJVLRFS
*/

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ship;

class ShipAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return response()->json(Ship::all());
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
        $ship = Ship::find($id);
        if ($ship)
        {
            $ship->delete();
            return response()->json(['success' => true]);
        }
        return response()->json(['success' => false]);
    }
}
