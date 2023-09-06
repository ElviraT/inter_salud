<script>
    $(document).ready(function() {
        function mostrarSaludo() {
            var texto = "";
            var ahora = new Date();
            var hora = ahora.getHours();
            hora = 22;
            if (hora >= 6 && hora < 12) {
                texto = "Hola, Buenos días";
            } else if (hora >= 12 && hora < 19) {
                texto = "Hola, Buenas tardes";
            } else {
                texto = "Hola, Buenas noches";
            }
            $("#saludo").prepend(texto + ' ');
            // document.getElementById('saludo').prepend = texto;

        }
        mostrarSaludo();
    })
</script>
