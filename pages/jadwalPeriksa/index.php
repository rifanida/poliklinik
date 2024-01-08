<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Jadwal Periksa</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php?page=home">Home</a></li>
                    <li class="breadcrumb-item active">Jadwal Periksa</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Daftar Jadwal Periksa</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-sm btn-primary float-right mx-1 my-1"
                                data-toggle="modal" data-target="#addModal">
                                Tambah Jadwal Periksa
                            </button>
                            <button type="button" class="btn btn-sm btn-secondary float-right mx-1 my-1"
                                data-toggle="modal" data-target="#cekJadwal">
                                Lihat Jadwal
                            </button>
                            <!-- Modal Tambah Data jadwal periksa -->
                            <div class="modal fade" id="addModal" tabindex="-1" role="dialog"
                                aria-labelledby="addModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="addModalLabel">Tambah Jadwal Periksa</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <!-- Form tambah data jadwal disini -->
                                            <form action="pages/jadwalPeriksa/tambahJadwal.php" method="post">
                                                <div class="form-group">
                                                    <label for="hari">Hari</label>
                                                    <select class="form-control" id="hari" name="hari">
                                                        <?php
                                                        $hariArray = ['Senin','Selasa','Rabu','Kamis','Jumat','Sabtu'];
                                                        foreach($hariArray as $hari){
                                                        ?>
                                                            <option value="<?php echo $hari ?>">
                                                                <?php echo $hari ?>
                                                            </option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="jamMulai">Jam Mulai</label>
                                                    <input type="time" class="form-control" id="jamMulai" name="jamMulai" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="jamSelesai">Jam Selesai</label>
                                                    <input type="time" class="form-control" id="jamSelesai" name="jamSelesai" required>
                                                </div>
                                                <!-- Tambah status -->
                                                <div class="form-group">
                                                    <label for="status">Status</label>
                                                    <select class="form-control" id="status" name="status">
                                                        <option value="Y">Aktif</option>
                                                        <option value="N">Tidak Aktif</option>
                                                    </select>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Tambah</button>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Modal lihat cek jadwal -->
                            <div class="modal fade" id="cekJadwal" tabindex="-1" role="dialog"
                                aria-labelledby="addModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-xl" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <?php
                                                require 'config/koneksi.php';
                                                $cekJadwal = mysqli_query($mysqli,"SELECT * FROM dokter INNER JOIN poli ON dokter.id_poli = poli.id WHERE poli.id = '$id_poli'");
                                                $getData = mysqli_fetch_assoc($cekJadwal);
                                            ?>
                                            <h5 class="modal-title" id="addModalLabel">Jadwal Poli
                                                <?php echo $getData['nama_poli'] ?></h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                    
                                    <!-- form lihat data jadwal -->     
                                    <div class="card-body table-responsive p-0">
                                        <table class="table table-hover text-nowrap">
                                            <thead>
                                                <tr>
                                                    <td>No</td>
                                                    <td>Nama Dokter</td>
                                                    <td>Hari</td>
                                                    <td>Jam Mulai</td>
                                                    <td>Jam Selesai</td>
                                                    <td>Status</td> <!-- Tambah status -->
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $nomor = 1;
                                                require 'config/koneksi.php';
                                                // mengambil data kolom spesifik dari tabel 'jadwal_periksa', 'dokter', dan 'poli' dan hanya memilih baris yang idnya cocok
                                                $ambilDataJadwal = "SELECT jadwal_periksa.id, jadwal_periksa.id_dokter, jadwal_periksa.hari, jadwal_periksa.jam_mulai, jadwal_periksa.jam_selesai, jadwal_periksa.status, dokter.id AS idDokter, dokter.nama, dokter.alamat, dokter.no_hp, dokter.id_poli, poli.id AS idPoli, poli.nama_poli, poli.keterangan FROM jadwal_periksa INNER JOIN dokter ON jadwal_periksa.id_dokter = dokter.id INNER JOIN poli ON dokter.id_poli = poli.id WHERE id_poli = '$id_poli'";

                                                $resultss = mysqli_query($mysqli, $ambilDataJadwal);
                                                while ($a = mysqli_fetch_assoc($resultss)) {
                                                ?>
                                                    <tr>
                                                        <td><?php echo $nomor++; ?></td>
                                                        <td><?php echo $a['nama'] ?></td>
                                                        <td><?php echo $a['hari'] ?></td>
                                                        <td><?php echo $a['jam_mulai'] ?></td>
                                                        <td><?php echo $a['jam_selesai'] ?></td>
                                                        <td><?php echo ($a['status'] == 'Y') ? 'Aktif' : 'Tidak Aktif'; ?></td> <!-- Tambah status -->
                                                    </tr>
                                                <?php } ?>
                                            </tbody>

                                        </table>
                                    </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->

                    <!-- Tampilan tabel Jadwal Periksa -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th class="col-1">No</th>
                                    <th>Nama Dokter</th>
                                    <th>Hari</th>
                                    <th>Jam Mulai</th>
                                    <th>Jam Selesai</th>
                                    <th>Status</th> <!-- Tambah kolom status -->
                                    <th class="col-1">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>

                            <?php
                            $no = 1;
                            require 'config/koneksi.php';
                            
                            // mendapatkan data jadwal periksa, dokter yang bertugas, dan poliklinik tempat dokter tersebut bekerja berdasarkan id poliklinik dan id dokter.
                            $query = "SELECT jadwal_periksa.id, jadwal_periksa.id_dokter, jadwal_periksa.hari, jadwal_periksa.jam_mulai, jadwal_periksa.jam_selesai, jadwal_periksa.status, dokter.id AS idDokter, dokter.nama, dokter.alamat, dokter.no_hp, dokter.id_poli, poli.id AS idPoli, poli.nama_poli, poli.keterangan
                            FROM jadwal_periksa
                            INNER JOIN dokter ON jadwal_periksa.id_dokter = dokter.id
                            INNER JOIN poli ON dokter.id_poli = poli.id
                            WHERE id_poli = '$id_poli' AND dokter.id = '$id_dokter';";

                            $result = mysqli_query($mysqli, $query);

                            while ($data = mysqli_fetch_assoc($result)) {
                               
                            ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $data['nama'] ?></td>
                                    <td><?php echo $data['hari'] ?></td>
                                    <td><?php echo $data['jam_mulai'] ?></td>
                                    <td><?php echo $data['jam_selesai'] ?></td>
                                    <td class="<?php echo ($data['status'] == 'N') ? 'text-danger' : 'text-success'; ?>">
                                        <?php echo ($data['status'] == 'Y') ? 'Aktif' : 'Tidak Aktif'; ?>
                                    </td>
                                    
                                    <!-- Edit status -->
                                    <td>
                                    <?php
                                        require 'config/koneksi.php';
                                        $cekJadwalPeriksa = "SELECT * FROM daftar_poli INNER JOIN jadwal_periksa ON daftar_poli.id_jadwal = jadwal_periksa.id WHERE jadwal_periksa.id_dokter = '$id_dokter' AND daftar_poli.status_periksa = '0'";
                                        $queryCekJadwal = mysqli_query($mysqli, $cekJadwalPeriksa);
                                        if (mysqli_num_rows($queryCekJadwal) > 0) {
                                        ?>
                                        <button type='button' class='btn btn-sm btn-warning edit-btn'
                                            data-toggle="modal" data-target="#editModal<?php echo $data['id'] ?>"
                                            disabled>Edit</button>
                                        <?php } else { ?>
                                        <button type='button' class='btn btn-sm btn-warning edit-btn'
                                            data-toggle="modal" data-target="#editModal<?php echo $data['id'] ?>"
                                            <?php echo $data['id_dokter'] == $id_dokter ? '' : 'disabled'?>>Edit</button>
                                        <?php } ?>
                                    </td>
                             
                                    <div class="modal fade" id="editModal<?php echo $data['id'] ?>" tabindex="-1"
                                        role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="addModalLabel">Edit Data Jadwal</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>

                                                <div class="modal-body">                                                
                                                <form action="pages/jadwalPeriksa/updateJadwal.php" method="post">
                                                    <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $data['id'] ?>" required>
                                                    
                                                    <div class="form-group">
                                                        <label for="status">Status</label>
                                                        <select class="form-control" id="status" name="status">
                                                            <option value="Y" <?php echo ($data['status'] == 'Y') ? 'selected' : ''; ?>>Aktif</option>
                                                            <option value="N" <?php echo ($data['status'] == 'N') ? 'selected' : ''; ?>>Tidak Aktif</option>
                                                        </select>
                                                    </div>

                                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                                </form>
                                            </div>

                                            </div>
                                        </div>
                                    </div>
                                
                                </tr>
                                <?php } ?>

                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->