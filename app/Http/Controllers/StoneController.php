<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\Mineral;
use App\Models\Stone;
use Illuminate\Http\Request;
use DB;

class StoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stones = Stone::with('mineral', 'form')->get();
        $minerals = Mineral::all();
        $forms = Form::all();
        return view('stones.index', compact('stones', 'minerals', 'forms'));
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
        $this->validate($request, [
            'mineral' => 'required',
            'form' => 'required',
            'prod_code' => 'required|unique:stones',
            'stone_image' => 'required',
        ]);

        Mineral::where('id', $request->mineral)->firstOrFail();
        Form::where('id', $request->form)->firstOrFail();

        DB::beginTransaction();
        try {

            $file = $request->stone_image;
            $fileNameWithExt = $file->getClientOriginalName();
            //Get Just File Name
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //Get File Extension
            $extension = $file->getClientOriginalExtension();
            //FileName to Store
            $new = $filename . "_" . strtotime(date('Y-m-d H:i:s')) . rand(1, 100) . "." . $extension;
            $file->move(public_path('images'), $new);

            Stone::create([
                'mineral_id' => $request->mineral,
                'form_id' => $request->form,
                'prod_code' => $request->prod_code,
                'stone_image' => $new,
            ]);

            DB::commit();
            return redirect()->back()->with('success', 'Stone Added Successfully!');
        } catch (\Exception $e) {
            DB::rollback();
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
        $stone = Stone::with('mineral', 'form')->where('id', $id)->firstOrFail();
        $minerals = Mineral::all();
        $forms = Form::all();
        return view('stones.edit', compact('stone', 'minerals', 'forms')); 
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
            'mineral' => 'required',
            'form' => 'required',
            'prod_code' => 'required|unique:stones,prod_code,' . $id . ',id',
        ]);

        Mineral::where('id', $request->mineral)->firstOrFail();
        Form::where('id', $request->form)->firstOrFail();

        DB::beginTransaction();
        try {
            $stone = Stone::where('id', $id)->firstOrFail();
            $new = $stone->stone_image;
            if($request->hasFile('stone_image')) {
                $file = $request->stone_image;
                $fileNameWithExt = $file->getClientOriginalName();
                //Get Just File Name
                $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
                //Get File Extension
                $extension = $file->getClientOriginalExtension();
                //FileName to Store
                $new = $filename . "_" . strtotime(date('Y-m-d H:i:s')) . rand(1, 100) . "." . $extension;
                $file->move(public_path('images'), $new);
            }

            Stone::where('id', $id)->update([
                'mineral_id' => $request->mineral,
                'form_id' => $request->form,
                'prod_code' => $request->prod_code,
                'stone_image' => $new,
            ]);

            DB::commit();
            return redirect()->back()->with('success', 'Stone Updated Successfully!');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('danger', 'Something went wrong!');
        }
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
    }

    public function deleteStone($id)
    {
        try {

            Stone::where('id', $id)->delete();
            
            return redirect()->back()->with('success', 'Stone Deleted Successfully!');
        }
        catch(\Exception $e) {
            return redirect()->back()->with('danger', 'Something went wrong!');
        }
    }

    public function all() {
        $stones = Stone::with('mineral', 'form')->get();
        return view('stones.all', compact('stones'));
    }
}
