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
                        <li class="active">Danh mục website</li>
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
                            <strong class="card-title">Danh mục</strong>
                        </div>
                        <div class="card-body ">
                            <button type="button" class="border rounded border-success btn btn-success btn-sm" data-toggle="modal" data-target="#insert"><i class="menu-icon fa fa-plus-circle"></i> Thêm danh mục </button>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th >Tên danh mục</th>
                                    <th >Vị trí danh mục</th>
                                    <th >Chức năng</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        Liên hệ
                                        <ul style="list-style: none; margin-left: 30px">
                                            <li>
                                                Liên hệ con
                                                <a href="#" class="fa fa-trash-o"></a>
                                                <a  class="fa fa-pencil" href data-toggle="modal" data-target="#editCon"></a>
                                            </li>
                                        </ul>
                                    </td>
                                    <td >
                                        <div class="form-group form-inline ">
                                            <select id="place" class="form-control col-2" style="margin-right: 10px">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                            </select>
                                            <button type="button" class="border rounded border-primary btn btn-outline-primary btn-sm form-control col-2" > Lưu</button>
                                        </div>
                                    </td>
                                    <td align="center">
                                        <button type="button" class="border rounded border-success btn btn-outline-success btn-sm" data-toggle="modal" data-target="#editCha"><i class="fa fa-edit"></i> Sửa</button>
                                        <button type="button" class="border rounded border-danger btn btn-outline-danger btn-sm"><i class="fa fa-trash"></i> Xóa</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Về chúng tôi
                                        <ul style="list-style: none; margin-left: 30px">
                                            <li>
                                                Con
                                                <a href="#" class="fa fa-trash-o"></a>
                                                <a  class="fa fa-pencil" href data-toggle="modal" data-target="#editCon"></a>
                                            </li>
                                        </ul>

                                    </td>
                                    <td >
                                        <div class="form-group form-inline ">
                                            <select id="place" class="form-control col-2" style="margin-right: 10px">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                            </select>
                                            <button type="button" class="border rounded border-primary btn btn-outline-primary btn-sm form-control col-2" > Lưu</button>
                                        </div>
                                    </td>
                                    <td align="center">
                                        <button type="button" class="border rounded border-success btn btn-outline-success btn-sm" data-toggle="modal" data-target="#abc"><i class="fa fa-edit"></i> Sửa</button>
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


</div>

@include('admin.category.website.edit')
@include('admin.category.website.insert')
@stop
