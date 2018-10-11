<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \App\Type_Cargo;

class ControllerCategory extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     */

    public function __construct(Type_Cargo $mTypeCargo){
        $this->mTypeCargo = $mTypeCargo;
    }

    public function index()
    {
        
    }

    public function getTypeOfCargo()
    {
        $getTypecargo = $this->mTypeCargo->getTypecargo();
        return view('admin.category.typeofcargo.index', compact('getTypecargo'));
    }

    public function postTypeOfCargo(Request $request){
        $name = $request->name;
        $description = $request->description;
        $resultAdd = $this->mTypeCargo->addTypecargo($name, $description);
        if($resultAdd){
            return redirect(route('admin.category.typeofcargo.index'))->with('msg', 'Thêm dữ liệu thành công');
        }else{
            return redirect(route('admin.category.typeofcargo.index'))->with('msg', 'Thêm dữ liệu thất bại');
        }
    }

    public function updateTypeOfCargo(Request $request){
        $id = $request->id_cat;
        $description = $request->des;
        $name = $request->cargo_name;
        $resultUpdate = $this->mTypeCargo->updateTypecargo($id, $name, $description);
        if($resultUpdate){
            return redirect(route('admin.category.typeofcargo.index'))->with('msg', 'Cập nhật dữ liệu thành công');
        }else{
            return redirect(route('admin.category.typeofcargo.index'))->with('msg', 'Cập nhật dữ liệu thất bại');
        }
    }

    public function deleteTypeOfCargo(Request $request){
        $id = $request->id_cat;
        $resultDelete = $this->mTypeCargo->deleteTypecargo($id);
        if($resultDelete){
            return redirect(route('admin.category.typeofcargo.index'))->with('msg', 'Xóa dữ liệu thành công');
        }else{
            return redirect(route('admin.category.typeofcargo.index'))->with('msg', 'Xóa dữ liệu thất bại');
        }
    }

    public function typeoftruck()
    {
        return view('admin.category.typeoftruck.index');
    }

    public function website()
    {
        return view('admin.category.website.index');
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
