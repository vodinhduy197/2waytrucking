
    <div class="modal fade" id="delete_type_of_cargo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Xóa loại hàng</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('admin.category.typeofcargo.index.delete') }}" method="post">
            {{ csrf_field() }}
                <div class="modal-body">
                    <input type="hidden" name="id_cat" id="id_cat" value="">
                    <p>Bạn có muốn xóa loại này không?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Hủy</button>
                    <button type="submit" class="btn btn-success">Xóa</button>
                </div>
            </form>
            </div>
        </div>
    </div>