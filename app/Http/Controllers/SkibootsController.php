<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Skiboots;

class SkibootsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skiboots = Skiboots::all();

        return view('skiboots.index', compact('skiboots'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('skiboots.create');
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
            'brand' => 'required|string',
            'model' => 'required',
            'type' => 'required',
            'mondopoint' => 'required',
            'rentalprice' => 'required'
        ]);
        $skiboot = new Skiboots([
            'brand' => $request->get('brand'),
            'model' => $request->get('model'),
            'type' => $request->get('type'),
            'mondopoint' => $request->get('mondopoint'),
            'rentalprice' => $request->get('rentalprice')
        ]);
        $skiboot->save();
        return redirect('/admin')->with('success', 'Skiboots has been added');
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
        $skiboot = Skiboots::find($id);

        return view('skiboots.edit', compact('skiboot'));
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
            'mondopoint' => 'required',
            'rentalprice' => 'required'
        ]);

        $skiboot = Skiboots::find($id);
        $skiboot->brand = $request->get('brand');
        $skiboot->model = $request->get('model');
        $skiboot->type = $request->get('type');
        $skiboot->mondopoint = $request->get('mondopoint');
        $skiboot->rentalprice = $request->get('rentalprice');
        $skiboot->save();

        return redirect('/admin')->with('success', 'Skiboot has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $skiboot = Skiboots::find($id);
        $skiboot->delete();

        return redirect('/admin')->with('success', 'Skiboot has been deleted Successfully');
    }
}
