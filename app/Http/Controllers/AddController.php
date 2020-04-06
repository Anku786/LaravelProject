<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\project;
use Illuminate\Support\Facades\DB;

class AddController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $table=project::all()->toArray();
        return view('ManageExpense.manageexpense',compact('table'));

    }

     // * Show the form for creating a new resource.
     // *
     // * @return \Illuminate\Http\Response
     // */
    public function create()
    {
        return view('AddExpense.addexpense');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $a=$request->Expense_Date;
        $b=$request->Expense_Item;
        $c=$request->Expense_Cost;
        $result=new \App\project;
        $result->Expense_Date=$a;
        $result->Expense_Item=$b;
        $result->Expense_Cost=$c;
        $result->save();
        return "success";
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
        $table=project::find($id);
        $table->delete();
        return redirect()->route('/')->with('success','Deleted');
    }
}
