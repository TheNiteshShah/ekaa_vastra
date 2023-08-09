<!-- <footer class="page-footer" style="bottom:auto">
    <div class="footer-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <p class="mb-0 text-muted">Fineoutput 2023</p>
                </div>
                <div class="col-sm-6 d-none d-sm-block">
                    <ul class="breadcrumb pt-0 pr-0 float-right">
                        <li class="breadcrumb-item mb-0">
                            <a href="#" class="btn-link">Review</a>
                        </li>
                        <li class="breadcrumb-item mb-0">
                            <a href="#" class="btn-link">Purchase</a>
                        </li>
                        <li class="breadcrumb-item mb-0">
                            <a href="#" class="btn-link">Docs</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer> -->
<script src="{{asset('backend/js/vendor/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('backend/js/vendor/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('backend/js/vendor/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('backend/js/vendor/select2.full.js')}}"></script>
<script src="{{asset('backend/js/vendor/bootstrap-datepicker.js')}}"></script>
<script src="{{asset('backend/js/vendor/bootstrap-tagsinput.min.js')}}"></script>
<script src="{{asset('backend/js/vendor/jquery.validate/jquery.validate.min.js')}}"></script>
<script src="{{asset('backend/js/vendor/jquery.validate/additional-methods.min.js')}}"></script>
<script src="{{asset('backend/js/vendor/Chart.bundle.min.js')}}"></script>
<script src="{{asset('backend/js/vendor/chartjs-plugin-datalabels.js')}}"></script>
<script src="{{asset('backend/js/vendor/moment.min.js')}}"></script>
<script src="{{asset('backend/js/vendor/fullcalendar.min.js')}}"></script>
<script src="{{asset('backend/js/vendor/datatables.min.js')}}"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
<script src="{{asset('backend/js/vendor/progressbar.min.js')}}"></script>
<script src="{{asset('backend/js/vendor/jquery.barrating.min.js')}}"></script>
<script src="{{asset('backend/js/vendor/nouislider.min.js')}}"></script>
<script src="{{asset('backend/js/vendor/Sortable.js')}}"></script>
<script src="{{asset('backend/js/vendor/mousetrap.min.js')}}"></script>
<script src="{{asset('backend/js/vendor/glide.min.js')}}"></script>
<script src="{{asset('backend/js/vendor/ckeditor5-build-classic/ckeditor.js')}}"></script>
<script src="{{asset('backend/js/dore.script.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.js"></script>
<script>
    const base_path = '{{ url('/') }}\/';
</script>
<script src="{{asset('backend/js/scripts.js')}}"></script>
<script src="{{asset('backend/js/vendor/bootstrap-notify.min.js')}}"></script>
<script>
  //---- Start Assign Column to dataTable  --------
  if (typeof column !== 'undefined') {
        $("#datatableRows").DataTable({
            "sScrollX": "100%",
        "sScrollXInner": "110%",
        "bScrollCollapse": true,
            columns: column,
        });
    }
    //---- End Assign Column to dataTable  --------
       //---- End Assign Column to ckeditor  --------
       if (typeof ClassicEditor !== "undefined") {
        if (typeof htmlEditor !== 'undefined') {
            for (const item of htmlEditor) {
                ClassicEditor.create(document.querySelector("#"+item)).catch(function(error) {});
            }
        }
    }
    //---- End Assign Column to ckeditor  --------
    //---- Start Update Status  --------
    $('[name=status]').click(function() {
        var id = $(this).data('id');
        var idd = $(this).attr('id');
        var path = $(this).data('url');
        $.ajax({
            type: "GET",
            dataType: "json",
            url: path + id,
            success: function(data) {
                new swal("Alert!", "Item updated successfully!", "success", '#DD6B55', );
                // window.setTimeout(function() {
                //     location.reload()
                // }, 1000)
            }
        });
    });
    //---- End Update Status  --------
    //---- Start delete item  --------
    $('[name=delete]').click(function() {
       
        var id = $(this).data('id');
        var idd = $(this).attr('id');
        var path = $(this).data('url');
       
        new swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this record!",
                type: "warning",
                showCloseButton: true,
                confirmButtonColor: '#DD6B55',
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        type: "DELETE",
                        url: path + id,
                        data: {
                            id: id // method and token not needed in data
                        },
                        success: function(response) {
                            new swal("Alert!", "Item deleted successfully!", "success", '#DD6B55', );
                            window.setTimeout(function() {
                                location.reload()
                            }, 1000)
                        }
                    });
                }
            });
    });
    //---- End delete item  --------
</script>
</body>

</html>