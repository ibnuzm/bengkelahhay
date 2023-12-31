            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="card h4 mb-4 border-bottom-success font-weight-bold text-success">
                    <div class="card-body">
                        <?= $title; ?>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-7">
                        <form action="" method="post">
                            <div class="card mb-4">
                                <div class="card-body text-dark font-weight-bold">
                                    <div class="form-group">
                                        <label>ID Pegawai</label>
                                        <div class="col-sm">
                                            <div class="col-sm">
                                                <input type="text" class="form-control" id="id_pegawai" name="id_pegawai" value="<?= $ubah_pegawai['id_pegawai']; ?>" readonly>
                                                <?= form_error('id_pegawai', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Pegawai</label>
                                        <div class="col-sm">
                                            <input type="text" class="form-control text-capitalize" id="nm_pegawai" name="nm_pegawai" maxlength="30" value="<?= $ubah_pegawai['nm_pegawai']; ?>">
                                            <?= form_error('nm_pegawai', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>No Telepon Pegawai</label>
                                        <div class="col-sm">
                                            <input type="text" class="form-control" id="noTlp" name="noTlp" maxlength="15" value="<?= $ubah_pegawai['noTlp_pegawai']; ?>">
                                            <?= form_error('noTlp', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Jabatan</label>
                                        <div class="col-sm">
                                            <select class="form-control" id="jabatan" name="jabatan">
                                                <?php foreach ($jabatan as $j) : ?>
                                                    <?php if ($j == $ubah_pegawai['jabatan']) : ?>
                                                        <option value="<?= $j; ?>" selected><?= $j; ?></option>
                                                    <?php else : ?>
                                                        <option value="<?= $j; ?>"><?= $j; ?></option>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                            </select>
                                            <?= form_error('jabatan', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>

                                    <a href="<?= base_url('ManajemenPegawai/pegawai'); ?>" title="Kembali ke halaman Pegawai" class="btn btn-sm btn-secondary font-weight-bold mt-3">Kembali</a>
                                    <button type="submit" class="btn btn-sm btn-success font-weight-bold ml-2 mt-3">Simpan</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->