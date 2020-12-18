<!DOCTYPE html>
<html>
<head>
<title>My List</title>

    <!-- Load file CSS Bootstrap offline -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	 <?php
	 include "head.php";
	 ?>
</head>
<body>
<div class="container">
    <br>
	</br>
    <h4>My List</h4>
<?php

    include "koneksi.php";

    //Mengatur variabel id_film untuk metode delete
    if (isset($_GET['id_film'])) {
        $id_film=htmlspecialchars($_GET["id_film"]);
		
	//Fungsi untuk menghapus data
        $sql="delete from user where id_film='$id_film' ";
        $hasil=mysqli_query($kon,$sql);

        //Kondisi apakah berhasil atau tidak
            if ($hasil) {
                header("Location:index.php");

            }
            else {
                echo "<div class='alert alert-danger'> Data Gagal dihapus.</div>";

            }
        }
?>


    <table class="table table-bordered table-hover">
        <br>
        <thead>
        <tr>
			<th>No</th>
            <th>Id Film</th>
            <th>Nama Film</th>
            <th>Tahun</th>
            <th>Nama Genre</th>
            <th colspan='2'>Update/Delete</th>

        </tr>
        </thead>
        <?php
        include "koneksi.php";
        $sql="select * from user order by id_film desc";

        $hasil=mysqli_query($kon,$sql);
        $no=0;
        while ($data = mysqli_fetch_array($hasil)) {
            $no++;

            ?>
            <tbody>
            <tr>
                <td><?php echo $no;?></td>
                <td><?php echo $data["id_film"]; ?></td>
                <td><?php echo $data["nama_film"];   ?></td>
                <td><?php echo $data["tahun"];   ?></td>
                <td><?php echo $data["nama_genre"];   ?></td>
                <td>
                    <a href="update.php?id_film=<?php echo htmlspecialchars($data['id_film']); ?>" class="btn btn-warning" role="button">Update</a>
                    <a href="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>?id_film=<?php echo $data['id_film']; ?>" class="btn btn-danger" role="button">Delete</a>
                </td>
            </tr>
            </tbody>
            <?php
        }
        ?>
    </table>
    <a href="create.php" class="btn btn-primary" role="button">Add List</a>

</div>

</body>
</html>
