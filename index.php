<?php 

$tempat = 'Asep';

if ($tempat=='Hello World') {
    echo 'Benar/True';
} else {
    echo 'Salah/False';
}

$awal = 2;

$kedua = $awal + 3;

echo "<br>Hasilnya $kedua dari nomor awal $awal";

if ($kedua != 4) {
    echo "<br>Bukan 4 tapi $kedua";
} else {
    echo '<br>Apa hayo';
}


?>

<html>
<body>



<form method="get">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>

Welcome <?php echo $_GET["name"]; ?><br>
Your email address is: <?php echo $_GET["email"]; ?>

</body>
</html>