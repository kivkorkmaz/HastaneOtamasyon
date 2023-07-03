<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stil.css">
    <title>Hastane Otomasyon</title>
</head>
<body bgcolor="blue">
    <header>
        <h2 style="color: brown; background: whitesmoke ">Hastane Otomasyon</h2>
    </header>

    <div class="tableOuter">
        <h1 style="color: red">Giriş Yap</h1>
        <form action="islem.php" method="post">
            <div class="user">
                <input style="color: darkred;" type="text" name="kullanici_tc" placeholder="Tc Kimlik No">
            </div>
            <div class="pass">
                <input style="color: darkred" type="password" name="kullanici_password" placeholder="Şifre">
            </div>
            <button style="background:black " class="sub" id="giris" name="giris_yap">Giriş Yap</button>
            <br>
        </form>
        <a href="uye.php"><button style="background: red" type="submit" class="sub" id="uye">Üye Ol</button></a>
    </div>
    
</body>
</html>