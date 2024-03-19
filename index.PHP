<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
    <?php
    $n1 = 0;
    $n2 = 0;
    function calculadora() {
        if(isset($_POST['adicao'])) {
            echo ($_POST['num1'] + $_POST['num2']);
        }

        if(isset($_POST['subtracao'])) {
            echo ($_POST['num1'] - $_POST['num2']);
        }

        if(isset($_POST['multiplicacao'])) {
            echo ($_POST['num1'] * $_POST['num2']);
        }

        if(isset($_POST['divisao'])) {
            echo ($_POST['num1'] / $_POST['num2']);
        }
    }
    ?>
<body>
    <div class="container text-center">
        <form action="index.php" method="POST">
            <div class="row">
                <div class="col">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">numero 1</span>
                        <input type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="num1">
                    </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">numero 2</span>
                    <input type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="num2">
                </div>
            </div>
            <div class="row">
                    <div class="col">
                        <input type="checkbox" name="adicao" value="adicao" id="adicao">
                        <label for="adicao">
                            Adição
                        </label>
                    </div>
                    <div class="col">
                        <input type="checkbox" name="subtracao" value="subtracao" id="subtracao">
                        <label for="subtracao">
                            Subtração
                        </label>
                    </div>
                    <div class="col">
                        <input  type="checkbox" name="multiplicacao" value="multiplicacao" id="multiplicacao">
                        <label for="multiplicacao">
                            Multiplicação
                        </label>
                    </div>
                    <div class="col">
                        <input type="checkbox" name="divisao" value="divisao" id="divisao">
                        <label for="divisao">
                            Divisão
                        </label>
                    </div>
                    <input type="submit" name="Calcular" value="Calcular">
                    </div>
                </div>
        </form>
    </div>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        calculadora();
    }
    ?>
</body>
</html>