<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?Php
    $ogrenciDetaylari = array(
        "ogr1" => array(
            "id"        => 1,
            "adi"       => "Havva",
            "soyadi"    => "Yıldız",
            "bolum"     => "Bilgisayar",
            "yas"       => 20,
            "dersler"   => array(
                "ders1" => "Web Programlama <br>
                            Veri Tabanı <br>
                            Mobil Programlama"
            ),
            "sınıf"     => 2,
            "memleket"  => "İzmir"
        ),
        "ogr2" => array(
            "id"        => 2,
            "adi"       => "Kemal",
            "soyadi"    => "Yıldız",
            "bolum"     => "Bilgisayar",
            "yas"       => 20,
            "dersler"   => array(
                "ders1" => "Donanım <br>
                            Sunucu <br>
                            Mobil Programlama"
            ),
            "sınıf"     => 2,
            "memleket"  => "İzmir"
        ),
        "ogr3" => array(
            "id"        => 3,
            "adi"       => "Kerim",
            "soyadi"    => "Yıldız",
            "bolum"     => "Matematik",
            "yas"       => 25,
            "dersler"   => array(
                "ders1" => "Cebir <br>
                            Homotopi Teori <br>
                            Homolojik Cebir"
            ),
            "sınıf"     => 4,
            "memleket"  => "Afyon"
        )
    );

    echo "<pre>";
    print_r($ogrenciDetaylari);
    echo "</pre>";




    ?>



    <table border="6">

        <body>
            <tr>
                <td>#İd</td>
                <td>#Adı</td>
                <td>#Soyadı</td>
                <td>#Bolum</td>
                <td>#Yas</td>
                <td>#Dersler</td>
                <td>#Sınıf</td>
                <td>#Memleket</td>
            <tr>
                <td><?php echo $ogrenciDetaylari["ogr1"]["id"] ?></td>
                <td><?php echo $ogrenciDetaylari["ogr1"]["adi"] ?></td>
                <td><?php echo $ogrenciDetaylari["ogr1"]["soyadi"] ?></td>
                <td><?php echo $ogrenciDetaylari["ogr1"]["bolum"] ?></td>
                <td><?php echo $ogrenciDetaylari["ogr1"]["yas"] ?></td>
                <td><?php echo $ogrenciDetaylari["ogr1"]["dersler"]["ders1"] ?></td>
                <td><?php echo $ogrenciDetaylari["ogr1"]["sınıf"] ?></td>
                <td><?php echo $ogrenciDetaylari["ogr1"]["memleket"] ?></td>
            </tr>
            <tr>
                <td><?php echo $ogrenciDetaylari["ogr2"]["id"] ?></td>
                <td><?php echo $ogrenciDetaylari["ogr2"]["adi"] ?></td>
                <td><?php echo $ogrenciDetaylari["ogr2"]["soyadi"] ?></td>
                <td><?php echo $ogrenciDetaylari["ogr2"]["bolum"] ?></td>
                <td><?php echo $ogrenciDetaylari["ogr2"]["yas"] ?></td>
                <td><?php echo $ogrenciDetaylari["ogr2"]["dersler"]["ders1"] ?></td>
                <td><?php echo $ogrenciDetaylari["ogr2"]["sınıf"] ?></td>
                <td><?php echo $ogrenciDetaylari["ogr2"]["memleket"] ?></td>
            </tr>
            <tr>
                <td><?php echo $ogrenciDetaylari["ogr3"]["id"] ?></td>
                <td><?php echo $ogrenciDetaylari["ogr3"]["adi"] ?></td>
                <td><?php echo $ogrenciDetaylari["ogr3"]["soyadi"] ?></td>
                <td><?php echo $ogrenciDetaylari["ogr3"]["bolum"] ?></td>
                <td><?php echo $ogrenciDetaylari["ogr3"]["yas"] ?></td>
                <td><?php echo $ogrenciDetaylari["ogr3"]["dersler"]["ders1"] ?></td>
                <td><?php echo $ogrenciDetaylari["ogr3"]["sınıf"] ?></td>
                <td><?php echo $ogrenciDetaylari["ogr3"]["memleket"] ?></td>
            </tr>
        </body>
    </table>

</body>

</html>