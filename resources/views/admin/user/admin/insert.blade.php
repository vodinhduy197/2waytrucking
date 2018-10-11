<div class="modal fade" id="insert" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Thêm admin</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card-body card-block">
                    <div class="form-group"><label for="tên tài khoản admin" class=" form-control-label">Tên tài khoản</label><input type="text" id="company" name="username" placeholder="Nhập vào tên tài khoản" class="form-control"></div>
                    <div class="form-group"><label for="tên admin" class=" form-control-label">Họ tên</label><input type="text" id="company" name="fullname" placeholder="Nhập vào họ tên" class="form-control"></div>
                    <div class="form-group"><label for="địa chỉ" class=" form-control-label">Địa chỉ</label><input type="text" id="address" name="address" placeholder="Nhập vào địa chỉ" class="form-control"></div>
                    <div class="row form-group">
                        <div class="col-6">
                            <div class="form-group"><label for="Số điện thoại" class=" form-control-label">Số điện thoại</label><input type="text" id="phone" name="phone" placeholder="Nhập vào số điện thoại" class="form-control"></div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label for="email" class=" form-control-label">Email</label><input type="email" id="email" name="email" placeholder="Nhập vào email" class="form-control"></div>
                        </div>
                    </div>
                    <div class="row" >
                        <div class="col-6">
                            <div class="form-group"><label for="Chức vụ" class=" form-control-label">Chức vụ</label>
                                <select class="form-control" id="position" name="position">
                                    <option>Admin</option>
                                    <option>Mod</option>
                                    <option>Chức vụ 3</option>
                                    <option>Chức vụ 4</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="border rounded border-secondary btn btn-secondary" data-dismiss="modal">Đóng</button>
                <button type="submit" class="border rounded border-success btn btn-success">Thêm</button>
            </div>
        </div>
    </div>
</div>