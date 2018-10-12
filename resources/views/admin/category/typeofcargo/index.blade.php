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
                        <li class="active">Loại hàng</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    

    @if(Session::has('msg')) {{--  Session là một class. session là 1 phương thức. Phân biệt viết hoa viết thường  --}}
        <div class="col-sm-12">
            <div class="alert  alert-success alert-dismissible fade show" role="alert">
                <span class="badge badge-pill badge-success">Success</span> {{ Session::get('msg') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    @endif

    <div class="content mt-3">
        
        <div class="animated fadeIn">
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Loại hàng</strong>
                        </div>
                        <div class="card-body ">
                            <button type="button" class="border rounded border-success btn btn-success btn-sm" data-toggle="modal" data-target="#insert_type_of_cargo"><i class="menu-icon fa fa-plus-circle"></i> Thêm loại hàng</button>
                        </div>
                        <div class="card-body">
                            <table id="datatable" class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Tên loại hàng</th>
                                    <th>Mô tả</th>
                                    <th>Chức năng</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($getTypecargo as $valueTypecargo)
                                @php
                                    $id = $valueTypecargo->id_type_cargo;
                                    $name = $valueTypecargo->name;
                                    $description = $valueTypecargo->description;
                                @endphp
                                <tr>
                                    <td>{{ $name }}</td>
                                    <td>{{ $description }}</td>
                                    <td align="center">
                                        <button type="button" class="border rounded border-success btn btn-outline-success btn-sm" data-id = "{{ $id }}" data-name="{{ $name }}" data-description="{{ $description }}" data-toggle="modal" data-target="#edit_type_of_cargo"><i class="fa fa-edit"></i> Sửa</button>
                                        <button type="button" class="border rounded border-danger btn btn-outline-danger btn-sm" data-id = "{{ $id }}" data-toggle="modal" data-target="#delete_type_of_cargo"><i class="fa fa-trash"></i> Xóa</button>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


            </div>
        </div><!-- .animated -->
    </div><!-- .content -->


</div>
@include('admin.category.typeofcargo.edit')
@include('admin.category.typeofcargo.insert')
@include('admin.category.typeofcargo.delete')
@stop
