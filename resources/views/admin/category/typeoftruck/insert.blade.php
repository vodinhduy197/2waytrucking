<div class="container">
    <div class="modal fade" id="insert_type_of_truck" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Thêm danh mục xe</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card-body card-block">
                        <ul class="nav nav-tabs">
                            <li ><a data-toggle="tab" href="#loaixe">Loại xe</a></li>
                            <li><a data-toggle="tab" href="#mucgialoaixe">Mức giá từng loại xe</a></li>
                            <li><a data-toggle="tab" href="#xe">Xe</a></li>
                            <li><a data-toggle="tab" href="#trongtai">Trọng tải</a></li>
                            <li><a data-toggle="tab" href="#mucgia">Mức giá</a></li>
                        </ul>
                        <div class="tab-content">
                            <!--Thêm loại xe(chọn loại xe đã có sẵn và trọng tải đã có sẵn)==>mức giá -->
                            <div class="tab-pane fade" id="loaixe">
                                <div class="form-group">
                                    <form action="{{ route('admin.category.typeoftruck.index.insert') }}" method="post" >
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
                                            <input type="submit" class="border rounded border-success btn btn-success" name="submit" value="Thêm"/>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!--END Thêm loại xe(chọn loại xe đã có sẵn và trọng tải đã có sẵn)==>mức giá -->

                            <!--Thêm giá trị trọng tải-->
                            <div class="tab-pane fade" id="trongtai">
                                <div class="form-group">
                                    <form action="{{ route('admin.category.typeoftruck.index.insert') }}" method="post" >
                                        {{ csrf_field() }}

                                        <label for="trongtai">Thêm trọng tải </label>
                                        <input type="number" id="new_PayLoad" class="form-control" name="new_PayLoad" placeholder="Nhập vào trọng tải" min="1">
                                        <div class="modal-footer">
                                            <button type="button" class="border rounded border-secondary btn btn-secondary" data-dismiss="modal">Đóng</button>
                                            <input type="submit" class="border rounded border-success btn btn-success" name="submit" value="Thêm"/>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!--END Thêm giá trị trọng tải-->

                            <!--Thêm tên loại xe-->
                            <div class="tab-pane fade" id="xe">
                                <div class="form-group" >
                                    <form action="{{ route('admin.category.typeoftruck.index.insert') }}" method="post" >
                                        {{ csrf_field() }}

                                        <label for="tenloaixe">Thêm tên loại xe </label>
                                        <input type="text" id="new_TypeOfTruck" class="form-control" name="new_TypeOfTruck" placeholder="Nhập vào tên loại xe">
                                        <div class="modal-footer">
                                            <button type="button" class="border rounded border-secondary btn btn-secondary" data-dismiss="modal">Đóng</button>
                                            <input type="submit" class="border rounded border-success btn btn-success" name="submit" value="Thêm"/>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!--END Thêm tên loại xe-->

                            <!--Thêm mức giá từng loại xe-->
                            <div class="tab-pane fade" id="mucgialoaixe">
                                <div class="form-group">
                                    <form action="{{ route('admin.category.typeoftruck.index.insert') }}" method="post" >
                                        {{ csrf_field() }}

                                        <label for="loaixe">Loại xe </label>
                                        <select  class="form-control" id="typeOfTruck" data-placeholder="Chọn loại xe" tabindex="1" >
                                            <option value=""></option>
                                            <option value="Xe bán tải">Xe bán tải</option>
                                            <option value="Xe đầu kéo">Xe đầu kéo</option>
                                            <option value="Xe thùng kín">Xe thùng kín</option>
                                        </select>

                                        <label for="mucgia">Mức giá </label>
                                        <select  class="form-control" id="price" data-placeholder="Chọn mức giá" tabindex="1" >
                                            <option value=""></option>
                                            <option value="150.000">150.000</option>
                                            <option value="250.000">250.000</option>
                                            <option value="300.000">300.000</option>
                                        </select>

                                        <div class="modal-footer">
                                            <button type="button" class="border rounded border-secondary btn btn-secondary" data-dismiss="modal">Đóng</button>
                                            <input type="submit" class="border rounded border-success btn btn-success" name="submit" value="Thêm"/>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!--END Thêm mức giá từng loại xe-->

                            <!--Thêm mức giá-->
                            <div class=" tab-pane fade" id="mucgia">
                                <div class="form-group">
                                    <form action="{{ route('admin.category.typeoftruck.index.insert') }}" method="post" >
                                        {{ csrf_field() }}

                                        <label for="mucgia'">Thêm mức giá </label>
                                        <input type="number" id="new_price" class="form-control" name="new_price" placeholder="Nhập vào mức giá" min="50000">
                                        <div class="modal-footer">
                                            <button type="button" class="border rounded border-secondary btn btn-secondary" data-dismiss="modal">Đóng</button>
                                            <input type="submit" class="border rounded border-success btn btn-success" name="submit" value="Thêm"/>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!--END Thêm mức giá-->
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
