<div class="pt-4">
    <div class="card mb-1 pt-4">
        <div class="card-header bg-dark text-white">
            Data Pendaftaraan
        </div>
        <div class="card-body"> 
        <?php if ($this->session->flashdata('pesanVerifikasi')): ?>
            <div class="alert alert-success">
                <?php echo $this->session->flashdata('pesanVerifikasi'); ?>
            </div>
        <?php endif; ?>

        <?php if ($this->session->flashdata('error')): ?>
            <div class="alert alert-danger">
                <?php echo $this->session->flashdata('error'); ?>
            </div>
        <?php endif; ?>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NIK</th>
                        <th>Nama Lengkap</th>
                        <th>Alamat</th>
                        <th>Telepon</th>
                        <th>Email</th>
                        <th>Jenis Akun</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    if (empty($datalist)) {
                        echo "<tr><td colspan='8' class='text-center'>Tidak ada data</td></tr>";  
                    } else {
                        $start = 0;
                        $no = $start + 1;
                        foreach ($datalist as $data):
                ?>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $data->nik; ?></td>
                        <td><?php echo $data->namaLengkap; ?></td>
                        <td><?php echo $data->alamat; ?></td>
                        <td><?php echo $data->telp; ?></td>
                        <td><?php echo $data->email; ?></td>
                        <td><?php echo $data->jenisAkun; ?></td>
                        <td width="200">
                        <div class="d-flex">
                            <!-- Tombol Terima -->
                            <form method="POST" action="<?php echo base_url('verifikasi/terimaAktivasi'); ?>" style="display: inline-block; margin-right: 5px;" onsubmit="return confirm('Verifikasi akun ini?');">
                                <input type="hidden" name="kodeDaftar" value="<?php echo $data->kodeDaftar; ?>">
                                <button type="submit" class="btn btn-success btn-sm w-100">Terima</button>
                            </form>

                            <!-- Tombol Tolak -->
                            <a href="<?php echo site_url('verifikasi/tolak/'.$data->kodeDaftar); ?>" class="btn btn-danger btn-sm w-100">Tolak</a>
                        </div>
                    </td>

                    </tr>
                <?php
                        $no++;
                        endforeach;
                    }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
