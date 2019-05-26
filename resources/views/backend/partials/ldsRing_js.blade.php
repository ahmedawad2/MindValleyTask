<script>
    $(function () {
        $('.lds-ring').hide();
        $(document).ajaxStart(function () {
            $('.lds-ring').show();
        });
        $(document).ajaxStop(function () {
            $('.lds-ring').hide();
        });
    })
</script>