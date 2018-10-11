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
                        <li class="active">Chức vụ</li>
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
                            <strong class="card-title">Chức vụ</strong>
                        </div>
                        <div class="card-body ">
                            <button type="button" class="border rounded border-success btn btn-success btn-sm" data-toggle="modal" data-target="#insert"><i class="menu-icon fa fa-plus-circle"></i>Thêm chức vụ</button>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th scope="col">Chức vụ</th>
                                    <th scope="col">Phận sự 1</th>
                                    <th scope="col">Phận sự 2</th>
                                    <th scope="col">Phận sự 3</th>
                                    <th scope="col">Phận sự 4</th>
                                    <th scope="col">Phận sự 5</th>
                                    <th scope="col">Chức năng</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">abc</th>
                                    <td ><a><img src="/public/admin/images/status/ac.png"></a></td>
                                    <td ><a><img src="/public/admin/images/status/de.png"></a></td>
                                    <td ><a><img src="/public/admin/images/status/de.png"></a></td>
                                    <td ><a><img src="/public/admin/images/status/ac.png"></a></td>
                                    <td ><a><img src="/public/admin/images/status/ac.png"></a></td>
                                    <td align="center">
                                        <button type="button" class="border rounded border-success btn btn-outline-success btn-sm" data-toggle="modal" data-target="#edit"><i class="fa fa-edit"></i> Sửa</button>
                                        <button type="button" class="border rounded border-danger btn btn-outline-danger btn-sm"><i class="fa fa-trash"></i> Xóa</button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">abc</th>
                                    <td ><a><img src="/public/admin/images/status/ac.png"></a></td>
                                    <td ><a><img src="/public/admin/images/status/de.png"></a></td>
                                    <td ><a><img src="/public/admin/images/status/ac.png"></a></td>
                                    <td ><a><img src="/public/admin/images/status/ac.png"></a></td>
                                    <td ><a><img src="/public/admin/images/status/ac.png"></a></td>
                                    <td align="center">
                                        <button type="button" class="border rounded border-success btn btn-outline-success btn-sm" data-toggle="modal" data-target="#edit"><i class="fa fa-edit"></i> Sửa</button>
                                        <button type="button" class="border rounded border-danger btn btn-outline-danger btn-sm"><i class="fa fa-trash"></i> Xóa</button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">abc</th>
                                    <td ><a><img src="/public/admin/images/status/ac.png"></a></td>
                                    <td ><a><img src="/public/admin/images/status/de.png"></a></td>
                                    <td ><a><img src="/public/admin/images/status/de.png"></a></td>
                                    <td ><a><img src="/public/admin/images/status/ac.png"></a></td>
                                    <td ><a><img src="/public/admin/images/status/de.png"></a></td>
                                    <td align="center">
                                        <button type="button" class="border rounded border-success btn btn btn-outline-success btn-sm" data-toggle="modal" data-target="#edit"><i class="fa fa-edit"></i> Sửa</button>
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
@include('admin.position.insert')
@include('admin.position.edit')
@stop
