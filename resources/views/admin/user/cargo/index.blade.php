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
                        <li class="active">Chủ hàng</li>
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
                            <strong class="card-title">Chủ hàng</strong>
                        </div>
                        <div class="card-body ">
                            <button type="button" class="border rounded border-success btn btn-success btn-sm" data-toggle="modal" data-target="#insert"><i class="menu-icon fa fa-plus-circle"></i> Thêm chủ hàng</button>
                        </div>
                        <div class="card-body">
                            <table id="datatable" class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Tên chủ hàng</th>
                                    <th class="sorting_desc_disabled sorting_asc_disabled">Địa chỉ</th>
                                    <th class="sorting_desc_disabled sorting_asc_disabled">Số điện thoại</th>
                                    <th class="sorting_desc_disabled sorting_asc_disabled">Trạng thái</th>
                                    <th class="sorting_desc_disabled sorting_asc_disabled">Chức năng</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><button type="button" class="btn btn-link" data-toggle="modal" title="Chi tiết" data-target="#detail">System Architect</button></td>
                                    <td>System Architect</td>
                                    <td>6513513</td>
                                    <td align="center"><a><img src="/public/admin/images/status/ac.png"></a></td>
                                    <td align="center">
                                        <button type="button" class="border rounded border-success btn btn-outline-success btn-sm" data-toggle="modal" data-target="#edit"><i class="fa fa-edit"></i> Sửa</button>
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
@include('admin.user.cargo.insert')
@include('admin.user.cargo.edit')
@include('admin.user.cargo.detail')
@stop
