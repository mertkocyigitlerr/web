<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mert Koçyiğitler (Ödev-1)</title>
</head>

<body>
    <?php

    $uni    = "ADÜ";
    $myo    = "Aymes";
    $ad     = "Mert";
    $soyad  = "Koçyiğitler";
    $numara = "123";

    ?>
    <table border="1">

        <body>
            <tr>
                <td><label for="universite">Üni </label></td>
                <td><input type="text" name="" value="<?php echo $uni; ?>" id="uni" disabled></td>
            </tr>
            <tr>
                <td><label for="myo">Myo </label></td>
                <td><input type="text" name="" value="<?php echo $myo; ?>" id="myo" disabled> </td>
            </tr>
            <tr>
                <td><label for="ad"> Öğrenci Adı </label></td>
                <td><input type="text" name="" value="<?php echo $ad; ?>" id="ad" disabled> </td>
            </tr>
            <tr>
                <td><label for="soyad">Soyad </label></td>
                <td><input type="text" name="" value="<?php echo $soyad; ?>" id="soyad" disabled> </td>
            </tr>
            <tr>
                <td><label for="numara">Öğrenci No </label></td>
                <td><input type="text" name="" value="<?php echo $numara; ?>" id="numara" disabled> </td>
            </tr>
        </body>
    </table>



</body>

</html>