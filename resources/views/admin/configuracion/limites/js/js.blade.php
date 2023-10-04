<script src="{{ asset('js/selectize.js') }}" type="text/javascript"></script>

<script type="text/javascript">
    $(function() {
        $('.pickerSelectClass').selectize({
            preload: true,
            loadingClass: 'loading',
            closeAfterSelect: true
        });
    });
</script>
