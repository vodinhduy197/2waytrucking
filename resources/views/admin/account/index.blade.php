@extends('template.admin.master')
@section('content')
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Tài khoản</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="#">Tài khoản</a></li>
                        <li class="active">Thiết lập tài khoản</li>
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
                            <strong class="card-title">Tài khoản cá nhân</strong>
                        </div>
                        <div class="card-body">
                            <div class="row form-group">
                                <div class="col-9">
                                    <div class="form-group">
                                        <label for="Tên tài khoản" class=" form-control-label">Tên tài khoản</label>
                                        <input type="text" id="username" name="username" value="username1" readonly class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="Mật khẩu" class=" form-control-label">Mật khẩu</label>
                                        <input type="password" id="password" name="password" placeholder="Nhập vào mật khẩu" value="1231231" class="form-control" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="Họ tên" class=" form-control-label">Họ tên</label>
                                        <input type="text" id="fullname" name="fullname" placeholder="Nhập vào họ tên" value="1231231" value="Võ Đình Duy" class="form-control" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="Địa chỉ" class=" form-control-label">Địa chỉ</label>
                                        <input type="password" id="password" name="password" placeholder="Nhập vào mật khẩu" value="1231231" class="form-control" required>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col-4">
                                            <div class="form-group"><label for="Số điện thoại" class=" form-control-label">Số điện thoại</label><input type="text" id="phone" placeholder="Nhập vào số điện thoại" class="form-control"></div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group"><label for="email" class=" form-control-label">Email</label><input type="text" id="email" placeholder="Nhập vào email" class="form-control"></div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group"><label for="chức vụ" class=" form-control-label">Chức vụ</label><input type="text" id="position" value="admin" readonly class="form-control"></div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-3">
                                    <div class="form-group">
                                        <form action="" method="post" enctype="multipart/form-data">
                                            <div class="avatar-upload">
                                                <div class="avatar-edit">
                                                    <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                                                    <label for="imageUpload">Ảnh đại diện</label>
                                                </div>
                                                <div class="avatar-preview">
                                                    <div id="imagePreview" style="background-image: url(/public/admin/images/admin.jpg);">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div align="center">
                                <button class="border rounded border-success btn btn-outline-success btn-sm">Lưu</button>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div><!-- .animated -->
    </div><!-- .content -->
</div>
@stop