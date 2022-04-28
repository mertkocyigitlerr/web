<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Ders-1 </title>
</head>

<body>
    <!-- Html yorum Satırı -->
    <?php
    /* açıklama satırı bloğu(çoklu satur kulanılabilir)  oluşturmak için = shift+alt+a */
    // tek satır açıklama
    /* Kullanılan Komut :
    
    echo:  ekrana yazdırma işlemi yapar .
    komut içeresinde html etiketleri kullanılabilir . 
    çift veya tek tırnak kulanılabilir
    çift tırnak ile kulanıldığında içersindeki değişkinlerin içeriğini ekrana yazar 
    nokta(.) oparatörü ile birleştirme işlemi yapılabilir.
    ters slash (\) kaçış karekteridir . özel ifadelerden önce kullanılır 

    */
    echo "<h3>Adnan Menderes Üniversitesi</h3>";
    echo "<h4>Aydın Meslek Yüksekokulu ";
    echo "Aydın Meslek Yüksekokulu </h4>";
    echo " Bilgisayar Programcılığı " . "AYMES";
    echo " <br>Bilgisayar Programcılığı " . "<br>AYMES";


    echo "<hr> <h4> Değişken Tanılama </h4>";
    echo " <ol>
               <li>Değişken İsimleri $ ile başlar . </li>
               <li>Değişken İsimleri sayısal ifadelerle başlayamaz . </li>
               <li>Değişken İsimleri boşluk kullanılmaz.İki kelime birinci_sinif birinciSinif örnekleri kullanılabilir  . </li>
               <li>Değişken İsimleri küçük-büyük harfe duyarlıdır. \$sayi != \$Sayi  </li>
               <li>Değişken İsmi, değişkenin taşıdığı içeriği ifade etmeli . </li>
               <li>Değişken içeriğinde metinsel ifade varsa çift tırnak(\") veya tek tırnak (') kullanılabilir.</li>
               <li>Değişken içeriğinde sayısal ifade varsa tırnak kullanmak gerekli değildir . </li>
               <li>Değişken içerikleri ekrana echo komutu ile yazdırılabilir. </li>
        </ol>";
    echo "<hr> <h4> Değişken Tanımlama Örnekleri </h4>";
    $isim    = "Mert";
    $soyisim = " Koçyiğitler";
    $gsm     = " 4654654646";

    echo $isim . "<br>";
    echo "$isim <br> $soyisim <br> $gsm" . "<hr>";


    /* Uygulama 
        Üniversite-myo-ad-soyad--numara değişkenlerini tanımlayınız .
        Bu değişkenleri içeriklerini tablo veya form içeriğinde ekrana yazdırınız      
    */

    $uni = "ADÜ";
    $myo = " Aymes";
    $ad  = " Mert";
    $soyad = "Koçyiğitler";
    $numara = "123";
    ?>

    <form action="">
        <label for="universite">Uni </label>
        <input type="text" name="" value "<?php echo $uni; ?>" id="universite" disabled> <br>

        <label for="MYO">myo </label>
        <input type="text" name="" value "<?php echo $myo; ?>" id="myo" disabled> <br>

        <label for="ad">Öğrenci adı </label>
        <input type="text" name="" value "<?php echo $ad; ?>" id="ad" disabled> <br>

        <label for="soyad">soyad </label>
        <input type="text" name="" value "<?php echo $soyad; ?>" id="soyad" disabled> <br>

        <label for="numara">Öğrenci No </label>
        <input type="text" name="" value "<?php echo $numara; ?>" id="numara" disabled> <br>
    </form>










    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

























</body>

</html>