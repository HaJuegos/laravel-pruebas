<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <main>
        <div class="forms">
           <form action="<?php echo e(route('FormRrq')); ?>" method="POST">
                <h1>Suma</h1>

                <?php echo csrf_field(); ?>
                <label>Numero 1:</label>
                <br>
                <input type="number" placeholder="Numero 1" name="nmr1" required>

                <br></br>

                <label>Numero 2:</label>
                <br>
                <input type="number" placeholder="Numero 2" name="nmr2" required>

                <br></br>
                <button type="submit">Sumar</button>

            </form>
        </div>
    </main>
</body>
</html><?php /**PATH C:\Users\Aprendiz\Documents\GitHub\Cosas-de-Programacion\laravel_stuff\laravel0207\resources\views/FormularioVista.blade.php ENDPATH**/ ?>