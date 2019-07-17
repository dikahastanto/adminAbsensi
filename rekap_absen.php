<?php 
    include 'header.php';
    $tgl = $_GET['tgl'];
    include 'koneksi.php'
?>
		
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Rekap Absen</h1>
		</div>
	</div><!--/.row-->

	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">
                    <form action="rekap_absen.php" method="get">
                        <div class="row">
                            <div class="col-md-6 input-group date" data-date="" data-date-format="yyyy-mm-dd" style="margin-left:10px;">
                                <input class="form-control" type="text" name="tgl" readonly="readonly" placeholder="tanggal">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            <div class="col-md-6">
                                <input type="submit" class="btn btn-primary" value="Cek Rekap" style="margin-bottom:6px;">
                            </div>
                        </div>
                    </form>
                </div>
                
				</div>
				<div class="panel-body">
					<h4>Tampil Absen</h4>
                    <table class='table table-hover'>
                    <?php 
                        if($tgl==""){
                            echo "Silahkan Pilih Tanggal";
                        }else{
                            $tgl_real = date('Y-m-d',strtotime($tgl));
                            $sql = "SELECT * FROM tb_absenharian WHERE date(Jam) = '$tgl_real'";
                            $query = mysqli_query($con,$sql);
                            echo   "<tr>
                                        <td>ID Absen</td>
                                        <td>ID Karyawan</td>
                                        <td>Tanggal Dan Jam</td>
                                        <td>Status</td>
                                    </tr>";
                            while($data=mysqli_fetch_array($query)){
                            echo    "<tr>
                                        <td>".$data['ID_Absen']."</td>
                                        <td>".$data['ID_Karyawan']."</td>
                                        <td>".$data['Jam']."</td>
                                        <td>".$data['status']."</td>
                                    </tr>";
                            }
                        }
                    ?>
                    </table>
				</div>
			</div>
		</div>
	</div><!--/.row-->

</div>	<!--/.main-->

<?php include 'footer.php'; ?>	