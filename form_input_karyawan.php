<?php include 'header.php'; ?>

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
					Input Data User
				</div>
				<div class="panel-body">
					<div class="col-lg-6">
                        <form action="simpan_karyawan.php" method="post">
                            <input type="text" name="id_karyawan" class="form-control" placeholder="Masukan ID Karyawan">
                            <br>
                            <input type="text" name="nama_karyawan" class="form-control" placeholder="Nama Karyawan">
                            <br>
                            <select name="status" class="form-control">
                                <option value="Pengajar">Pengajar</option>
								<option value="Orang Tua">Orang Tua</option>
                            </select>
                            <br>
                            <input type="email" name="email" class="form-control" placeholder="Email Karyawan">
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
