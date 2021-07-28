<html>

<head>
    <title>GEGAP - C131543</title>

    <!-- Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome JS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.js" integrity="sha512-ia48mJh6IXv6baAI07Ib/crgsG/MD4tbSnOndWLo3GSExMhYsn1xPbni40VamCaXWk79t1dxi/JahsqOFazkew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/js/bootstrap.min.js" integrity="sha512-a6ctI6w1kg3J4dSjknHj3aWLEbjitAXAjLDRUxo2wyYmDFRcz2RJuQr5M3Kt8O/TtUSp8n2rAyaXYy1sjoKmrQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>

<body>
    <div class="container">
        @yield('content')
    </div>
</body>

</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(document).ready(function() {
        $('#VR_JUROS').on('change', function(event) {
            event.preventDefault();
            var vrParcela = parseFloat($('#VR_JUROS').val()) + parseFloat($('#VR_AMORTIZACAO').val());
            $('#VR_PARCELA').val(vrParcela);
        });
        $('#VR_AMORTIZACAO').on('change', function(event) {
            event.preventDefault();
            var vrParcela = parseFloat($('#VR_JUROS').val()) + parseFloat($('#VR_AMORTIZACAO').val());
            $('#VR_PARCELA').val(vrParcela);
        });
    });
</script>