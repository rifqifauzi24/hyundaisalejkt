<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Tambah Data
                </div>
                <div class="card-body">
                    <!-- <?php if(validation_errors()): ?>
                        <div class="alert alert-danger" role="alert">
                        <?= validation_errors(); ?>
                        </div>
                        
                    <?php endif; ?> -->

                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" name="nama" id="nama">
                            <small class="form-text text-muted"><?php echo form_error('nama'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nrp">NRP</label>
                            <input type="text" class="form-control" name="nrp" id="nrp">
                            <small class="form-text text-muted"><?php echo form_error('nrp'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nrp">Email</label>
                            <input type="email" class="form-control" name="email" id="email">
                            <small class="form-text text-muted"><?php echo form_error('email'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <select class="form-control" id="jurusan" name="jurusan">
                                <option value="Sistem Informasi">Sistem Informasi</option>
                                <option value="Teknik Informatika">Teknik Informatika</option>
                                <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
                                <option value="Manajemen">Manajemen</option>
                            </select>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right ">Tambah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>