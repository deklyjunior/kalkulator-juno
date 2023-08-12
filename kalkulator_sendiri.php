<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tampilan.css">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@10..48,700&display=swap" rel="stylesheet">
</head>
<body>
    <center>
        <div style="margin-top:20px">
        <?php
            $reset=true;
            $hasil=0;
            $error="";
            if ($reset==false) {
                if (isset($_POST["reset"])) {
                    $reset=true;
                }
            } else if ($reset==true) {
                if (isset($_POST["reset"])) {
                    $reset=false;
                }
            }
            if ($_POST["angka1"] && $_POST["angka2"] !=="") {
                if (isset($_POST["tambah"])) {
                    $angka1= $_POST["angka1"];
                    $angka2= $_POST["angka2"];
                    $jumlahHasil = $angka1 + $angka2;
                    $hasil = $jumlahHasil;
                }
                if (isset($_POST["kurang"])) {
                    $angka1= $_POST["angka1"];
                    $angka2= $_POST["angka2"];
                    $jumlahHasil = $angka1 - $angka2;
                    $hasil = $jumlahHasil;
                }
                if (isset($_POST["kali"])) {
                    $angka1= $_POST["angka1"];
                    $angka2= $_POST["angka2"];
                    $jumlahHasil = $angka1 * $angka2;
                    $hasil = $jumlahHasil;
                }
                if (isset($_POST["bagi"])) {
                    $angka1= $_POST["angka1"];
                    $angka2= $_POST["angka2"];
                    $jumlahHasil = $angka1 / $angka2;
                    $hasil = $jumlahHasil;
                }
                if (isset($_POST["kuadrat"])) {
                    $angka1= $_POST["angka1"];
                    $angka2= $_POST["angka2"];
                    $hasilSementara=1;
                    for ($i=1; $i <= $angka2 ; $i++) { 
                            $hasilSementara=$hasilSementara * $angka1;
                    }
                    $hasil=$hasilSementara;
                }
            } else if ($reset==true) {
                $error= "Input harus diisi!";
            } else {
                echo "";
            }
        ?>
        </div>

        <form method="post">

        <h1 class="calc">Kalkulator</h1>
        
        <div class="bungkus">

            <div class="input-wrap">

                <input class="input" type="number" name="angka1" placeholder="angka pertama" autocomplete="off">
                <input class="input" type="number" name="angka2" placeholder="angka kedua" autocomplete="off">

            </div>

            <div style="margin-top:20px">
                <tr>
                    <td>
                        <button  class="tombol" type="submit" name="tambah">+</button>
                        <button class="tombol" type="submit" name="kurang">-</button>
                        <button class="tombol" type="submit" name="kali">*</button>
                        <button class="tombol" type="submit" name="bagi">/</button>
                        <button class="tombol" type="submit" name="kuadrat">^</button>
                        <button class="tombol" type="submit" name="reset">reset</button>
                    </td>
                </tr>
                <div style="color: white; margin-top: 20px;"><?= ($hasil === 0) ? "" : "Hasil $hasil"; ?> </div>
                <div style="color: red; margin-top: 20px;"><?= ($error) ? $error : ""; ?> </div>
            </div>
        </div>
        </form>
    </center>
    
</body>
</html>