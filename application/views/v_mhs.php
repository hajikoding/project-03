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
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Data Mahasiswa</h4>
                        <a href="<?php echo base_url ('Mahasiswa/add'); ?>" class="btn
                        btn-info">Add Data</a>

                        <table id="tabel_mhs" class="table table-bordered dt-responsive  nowrap w-100">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Nim</th>
                                <th>Nama</th>
                                <th>Tanggal Lahir</th>
                                <th>Jenis Kelamin </th>
                                <th>Jurusan</th>
                                <th>Alamat</th>
                                <th>Action</th>
                            </tr>
                            </thead>


                            <tbody>
                                <?php $no = 1;
                                foreach ($dt as $row): ?>
                                <tr>
                                    <td><?= $no; ?></td>
                                    <td><?php echo $row->nim; ?></td>
                                    <td><?php echo $row->nama; ?></td>
                                    <td><?php echo $row->tgl_lahir; ?></td>
                                    <td><?php echo $row->jenis_kelamin; ?></td>
                                    <td><?php echo $row->jurusan; ?></td>
                                    <td><?php echo $row->alamat; ?></td>
                                    <td>
                                        <a href="<?php echo base_url('Mahasiswa/edit/' . $row->nim); ?>"
                                            class="btn btn-warning">Edit</a>
                                            <a href="<?php echo base_url('Mahasiswa/delete/' . $row->nim); ?>" class="btn btn-warning" data-toggle="modal" data-target="#deleteModal" data-nim="<?php echo $row->nim; ?>">Delete</a>

                                        <!-- <a href=""
                                            class="btn btn-warning">Delete</a>  -->
                                    </td>
                                </tr>
                                <?php $no++;
                                endforeach ?>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div>
</div>

<!-- Modal untuk Konfirmasi Hapus -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteModalLabel">Konfirmasi Hapus</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Apakah Anda yakin ingin menghapus data ini?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <a href="<?php echo base_url('Mahasiswa/delete/' . $row->nim); ?>" class="btn btn-danger" id="confirmDeleteBtn">Hapus</a>
      </div>
    </div>
  </div>
</div>

<script>
    $(document).ready(function() {
        $('#tabel_mhs').DataTable();
    })
</script>
<script>
  $('#deleteModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget); // Tombol yang memicu modal
    var nim = button.data('nim'); // Ambil data-nim dari tombol
    var url = "<?php echo base_url('Mahasiswa/delete/'); ?>" + nim; // Buat URL delete
    
    // Masukkan URL ke tombol konfirmasi hapus
    var confirmDeleteBtn = $(this).find('#confirmDeleteBtn');
    confirmDeleteBtn.attr('href', url);
  });
</script>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
