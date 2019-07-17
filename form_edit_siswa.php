<?php 
    include 'header.php'; 
    include 'koneksi.php';

    $nis = $_GET['id'];
    $sql = "SELECT * FROM tb_pengajar WHERE status='Orang Tua'";
    $query = mysqli_query($con,$sql);

    $sql1 = "SELECT * FROM tb_siswa WHERE nis='$nis'";
    $query1 = mysqli_query($con,$sql1);
    $data_siswa = mysqli_fetch_array($query1);
?>
		
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Form</h1>
		</div>
	</div><!--/.row-->

	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					Update Data Siswa
				</div>
				<div class="panel-body">
					<div class="col-lg-6">
                        <form action="update_siswa.php" method="post">
                            <input readonly value="<?= $data_siswa['nis'];  ?>" type="text" name="nis" class="form-control" placeholder="Masukan NIS Siswa">
                            <br>
                            <input value="<?= $data_siswa['nama'];  ?>" type="text" name="nama_siswa" class="form-control" placeholder="Nama Siswa"> 
                            <br>
                            <input value="<?= $data_siswa['kelas'];  ?>" type="text" name="kelas" class="form-control" placeholder="Kelas">                        
                            <br>
                            <select name="nama_ortu" class="form-control">
                                <?php 
                                    while ($data=mysqli_fetch_array($query)) {
                                        if ($data['Nama']==$data_siswa['nama_ortu']) {
                                            echo "<option selected value='".$data['nama']."'>".$data['Nama']."</option>";
                                        }else{
                                            echo "<option value='".$data['Nama']."'>".$data['Nama']."</option>";
                                        }
                                        
                                    } 
                                ?>
                            </select>
                            <br>
                            <input type="submit" class="btn btn-primary">
                        </form>
                    </div>
				</div>
			</div>
		</div>
	</div><!--/.row-->

</div>	<!--/.main-->
<?php include 'footer.php'; ?>	