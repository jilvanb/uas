<!DOCTYPE html>
<html>
<head>
    <title>Add List</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

</head>
<body>
<div class="container">
    <?php
    //Include file koneksi, untuk koneksikan ke database
    include "koneksi.php";

    //Fungsi untuk mencegah inputan karakter yang tidak sesuai
    function input($data) {
        $data = htmlspecialchars($data);
        return $data;
    }
    //Cek apakah ada kiriman form dari method post
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $id_film=($_POST["id_film"]);
        $nama_film=input($_POST["nama_film"]);
        $tahun=input($_POST["tahun"]);
        $nama_genre=input($_POST["nama_genre"]);

        //Query input menginput data kedalam tabel user
        $sql="insert into user (id_film,nama_film,tahun,nama_genre) values
		('$id_film','$nama_film','$tahun','$nama_genre')";

        //Mengeksekusi/menjalankan query diatas
        $hasil=mysqli_query($kon,$sql);

        //Kondisi apakah berhasil atau tidak dalam mengeksekusi query diatas
        if ($hasil) {
            header("Location:index.php");
        }
        else {
            echo "<div class='alert alert-danger'> Data Gagal disimpan.</div>";

        }

    }
    ?>
    <h2>Add My List</h2>


    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
        <div class="form-group">
            <label>Id Film:</label>
            <input type="text" name="id_film" class="form-control" placeholder="Masukan Id Film" required />

        </div>
        <div class="form-group">
            <label>Nama Film:</label>
            <input type="text" name="nama_film" class="form-control" placeholder="Masukan Nama Film" required/>

        </div>
         <div class="form-group">
            <label>Tahun:</label>
            <input type="text" name="tahun" class="form-control" placeholder="Masukkan Tahun" required/>

        </div>
        <div class="form-group">
            <label>Genre:</label>
            <input type="text" name="nama_genre" class="form-control" placeholder="Masukan Genre" required/>
        </div>
       

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>