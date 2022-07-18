<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $forms = Form::all();
        return view('forms.index', compact('forms'));
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
            'name' => 'required|unique:forms',
        ]);

        try {

            Form::create([
                'name' => $request->name,
            ]);
            
            return redirect()->back()->with('success', 'Form Added Successfully!');
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
        $form = Form::with('forms')->where('id', $id)->firstOrFail();
        return view('forms.forms', compact('form'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $form = Form::where('id', $id)->firstOrFail();
        return view('forms.edit', compact('form'));   
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

            Form::where('id', $id)->update([
                'name' => $request->name,
            ]);
            
            return redirect()->back()->with('success', 'Form Updated Successfully!');
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
    public function deleteForm($id)
    {
        try {

            Form::where('id', $id)->delete();
            
            return redirect()->back()->with('success', 'Form Deleted Successfully!');
        }
        catch(\Exception $e) {
            return redirect()->back()->with('danger', 'Something went wrong!');
        }
    }
}
