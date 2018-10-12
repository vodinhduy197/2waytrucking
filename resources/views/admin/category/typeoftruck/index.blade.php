@extends('template.admin.master')

@section('content')
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Quản lý</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="#">Quản lý</a></li>
                        <li class="active">Loại xe</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Loại xe</strong>
                        </div>
                        <div class="card-body ">
                            <button type="button" class="border rounded border-success btn btn-success btn-sm" data-toggle="modal" data-target="#insert_type_of_truck"><i class="menu-icon fa fa-plus-circle"></i> Thêm danh mục xe</button>
                        </div>
                        <div class="card-body">
                            <table id="datatable" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>Loại xe</th>
                                    <th>Trọng tải(tấn)</th>
                                    <th>Mức giá(VNĐ/km)</th>
                                    <th class="sorting_desc_disabled sorting_asc_disabled">Chức năng</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Xe bán tải không mui</td>
                                    <td>14</td>
                                    <td>200000</td>
                                    <td align="center">
                                        <button type="button" class="border rounded border-success btn btn btn-outline-success btn-sm" data-toggle="modal" data-target="#edit_type_of_truck"><i class="fa fa-edit"></i> Sửa</button>
                                        <button type="button" class="border rounded border-danger btn btn-outline-danger btn-sm"><i class="fa fa-trash"></i> Xóa</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Xe bán tải không mui</td>
                                    <td>15</td>
                                    <td>200000</td>
                                    <td align="center">
                                        <button type="button" class="border rounded border-success btn btn btn-outline-success btn-sm" data-toggle="modal" data-target="#edit_type_of_truck"><i class="fa fa-edit"></i> Sửa</button>
                                        <button type="button" class="border rounded border-danger btn btn-outline-danger btn-sm"><i class="fa fa-trash"></i> Xóa</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Xe bán tải mui bạt</td>
                                    <td>2.5</td>
                                    <td>200000</td>
                                    <td align="center">
                                        <button type="button" class="border rounded border-success btn btn btn-outline-success btn-sm" data-toggle="modal" data-target="#edit_type_of_truck"><i class="fa fa-edit"></i> Sửa</button>
                                        <button type="button" class="border rounded border-danger btn btn-outline-danger btn-sm"><i class="fa fa-trash"></i> Xóa</button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div><!-- .animated -->
    </div><!-- .content -->


</div>
@include('admin.category.typeoftruck.insert');
@include('admin.category.typeoftruck.edit');
@stop
