<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Skis;

class SkisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skis = Skis::all();

        return view('skis.index', compact('skis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('skis.create');
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
        $ski = new Skis([
            'brand' => $request->get('brand'),
            'model' => $request->get('model'),
            'type' => $request->get('type'),
            'length' => $request->get('length'),
            'rentalprice' => $request->get('rentalprice')
        ]);
        $ski->save();
        return redirect('/admin')->with('success', 'Ski has been added');
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
        $ski = Skis::find($id);

        return view('skis.edit', compact('ski'));
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

        $ski = Skis::find($id);
        $ski->brand = $request->get('brand');
        $ski->model = $request->get('model');
        $ski->type = $request->get('type');
        $ski->length = $request->get('length');
        $ski->rentalprice = $request->get('rentalprice');
        $ski->save();

        return redirect('/admin')->with('success', 'Skis has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ski = Skis::find($id);
        $ski->delete();

        return redirect('/admin')->with('success', 'Skis has been deleted Successfully');
    }
}
