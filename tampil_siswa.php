<?php 
    include 'header.php';
    include 'koneksi.php';
    
    $sql = "SELECT * FROM tb_siswa";
    $query = mysqli_query($con,$sql);

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
					Data Siswa
				</div>
				<div class="panel-body">
					<div class="col-lg-12">
                        <table class="table table-hover">
                            <thead>
                                <td>Nis</td>
                                <td>Nama Siswa</td>
                                <td>Kelas</td>
                                <td>Nama Ortu</td>
                                <td>Action</td>
                            </thead>
                        <?php 
                        
                        while ($data=mysqli_fetch_array($query)) {
                            echo    "<tr>
                                        <td>".$data['nis']."</td>
                                        <td>".$data['nama']."</td>
                                        <td>".$data['kelas']."</td>
                                        <td>".$data['nama_ortu']."</td>
                                        <td>
                                            <a href='form_edit_siswa.php?id=".$data['nis']."'>
                                                <button class='btn btn-warning'><i class='fa fa-pencil-square-o' aria-hidden='true'></i>Edit</button>
                                            </a>
                                            <a href='delete_siswa.php?id=".$data['nis']."'>
                                                <button class='btn btn-danger' onClick='return konfirmasi()'><i class='fa fa-trash-o' aria-hidden='true'></i> Delete</button>
                                            </a>
                                        </td>
                                    </tr>";
                        }

                        ?>
                        </table>
                    </div>
				</div>
			</div>
		</div>
	</div><!--/.row-->

</div>	<!--/.main-->
<script type="text/javascript" language="javascript">
	function konfirmasi () {
		var pilihan = confirm ("Apakah Anda Yakin ?");
		if(pilihan){
			return true
			}else{
			alert ("Proses Di Batalkan")
			return false
			}
	}
</script>
<script type="text/javascript" language="javascript">
	function konfirmasi () {
		var pilihan = confirm ("Apakah Anda Yakin ?");
		if(pilihan){
			return true
			}else{
			alert ("Proses Di Batalkan")
			return false
			}
	}
</script>
<?php include 'footer.php'; ?>	