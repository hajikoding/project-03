<div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Data Mahasiswa</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                                            <li class="breadcrumb-item active">Data Mahasiswa</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <form action="<?php echo base_url ('Mahasiswa/simpan');?>"method="post">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <label>Nim</label>
                                                <input type="text" name="nim" class="form-control">
                                                <label>Nama</label>
                                                <input type="text" name="nama" class="form-control">
                                                <label>Tanggal Lahir</label>
                                                <input type="date" name="tgl_lahir" class="form-control">
                                            </div>
                                            <div class="col-lg-6">
                                            <label>Jenis Kelamin</label>
                                            <div class="form-group">
                                                <input type="radio" name="jenis_kelamin" value="L">
                                                <span>Laki-Laki</span>
                                                <input type="radio" name="jenis_kelamin" value="P">
                                                <span>Perempuan</span>
                                            </div>
                                            <label>Jurusan</label>
                                            <select name="jurusan" class="form-control">
                                                <option>Sistem Informasi</option>
                                                <option>Sistem Komputer</option>
                                                <option>Teknik Informatika</option>
                                                <option>Teknik Mesin</option>
                                            </select>
                                            <label>Alamat</label>
                                            <textarea name="alamat" class="form-control"></textarea>
                                            </div>
                                            <footer class="py-4">
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                                <a class="btn btn-danger" href="<?php echo base_url ('mahasiswa'); ?>">Kembali</a>
                                            </footer>
                                        </div>
                                    </form>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
</div>
</div>
