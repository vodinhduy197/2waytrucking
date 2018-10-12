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
                        <li class="active">Bình luận</li>
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
                            <strong class="card-title">Bình luận</strong>
                        </div>
                        <div class="card-body">
                            <table id="datatable" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>Tài khoản</th>
                                    <th>Bình luận</th>
                                    <th>Bài đăng</th>
                                    <th>Thời gian</th>
                                    <th class="sorting_desc_disabled sorting_asc_disabled">Trạng thái</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>24/09/2018 9:51</td>
                                    <td align="center"><a><img src="/public/admin/images/status/ac.png"></a></td>
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
@stop
