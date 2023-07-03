<?php include 'header.php';
$db = new PDO("mysql:host=localhost; dbname=hastane_otomasyon; charest=utf8", 'root', '');
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hastane Otomasyon</title>
</head>
<body bgcolor="blue">

<table bgcolor="#5f9ea0">
    <tr style="color: black;font-size: large; ">
        <th>Hastane</th>
        <th>Klinik</th>
        <th>Doktor</th>
        <th>İl</th>
        <th>Tarih</th>
    </tr>

    <?php 
    $randevu_sor = $db->prepare("SELECT * FROM randevular
    INNER JOIN kullanici ON randevular.randevu_hasta_id = kullanici.kullanici_id WHERE kullanici_tc=:kullanici_tc");
    $randevu_sor->execute([
        'kullanici_tc' => $_SESSION['userkullanici_tc']
    ]);
    while ($randevu_cek = $randevu_sor->fetch(PDO::FETCH_ASSOC)) { ?>

    <tr style="color: red;">
        <td><?php echo $randevu_cek['randevu_hastane']; ?></td>
        <td><?php echo $randevu_cek['randevu_klinik']; ?></td>
        <td><?php echo $randevu_cek['randevu_doktor']; ?></td>
        <td><?php echo $randevu_cek['randevu_sehir']; ?></td>
        <td><?php echo $randevu_cek['randevu_tarih']; ?></td>
    </tr>
    <?php } ?>
    </table>

    
</body>
</html>