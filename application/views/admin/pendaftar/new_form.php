<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">

    <?php $this->load->view("admin/_partials/navbar.php") ?>
    <div id="wrapper">

        <?php $this->load->view("admin/_partials/sidebar.php") ?>

        <div id="content-wrapper">

            <div class="container-fluid">

                <?php $this->load->view("admin/_partials/breadcrumb.php") ?>

                <?php if ($this->session->flashdata('success')) : ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $this->session->flashdata('success'); ?>
                    </div>
                <?php endif; ?>

                <div class="card mb-3">
                    <div class="card-header">
                        <a href="<?php echo site_url('admin/pendaftar/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
                    </div>
                    <div class="card-body">

                        <form action="<?php echo site_url('admin/pendaftar/add') ?>" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="nama">Nama*</label>
                                <input class="form-control <?php echo form_error('nama') ? 'is-invalid' : '' ?>" type="text" name="nama" placeholder="Nama Pendaftar" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('nama') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="alamat">alamat*</label>
                                <textarea class="form-control <?php echo form_error('alamat') ? 'is-invalid' : '' ?>" name="alamat" placeholder="Alamat Pemudik"></textarea>
                                <div class="invalid-feedback">
                                    <?php echo form_error('alamat') ?>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="telp">Telp</label>
                                <input class="form-control-file <?php echo form_error('telp') ? 'is-invalid' : '' ?>" name="telp" placeholder="Telp Pemudik" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('telp') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="tujuan">Tujuan*</label>
                                <input class="form-control <?php echo form_error('tujuan') ? 'is-invalid' : '' ?>" name="tujuan" placeholder="Tujuan Pemudik..." />
                                <div class="invalid-feedback">
                                    <?php echo form_error('tujuan') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="jumlah">Jumlah Pemudik*</label>
                                <input class="form-control-file <?php echo form_error('jumlah') ? 'is-invalid' : '' ?>" type="number" name="jumlah" min="0" placeholder="Jumlah Pwmudik" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('jumlah') ?>
                                </div>
                            </div>

                            <input class="btn btn-success" type="submit" name="btn" value="Save" />
                        </form>

                    </div>

                    <div class="card-footer small text-muted">
                        * required fields
                    </div>


                </div>
                <!-- /.container-fluid -->

                <!-- Sticky Footer -->
                <?php $this->load->view("admin/_partials/footer.php") ?>

            </div>
            <!-- /.content-wrapper -->

        </div>
        <!-- /#wrapper -->


        <?php $this->load->view("admin/_partials/scrolltop.php") ?>

        <?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>