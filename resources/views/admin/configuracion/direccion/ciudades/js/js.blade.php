<!--Toggle -->
{{-- <script src="{{ asset('js/bootstrap4-toggle.min.js')}}"></script> --}}

<!-- selectize -->
<script src="{{ asset('js/selectize.js') }}" type="text/javascript"></script>

<script type="text/javascript">
    $('#modal_ciudad').on('show.bs.modal', function(e) {
        var modal = $(e.delegateTarget),
            data = $(e.relatedTarget).data();
        modal.addClass('loading');
        $("#form-enviar").attr('action', data.action);
        $("#method").val('post');
        modal.removeClass('loading');
        if (data.recordId != undefined) {
            modal.addClass('loading');
            $('.modal_registro_ciudad_id', modal).val(data.recordId);
            $.getJSON('cities/' + data.recordId + '/edit', function(data) {
                var obj = data[0];
                var $estado = $('#state').selectize();
                var $pais = $('#country').selectize();
                $estado.attr('disable', false);
                $pais[0].selectize.setValue(obj.idCountry);
                $('#name', modal).val(obj.name);
                $estado[0].selectize.setValue(obj.idState).load();
                modal.removeClass('loading');
            });
        }
    });
    var xhr;
    var select_country, $select_country;
    var select_state, $select_state;

    $select_country = $('#country').selectize({
        loadingClass: 'loading',
        onChange: function(value) {
            if (!value.length) return;
            /*listar estados*/
            select_state.disable();
            select_state.clearOptions();
            select_state.load(function(callback) {
                xhr && xhr.abort();
                xhr = $.ajax({
                    url: './combo/' + value + '/state',
                    success: function(results) {
                        select_state.enable();
                        callback(results);
                    },
                    error: function() {
                        callback();
                    }
                })
            });
        }
    });

    $select_state = $('#state').selectize({
        labelField: 'name',
        valueField: 'id',
        searchField: ['State'],
        loadingClass: 'loading',
    });

    select_country = $select_country[0].selectize;
    select_state = $select_state[0].selectize;

    $('#modal_ciudad').on('hidden.bs.modal', function(e) {
        $('#state')[0].selectize.clear();
        $('#name').val('');
        $('#country')[0].selectize.clear();
    });
</script>
