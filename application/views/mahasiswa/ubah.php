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
                        <input type="hidden" name="id" value="<?php echo $mahasiswa['id'];?>">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" name="nama" id="nama" value="<?php echo $mahasiswa['nama'];?>">
                            <small class="form-text text-muted"><?php echo form_error('nama'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nrp">NRP</label>
                            <input type="text" class="form-control" name="nrp" id="nrp" value="<?php echo $mahasiswa['nrp'];?>">
                            <small class="form-text text-muted"><?php echo form_error('nrp'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nrp">Email</label>
                            <input type="email" class="form-control" name="email" id="email" value="<?php echo $mahasiswa['email']; ?>">
                            <small class="form-text text-muted"><?php echo form_error('email'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <select class="form-control" id="jurusan" name="jurusan">
                                <?php foreach ($jurusan as $j): ?>
                                    <?php if($j==$mahasiswa['jurusan']): ?>
                                        <option value="<?php echo $j?>" selected><?php echo $j; ?></option>
                                    <?php else: ?>
                                        <option value="<?php echo $j?>"><?php echo $j; ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right ">Ubah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>