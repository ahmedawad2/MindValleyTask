<script src="{{asset('public/backend/app-assets/vendors/js/tables/jquery.dataTables.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('public/backend/app-assets/vendors/js/tables/datatable/dataTables.bootstrap4.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('public/backend/app-assets/vendors/js/tables/datatable/dataTables.buttons.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('public/backend/app-assets/vendors/js/tables/buttons.flash.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('public/backend/app-assets/vendors/js/tables/jszip.min.js')}}" type="text/javascript"></script>
<script src="{{asset('public/backend/app-assets/vendors/js/tables/pdfmake.min.js')}}" type="text/javascript"></script>
<script src="{{asset('public/backend/app-assets/vendors/js/tables/vfs_fonts.js')}}" type="text/javascript"></script>

<script src="{{asset('public/backend/app-assets/vendors/js/tables/buttons.html5.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('public/backend/app-assets/vendors/js/tables/buttons.print.min.js')}}"
        type="text/javascript"></script>


{{--toastr--}}
<script src="{{asset('public/backend/app-assets/vendors/js/extensions/toastr.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('public/backend/app-assets/js/scripts/extensions/toastr.min.js')}}"
        type="text/javascript"></script>
<script>

    // $(function () {
    //     $.extend($.fn.dataTable.defaults, {
    //         searching: true,
    //         ordering: true,
    //
    //     });
    // })
    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": false,
        "progressBar": false,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        showMethod: "slideDown",
        hideMethod: "slideUp",
    };

</script>