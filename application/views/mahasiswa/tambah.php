<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form tambah data mahasiswa
                </div>

                <form action="" method="post">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control" id="nama">
                        <small class="form-text text-danger"><?= form_error('nama') ?></small>
                    </div>
                    <div class="form-group">
                        <label for="nrp">Nrp</label>
                        <input type="text" class="form-control" id="nrp" name="nrp">
                        <small class="form-text text-danger"><?= form_error('nrp') ?></small>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" name="email">
                        <small class="form-text text-danger"><?= form_error('email') ?></small>
                    </div>
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <select name="jurusan" id="jurusan" class="form-control">
                            <option value="teknik informatika">Teknik Informatika</option>
                            <option value="teknik mesin">Teknik Mesin</option>
                            <option value="teknik industri">Teknik Industri</option>
                            <option value="teknik informatika">Teknik Informatika</option>
                            <option value="teknik sipil">Teknik Sipil</option>
                            <option value="teknik elektro">Teknik Elektro</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary float-right" name="tambah ">Tambah Data</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>