<!DOCTYPE html>
<html>
<head>
    <title>Update My List</title>
    <!-- Load file CSS Bootstrap offline -->
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
    //Cek apakah ada nilai yang dikirim menggunakan method GET dengan nama id_film
    if (isset($_GET['id_film'])) {
        $id_film=input($_GET["id_film"]);

        $sql="select * from user where id_film=$id_film";
        $hasil=mysqli_query($kon,$sql);
        $data = mysqli_fetch_assoc($hasil);


    }

    //Cek apakah ada kiriman form dari method post
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $id_film=($_POST["id_film"]);
        $nama_film=input($_POST["nama_film"]);
        $tahun=input($_POST["tahun"]);
        $nama_genre=input($_POST["nama_genre"]);

        //Query update data pada tabel user
        $sql="update user set
			
		
			nama_film='$nama_film',
			tahun='$tahun',
			nama_genre='$nama_genre'
			where id_film=$id_film";

        //Mengeksekusi atau menjalankan query diatas
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
    <h2>Update List</h2>


    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <div class="form-group">
            <label>Id Film:</label>
            <input type="text" name="id_film" class="form-control" value="<?php echo $data['id_film']; ?>" placeholder="Masukan Id Film" required />

        </div>
        <div class="form-group">
            <label>Nama Film:</label>
            <input type="text" name="nama_film" class="form-control" value="<?php echo $data['nama_film']; ?>" placeholder="Masukan Nama Film" required/>

        </div>
         <div class="form-group">
            <label>Tahun:</label>
            <input type="text" name="tahun" class="form-control" value="<?php echo $data['tahun']; ?>" placeholder="Masukan Id Genre" required/>

        </div>
        <div class="form-group">
            <label>Nama Genre:</label>
            <input type="text" name="nama_genre" class="form-control" value="<?php echo $data['nama_genre']; ?>" placeholder="Masukan Genre" required/>
			</div>
        

        <input type="hidden" name="id_anggota" value="<?php echo $data['id_film']; ?>" />

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>