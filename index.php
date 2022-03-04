<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- CSS -->
    <link href="./src/css/index.css" rel="stylesheet" />

</head>

<body>

    <div class="containerGeral content-fluid">
        <div id="containerForm" class="col-md-4">
        
            <form id="formFile">
                
                <div class="mb-3">
                    <label for="inptFileXml" class="form-label">
                        <sup>*</sup>Upload Arquivo <b>(.xml)</b>
                    </label>
                    <input id="inptFileXml" name="inptFileXml" type="file" class="form-control" accept=".xml" required>
                </div>
                
                <div class="mt-3">
                    <div class="row">
                        <div class="col-md-6">
                            <button id="btnSubmitForm" type="button" class="btn btn-primary btn-small" onclick="sendFile()">Enviar</button>
                        </div>
                        <div class="col-md-6">
                            <a id="linkTabela" href="./pages/table.php">>>>Registros<<<</a>
                        </div>
                    </div>
                </div>
            
            </form>
        
        </div>
    </div>

    <!-- scripts -->
    <div>
        <!-- Jquery -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <!-- Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        <!-- JS -->
        <script src="./src/js/index.js"></script>
    </div>
    

</body>
</html>