<?php

namespace App\Http\Controllers;

use App\Models\Mineral;
use Illuminate\Http\Request;

class MineralController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $minerals = Mineral::all();
        return view('minerals.index', compact('minerals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:minerals',
        ]);

        try {

            Mineral::create([
                'name' => $request->name,
            ]);
            
            return redirect()->back()->with('success', 'Mineral Added Successfully!');
        }
        catch(\Exception $e) {
            return redirect()->back()->with('danger', 'Something went wrong!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mineral = Mineral::with('forms')->where('id', $id)->firstOrFail();
        return view('minerals.forms', compact('mineral'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mineral = Mineral::where('id', $id)->firstOrFail();
        return view('minerals.edit', compact('mineral'));   
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
        $this->validate($request, [
            'name' => 'required',
        ]);

        try {

            Mineral::where('id', $id)->update([
                'name' => $request->name,
            ]);
            
            return redirect()->back()->with('success', 'Mineral Updated Successfully!');
        }
        catch(\Exception $e) {
            return redirect()->back()->with('danger', 'Something went wrong!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteMineral($id)
    {
        try {

            Mineral::where('id', $id)->delete();
            
            return redirect()->back()->with('success', 'Mineral Deleted Successfully!');
        }
        catch(\Exception $e) {
            return redirect()->back()->with('danger', 'Something went wrong!');
        }
    }
}
