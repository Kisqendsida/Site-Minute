<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partener;
use App\Models\Coupon;

class PartenerController extends Controller
{
    public function index()
    {
        $partener=partener::orderBy('id','DESC')->paginate(10);
        return view('backend.partener.index')->with('parteners',$partener);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.partener.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'string|required',
            'prenom'=>'string|required',
            'email'=>'string|required',
            'phone'=>'required|numeric',
            'depart'=>'string|nullable',
            'arrivee'=>'string|nullable',
            'vehicule'=>'string|nullable',
            'etat'=>'string|nullable',
            'capacity'=>'nullable|numeric',
            'status'=>'required|in:active,inactive'
        ]);
        $data=$request->all();
        // return $data;
        $status=partener::create($data);
        if($status){
            request()->session()->flash('success','partener successfully created');
        }
        else{
            request()->session()->flash('error','Error, Please try again');
        }
        return redirect()->route('partener.index');
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
        
        $partener=partener::find($id);
        if(!$partener){
            request()->session()->flash('error','partener not found');
        }
        return view('backend.partener.edit')->with('partener',$partener);
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
        $partener=partener::find($id);
        $this->validate($request,[
            'name'=>'string|required',
            'prenom'=>'string|required',
            'email'=>'string|required',
            'phone'=>'required|numeric',
            'depart'=>'string|nullable',
            'arrivee'=>'string|nullable',
            'vehicule'=>'string|nullable',
            'etat'=>'string|nullable',
            'capacity'=>'nullable|numeric',
            'status'=>'required|in:active,inactive'
        ]);
        $data=$request->all();
        // return $data;
        $status=$partener->fill($data)->save();
        if($status){
            request()->session()->flash('success','Partenaire mise à jour avec succès');
        }
        else{
            request()->session()->flash('error','Error, Please try again');
        }
        return redirect()->route('partener.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $partener=partener::find($id);
        if($partener){
            $status=$partener->delete();
            if($status){
                request()->session()->flash('success','partener successfully deleted');
            }
            else{
                request()->session()->flash('error','Error, Please try again');
            }
            return redirect()->route('partener.index');
        }
        else{
            request()->session()->flash('error','partener not found');
            return redirect()->back();
        }
    }
}
