<script type="text/javascript">
    $('#modal_pais').on('show.bs.modal', function(e) {
        var modal = $(e.delegateTarget),
            data = $(e.relatedTarget).data();
        if (data.recordId != undefined) {
            modal.addClass('loading');
            $('.modal_registro_pais_id', modal).val(data.recordId);
            $.getJSON(modal.data().consulta + '?id=' + data.recordId, function(data) {
                var obj = data[0];
                $('#name', modal).val(obj.name);
                modal.removeClass('loading');
            });
        }
    });
    $('#modal_pais').on('hidden.bs.modal', function(e) {
        $('#name').val('');
    });
</script>
