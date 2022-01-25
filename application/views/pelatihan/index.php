<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Biodata</h1>

    <?php if ($this->session->flashdata('flash')) : ?>
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Pemasukan dana <strong>Berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    <?php endif; ?>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Biodata Viewer</h6>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                    <thead>

                    </thead>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="tgl_masuk">Nama Kursus</label>
                                <input type="text" name="nama_kursus" class="form-control" id="nama_kursus" value="<?= @$pelatihan['nama_kursus'] ?>">

                            </div>
                            <div class="form-group">
                                <label for="bidang">Sertifikat</label>
                                <input type="text" name="sertifikat" class="form-control" id="sertifikat" value="<?= @$pelatihan['sertifikat'] ?>">

                            </div>
                            <div class="form-group">
                                <label for="jumlah">Tahun</label>
                                <input type="text" name="tahun" class="form-control" id="tahun" value="<?= @$pelatihan['tahun'] ?>">

                            </div>

                            <button type="submit" class="btn btn-primary">Tambah Data</button>
                        </form>

                    </div>
                    <tfoot>

                    </tfoot>
                </table>
            </div>

        </div>
    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Main Content -->


</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->