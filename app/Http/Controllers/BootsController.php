<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Boots;

class BootsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $boots = Boots::all();

        return view('boots.index', compact('boots'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('boots.create');
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
            'mondopoint' => 'required',
            'rentalprice' => 'required'
        ]);
        $boots = new Boots([
            'brand' => $request->get('brand'),
            'model' => $request->get('model'),
            'type' => $request->get('type'),
            'mondopoint' => $request->get('mondopoint'),
            'rentalprice' => $request->get('rentalprice')
        ]);
        $boots->save();
        return redirect('/boots')->with('success', 'Boots has been added');
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
        $boot = Boots::find($id);

        return view('boots.edit', compact('boot'));
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

        $boot = Boots::find($id);
        $boot->brand = $request->get('brand');
        $boot->model = $request->get('model');
        $boot->type = $request->get('type');
        $boot->mondopoint = $request->get('mondopoint');
        $boot->rentalprice = $request->get('rentalprice');
        $boot->save();

        return redirect('/boots')->with('success', 'Boot has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $boot = Boots::find($id);
        $boot->delete();

        return redirect('/boots')->with('success', 'Boot has been deleted Successfully');
    }
}
