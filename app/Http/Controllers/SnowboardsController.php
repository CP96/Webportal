<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Snowboards;

class SnowboardsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $snowboards = Snowboards::all();

        return view('snowboards.index', compact('snowboards'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('snowboards.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'brand' => 'required',
            'model' => 'required',
            'type' => 'required',
            'length' => 'required',
            'rentalprice' => 'required'
        ]);
        $snowboard = new Snowboards([
            'brand' => $request->get('brand'),
            'model' => $request->get('model'),
            'type' => $request->get('type'),
            'length' => $request->get('length'),
            'rentalprice' => $request->get('rentalprice')
        ]);
        $snowboard->save();
        return redirect('/snowboards')->with('success', 'Snowboard has been added');
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
        $snowboard = Snowboards::find($id);

        return view('snowboards.edit', compact('snowboard'));
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
        $request->validate([
            'brand' => 'required',
            'model' => 'required',
            'type' => 'required',
            'length' => 'required',
            'rentalprice' => 'required'
        ]);

        $snowboard = Snowboards::find($id);
        $snowboard->brand = $request->get('brand');
        $snowboard->model = $request->get('model');
        $snowboard->type = $request->get('type');
        $snowboard->length = $request->get('length');
        $snowboard->rentalprice = $request->get('rentalprice');
        $snowboard->save();

        return redirect('/snowboards')->with('success', 'Snowboard has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $snowboard = Snowboards::find($id);
        $snowboard->delete();

        return redirect('/snowboards')->with('success', 'Snowboard has been deleted Successfully');
    }
}
