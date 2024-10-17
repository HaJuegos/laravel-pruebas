<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo e(asset('css/prueba.css')); ?>">
    <title>Formula Cuadratica</title>
</head>
<body>
    <main>
        <div class="container_forms" >
            <h1>Formula Cuadratica</h1>

            <h3>Para realizar esta formula, necesitamos 3 numeros principales para las siguientes variables: A, B y C. Ingresa esos numeros a continuacion:</h3>

            <div class="form_panel">
                <form action="<?php echo e(route('viewForm')); ?>" method="post" autocomplete="on" name="FormFormula">
                    <?php echo csrf_field(); ?>
                    <label for="numA">Numero Obligatorio para la variable A:</label>
                    <br>
                    <input type="number" id="numA" name="numA" placeholder="Numero A" autocomplete="on" autofocus required>

                    <br>
                    <br>

                    <label for="numB">Numero Opcional para la variable B:</label>
                    <br>
                    <input type="number" id="numB" name="numB" placeholder="Numero B" autocomplete="on" autofocus>

                    <br>
                    <br>

                    <label for="numC">Numero Opcional para la variable C:</label>
                    <br>
                    <input type="number" id="numC" name="numC" placeholder="Numero C" autocomplete="on" autofocus>

                    <br>
                    <br>

                    <button type="submit" name="buttonFormSend"> Mostrar Resultados </button>
                </form>
            </div>
        </div>
    </main>
</body>
</html><?php /**PATH C:\Users\Aprendiz\Documents\GitHub\Cosas-de-Programacion\laravel_stuff\laravel0207\resources\views/FormulaCuadratica.blade.php ENDPATH**/ ?>