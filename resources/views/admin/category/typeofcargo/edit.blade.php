<div class="container">
    <div class="modal fade" id="edit_type_of_cargo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog " role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Sửa danh mục hàng</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card-body card-block">
                        <div class="form-group ">
                            <form action="{{ route('admin.category.typeofcargo.index.update') }}" method="post">
                            {{ csrf_field() }}
                                <input type="hidden" name="id_cat" id="id_cat" value="">

                                <label for="tên danh mục hàng">Tên loại hàng </label>
                                <input type="text" id="cargo_name" name="cargo_name" class="form-control" placeholder="Nhập vào tên loại hàng">

                                <label for="mô tả">Mô tả </label>
                                <textarea type="text" id="des" name="des" class="form-control" placeholder="Nhập vào mô tả loại hàng" rows="4"></textarea>

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