<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Douze table de multiplication</title>
    <link rel="stylesheet" href="exercice-16/public/css/style.css" />
</head>

<body>

    <h1 class="title">
        Douze table de multiplication
    </h1>

    <div class="table-12">

        <?php for ($i = 1; $i <= 12; $i++) { ?>

            <div class="table">

                <p class="table-title">Table de multiplication de <?= $i; ?></p>

                <?php for ($j = 0; $j <= 12; $j++) {

                    echo $i . " * " . $j . " = " . $i * $j . "<br/>";
                } ?>

            </div>

        <?php } ?>

    </div>

    <p style="text-align: center;">Made by Iso-Doss</p>

</body>

</html>