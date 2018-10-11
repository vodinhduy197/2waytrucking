<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin;

class ControllerUser extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(Admin $mAdmin){
        $this->mAdmin = $mAdmin;
    }

    public function index()
    {
        $getAll = $this->mAdmin->getAll();
        return view('admin.user.admin.index', compact('getAll'));
    }

    public function updateStatusAdmin($id){
        $getAll = $this->mAdmin->getAll();
        $updateStatus = $this->mAdmin->updateStatus($id);
        return view('admin.user.admin.index', compact('id','updateStatus', 'getAll'));
    }

    public function cargo(){
        return view('admin.user.cargo.index');
    }

    public function trucking(){
        return view('admin.user.trucking.index');
    }

    public function driver(){
        return view('admin.user.trucking.driver.index');
    }

    public function history(){
        return view('admin.user.trucking.history.index');
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
    }
}
