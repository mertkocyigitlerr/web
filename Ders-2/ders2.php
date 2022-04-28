<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ders-2</title>
</head>

<body>
    <?php


    /* php versiyon ve detay bilgisi gösterir */
    // echo phpinfo();

    echo " <h4> Tırnak işaretleri arasındaki farklar </h4>";
    $uni = "Adnan Menderes Üniversitesi  ";
    echo " Değişkenin içeriği:  $uni";
    echo "<br>";
    /* Değişken isminin yazdırılması  */
    echo  "1-Kazandığınız Üniversite : \$uni";
    echo "<br>";
    echo  "2-Kazandığınız Üniversite :" . ' $uni';
    echo "<br>";
    echo  '3-Kazandığınız Üniversite : $uni';
    echo "<br>";
    /* Değişken isminin yazdırılması  */
    echo "<br>";
    echo  "1-Kazandığınız Üniversite : $uni";
    echo "<br>";
    echo  "2-Kazandığınız Üniversite :" . $uni;
    echo "<br>";
    echo  "3-Kazandığınız Üniversite :" . "$uni";
    echo "<br>";
    echo  '4-Kazandığınız Üniversite :' . "$uni";
    echo "<br>";

    echo "<hr> <h4> Temel Matematiksel İşlemler </h4>";

    echo "<h5>Toplama İşlemi </h5>";
    $sayı1 = 10;
    $sayı2 = 20;
    $sayı1 + $sayı2 = 30;
    echo "\$sayı1 + \$sayı2 = " . ($sayı1 + $sayı2);
    echo "<br>";
    echo "$sayı1 + $sayı2 = " . ($sayı1 + $sayı2);
    echo "<br>";
    $sonuc = $sayı1 + $sayı2;
    echo "$sayı1 + $sayı2 = $sonuc";

    echo "<h5>Çıkarma İşlemi </h5>";
    $sayı1 = 10;
    $sayı2 = 20;
    $sayı1 - $sayı2 = 30;
    echo "\$sayı1 - \$sayı2 = " . ($sayı1 - $sayı2);
    echo "<br>";
    echo "$sayı1 - $sayı2 = " . ($sayı1 - $sayı2);
    echo "<br>";
    $sonuc = $sayı1 - $sayı2;
    echo "$sayı1 - $sayı2 = $sonuc";

    echo "<h5>Çarpma İşlemi </h5>";
    $sayı1 = 10;
    $sayı2 = 20;
    $sayı1 * $sayı2 = 30;
    echo "\$sayı1 * \$sayı2 = " . ($sayı1 * $sayı2);
    echo "<br>";
    echo "$sayı1 * $sayı2 = " . ($sayı1 * $sayı2);
    echo "<br>";
    $sonuc = $sayı1 * $sayı2;
    echo "$sayı1 * $sayı2 = $sonuc";

    echo "<h5>Çarpma İşlemi </h5>";
    $sayı1 = 10;
    $sayı2 = 20;
    $sayı1 / $sayı2 = 30;
    echo "\$sayı1 / \$sayı2 = " . ($sayı1 / $sayı2);
    echo "<br>";
    echo "$sayı1 / $sayı2 = " . ($sayı1 / $sayı2);
    echo "<br>";
    $sonuc = $sayı1 / $sayı2;
    echo "$sayı1 / $sayı2 = $sonuc";

    echo "<h5>Üst Alma İşlemi (pow) </h5>";
    $x = 4;
    $y = "2";
    // $y = (int)"2" ;   //Dönüşüm İşlemi 
    echo "Değişken Tipi : " . gettype($x) . "<br>";
    echo "Değişken Tipi : " . gettype($y) . "<br>";
    echo "$x<sup>$y</sup> = " . pow($x, $y);

    echo "<h5>Karekök Alma İşlemi (sqrt(x)) </h5>";
    $x = 123;
    $karekok = sqrt($x);
    echo "$x'in karekökü:  $karekok";

    echo "<h5> Mutlak  Alma İşlemi (abs(x)) </h5>";
    $x = (-12);
    $mutlak = abs($x);
    echo "|$x| sayısının mutlak değeri : $mutlak ";

    echo "<h5> Taban Değişimi İşlemi (base_convert(x,taban1,taban2)) </h5>";
    echo "27 sayısının 2'lik tabandaki karşılığı : " . base_convert(27, 10, 2);
    echo "<br>";
    $sayi = 50;
    $taban = 10;
    $yenitaban = 2;
    $sonuc = base_convert($sayi, $taban, $yenitaban);
    echo "<br>";
    echo "($sayi)<sub>($taban)</sub>=($sonuc)<sub>($yenitaban)</sub>";

    echo "<h5> Mod İşlemi (fmod(x,y))</h5>";
    $x = 20;
    $y = 4;
    $mod = fmod($x, $y);
    echo "$x mod $y : $mod";

    /*Girilen sayının tekmi çiftmi olduğunu gösterir */
    echo "<br> $x Sayısı: " . ((fmod($x, 2) == 0) ? "Çifttir." : "Tektir");


    echo "<h5>Yuvarlama İşlemi(round(x,y))</h5>";
    $x = 15.315;
    $y = 15.385;
    echo "$x Bir ondalık basamak yuvarlaması sonucu : "  . round($x, 1) . " <br>";
    echo "$y Bir ondalık basamak yuvarlaması sonucu : "  . round($x, 1) . " <br>";


    echo "$x İki ondalık basamak yuvarlaması sonucu : "  . round($x, 2) . " <br>";
    echo "$y İki ondalık basamak yuvarlaması sonucu : "  . round($x, 2) . " <br>";

    echo "<h5>Yuvarlama İşlemi(floor(x))</h5>";
    /* Her zaman en yakın aşağı tam sayı değerine yuvarlama işlemi yapar. */
    $x = 15.315;
    $y = 15.213;

    echo "$x Bir Floor basamak yuvarlaması sonucu : "  . floor($x) . " <br>";
    echo "$y Bir Floor basamak yuvarlaması sonucu : "  . floor($x) . " <br>";

    echo "<h5>Yuvarlama İşlemi(ceil(x))</h5>";
    /* Her zaman en yakın yukarı tam sayı değerine yuvarlama işlemi yapar. */
    $x = 15.315;
    $y = 14.213;

    echo "$x Bir Floor basamak yuvarlaması sonucu : "  . ceil($x) . " <br>";
    echo "$y Bir Floor basamak yuvarlaması sonucu : "  . ceil($y) . " <br>";

    echo "<h5>Rasgele Sayı Üretme (rand(x,y))</h5>";
    echo "10-100 Arasında Rasgele Değer: " . rand(10, 100);

    for ($i = 1; $i <= 10; $i++) {
        echo "<br>$i Eleman: " . rand(10, 100);
    }

    
    ?>







</body>

</html>