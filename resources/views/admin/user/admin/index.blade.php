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
                        <li class="active">Admin</li>
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
                            <strong class="card-title">Admin</strong>
                        </div>
                        <div class="card-body ">
                            <button type="button" class="border rounded border-success btn btn-success btn-sm" data-toggle="modal" data-target="#insert"><i class="menu-icon fa fa-plus-circle"></i> Thêm Admin</button>
                        </div>
                        <div class="card-body">
                            <table id="bootstrap-data-table" class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Tài khoản</th>
                                    <th>Tên</th>
                                    <th class="sorting_desc_disabled sorting_asc_disabled">Email</th>
                                    <th class="sorting_desc_disabled sorting_asc_disabled">Số điện thoại</th>
                                    <th>Chức vụ</th>
                                    <th class="sorting_desc_disabled sorting_asc_disabled">Trạng thái</th>
                                    <th class="sorting_desc_disabled sorting_asc_disabled">Chức năng</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($getAll as $valueAll)
                                @php
                                    $id = $valueAll->id_user;
                                    $username = $valueAll->username;
                                    $email = $valueAll->email;
                                    $phone = $valueAll->phone;
                                    $name = $valueAll->name;
                                    $id_type_user = $valueAll->id_type_user;
                                    $id_type_user_status = $valueAll->id_type_user_status;
                                @endphp
                                <tr>
                                    <td><button type="button" class="btn btn-link">{{ $username }}</button></td>
                                    <td>{{ $name }}</td>
                                    <td>{{ $email }}</td>
                                    <td>{{ $phone }}</td>
                                    <td>{{ $id_type_user }}</td>
                                    @if($id_type_user_status == '1')
                                        <td align="center"><a href="javascript:void(0)" onClick="return getStatus({{$id_type_user_status}}, {{$id}})"><img src="/public/admin/images/status/ac.png"></a></td>
                                    @else
                                        <td align="center"><a href="javascript:void(0)" onClick="return getStatus({{$id_type_user_status}}, {{$id}})"><img src="/public/admin/images/status/de.png"></a></td>
                                    @endif
                                    <td align="center">
                                        <button type="button" class="border rounded border-success btn btn-outline-success btn-sm" data-toggle="modal" data-target="#edit"><i class="fa fa-edit"></i> Sửa</button>
                                        <button type="button" class="border rounded border-danger btn btn-outline-danger btn-sm"><i class="fa fa-trash"></i> Xóa</button>
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
@include('admin.user.admin.insert')
@include('admin.user.admin.edit')
@stop
