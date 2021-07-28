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
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Pesquisar Contrato</h2>
            </div>
        </div>
    </div>
    <div class="container">
        <form action="#" method="POST">
            <div class="row">
                <div class="col-xs-2 col-sm-2 col-md-2">
                    <div class="form-group">
                        <strong>Produto:</strong>
                        <input type="number" id="nuProduto" class="form-control" placeholder="Código do Produto">
                    </div>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4">
                    <div class="form-group">
                        <strong>Contrato:</strong>
                        <input type="number" id="nuContrato" class="form-control" placeholder="Número do Contrato">
                    </div>
                </div><br>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <br><button type="submit" class="btn btn-primary">Buscar</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(document).ready(function() {
        $('button[type=submit]').on('click', function(event) {
            event.preventDefault();
            var nuProduto = $('#nuProduto').val();
            var nuContrato = $('#nuContrato').val();
            $('form').attr('action', 'http://localhost:8000/produtos/' + nuProduto + '/contratos/' + nuContrato);
            $('form').submit();
        });
    });
</script>