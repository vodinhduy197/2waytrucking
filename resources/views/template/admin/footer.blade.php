    <script src="/public/admin/assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="/public/admin/assets/js/popper.min.js"></script>
    <script src="/public/admin/assets/js/plugins.js"></script>
    <script src="/public/admin/assets/js/main.js"></script>

    <script src="/public/admin/assets/js/lib/data-table/datatables.min.js"></script>
    <script src="/public/admin/assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="/public/admin/assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="/public/admin/assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="/public/admin/assets/js/lib/data-table/jszip.min.js"></script>
    <script src="/public/admin/assets/js/lib/data-table/pdfmake.min.js"></script>
    <script src="/public/admin/assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="/public/admin/assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="/public/admin/assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="/public/admin/assets/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="/public/admin/assets/js/lib/data-table/datatables-init.js"></script>

    <script src="/public/admin/assets/js/lib/chosen/chosen.jquery.min.js"></script>
    <script src="/public/admin/assets/js/lib/chosen/chosen.proto.min.js"></script>

    <script src="/public/admin/assets/js/lib/chart-js/Chart.bundle.js"></script>
    <script src="/public/admin/assets/js/dashboard.js"></script>
    <script src="/public/admin/assets/js/widgets.js"></script>
    <script src="/public/admin/assets/js/lib/vector-map/jquery.vmap.js"></script>
    <script src="/public/admin/assets/js/lib/vector-map/jquery.vmap.min.js"></script>
    <script src="/public/admin/assets/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="/public/admin/assets/js/lib/vector-map/country/jquery.vmap.world.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#datatable').DataTable({
                "language": {
                    "decimal":        "",
                    "emptyTable":     "Không có dữ liệu trong bảng",
                    "info":           "Đang xem _START_ đến _END_ trong tổng số _TOTAL_ mục",
                    "infoEmpty":      "Đang xem 0 đến 0 trong tổng số 0 mục",
                    "infoFiltered":   "(được lọc từ _MAX_ mục)",
                    "infoPostFix":    "",
                    "thousands":      ",",
                    "lengthMenu":     "Xem _MENU_ mục",
                    "loadingRecords": "Loading...",
                    "processing":     "Đang xử lý...",
                    "search":         "Tìm kiếm:",
                    "zeroRecords":    "Không tìm thấy dòng nào phù hợp",
                    "paginate": {
                        "first":      "Đầu",
                        "last":       "Cuối",
                        "next":       "Tiếp",
                        "previous":   "Trước"
                    }
                    }
                });
            $('#typeOfTruck,#payLoad,#price').chosen({
                width: "100%",
                no_results_text: "Không có kết quả",
            });
        } );
    </script>

    <script>
        ( function ( $ ) {
            "use strict";

            jQuery( '#vmap' ).vectorMap( {
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: [ '#1de9b6', '#03a9f5' ],
                normalizeFunction: 'polynomial'
            } );
        } )( jQuery );
    </script>

    <script>
        $('#edit_type_of_cargo').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var name = button.data('name')
            var description = button.data('description')
            var id = button.data('id') // Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('.modal-body #cargo_name').val(name)
            modal.find('.modal-body #des').val(description)
            modal.find('.modal-body #id_cat').val(id)
        })

        $('#delete_type_of_cargo').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var id = button.data('id') // Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('.modal-body #id_cat').val(id)
        })
    </script>
    <script>
        //load ảnh đại diện
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#imagePreview').css('background-image', 'url('+e.target.result +')');
                    $('#imagePreview').hide();
                    $('#imagePreview').fadeIn(650);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#imageUpload").change(function() {
            readURL(this);
        });
    </script>


    </body>
</html>