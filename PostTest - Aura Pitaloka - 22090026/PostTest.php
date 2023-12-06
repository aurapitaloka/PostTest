<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>

<h2> Form HTML dan Form Handling PHP </h2>

<?php
$nama = $email = $alamat = $no_hp = $prodi = "";
$namaErr = $emailErr = $alamatErr = $no_hpErr = $prodiErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["nama"])) {
        $nama = test_input($_POST["nama"]);
    }
    if (isset($_POST["email"])) {
        $email = test_input($_POST["email"]);
    }
    if (isset($_POST["alamat"])) {
        $alamat = test_input($_POST["alamat"]);
    }
    if (isset($_POST["no_hp"])) {
        $no_hp = test_input($_POST["no_hp"]);
    }
    if (isset($_POST["prodi"])) {
        $prodi = test_input($_POST["prodi"]);
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
  Nama : <input type="text" name="nama"><span class="error">* <?php echo $namaErr;?></span><br><br>
  Email : <input type="text" name="email"><span class="error">* <?php echo $emailErr;?></span><br><br>
  Alamat : <input type="text" name="alamat"><span class="error">* <?php echo $alamatErr;?></span><br><br>
  No. HP : <input type="text" name="no_hp"><span class="error">* <?php echo $no_hpErr;?></span><br><br>
  Prodi : <input type="text" name="prodi"><span class="error">* <?php echo $prodiErr;?></span><br><br>
<input type="submit">
</form>

<?php
echo "Nama: " . $nama . "<br>";
echo "Email: " . $email . "<br>";
echo "Alamat: " . $alamat . "<br>";
echo "No. HP: " . $no_hp . "<br>";
echo "Prodi: " . $prodi . "<br>";
?>

</body>
</html>
