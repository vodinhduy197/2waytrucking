<div class="container">
    <div class="modal fade" id="edit_type_of_truck" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog " role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Sửa danh mục xe</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card-body card-block">
                        <div class="form-group ">
                            <form action="{{ route('admin.category.typeoftruck.index.update') }}" method="post">
                            {{ csrf_field() }}

                                <label for="tên danh mục xe">Loại xe </label>
                                <select  class="form-control" id="typeOfTruck" data-placeholder="Chọn loại xe" tabindex="1" >
                                    <option value=""></option>
                                    <option value="Xe bán tải">Xe bán tải</option>
                                    <option value="Xe đầu kéo">Xe đầu kéo</option>
                                    <option value="Xe thùng kín">Xe thùng kín</option>
                                </select>

                                <label for="Trọng tải">Trọng tải(tấn) </label>
                                <select  class="form-control" id="payLoad" data-placeholder="Chọn trọng tải" tabindex="1" >
                                    <option value=""></option>
                                    <option value="0.5">0.5</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                </select>

                                 <div class="modal-footer">
                                    <button type="button" class="border rounded border-secondary btn btn-secondary" data-dismiss="modal">Đóng</button>
                                    <input type="submit" class="border rounded border-success btn btn-success" value="Sửa"/>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>