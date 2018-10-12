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
                        <li><a href="#">Công ty</a></li>
                        <li class="active">Lịch sử giao dịch</li>
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
                            <strong class="card-title">Lịch sử giao dịch(tên công ty ở đây)</strong>
                        </div>
                        <div class="card-body">
                            <table id="datatable" class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Tên chủ hàng</th>
                                    <th>Tên tài xế</th>
                                    <th>Mã hàng</th>
                                    <th>Loại hàng</th>
                                    <th>Ngày nhận hàng</th>
                                    <th>Ngày giao hàng</th>
                                    <th class="sorting_desc_disabled sorting_asc_disabled">Chức năng</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><button type="button" class="btn btn-link"  data-toggle="modal" title="Chi tiết công ty" data-target="#detail">Tiger Nixon</button></td>
                                    <td><button type="button" class="btn btn-link"  data-toggle="modal" title="Chi tiết tài xế" data-target="#detail-dr">System Architect</button></td>
                                    <td>DT01</td>
                                    <td>Điện tử</td>
                                    <td>21/02/1997</td>
                                    <td>21/02/1997</td>
                                    <td class="sorting_desc_disabled sorting_asc_disabled"  align="center"><button type="button" style="color: #1b1e21" class="btn btn-link" data-toggle="modal" title="Chi tiết" data-target="#detail-hi">Chi tiết</button></td>
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
@include('admin.user.cargo.detail')
@include('admin.user.trucking.driver.detail')
@include('admin.user.trucking.history.detail')
@stop
