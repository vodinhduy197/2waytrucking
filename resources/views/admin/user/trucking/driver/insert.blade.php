<div class="modal fade" id="insert" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Thêm tài xế</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card-body card-block">
                    <div class="form-group"><label for="tên admin" class=" form-control-label">Họ tên</label><input type="text" id="company" placeholder="Nhập vào họ tên" class="form-control"></div>
                    <div class="row form-group">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="Giới tính" class=" form-control-label">Giới tính</label>
                                <select id="sex" class="form-control">
                                    <option>Nam</option>
                                    <option>Nữ</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="email" class=" form-control-label">Ngày sinh</label>
                                <input type="date" id="date-of-birth" class="form-control" min="1930-01-01" max="2018-12-31"/>
                            </div>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-6">
                            <div class="form-group"><label for="Số điện thoại" class=" form-control-label">Số điện thoại</label><input type="text" id="phone" placeholder="Nhập vào số điện thoại" class="form-control"></div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label for="email" class=" form-control-label">Email</label><input type="email" id="email" placeholder="Nhập vào email" class="form-control"></div>
                        </div>
                    </div>

                    <div class="form-group"><label for="địa chỉ" class=" form-control-label">Địa chỉ</label><input type="text" id="address" placeholder="Nhập vào địa chỉ" class="form-control"></div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="border rounded border-secondary btn btn-secondary" data-dismiss="modal">Đóng</button>
                <button type="button" class="border rounded border-success btn btn-success">Thêm</button>
            </div>
        </div>
    </div>
</div>