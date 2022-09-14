<div class="col-lg-9">
    <?php
    if ($this->session->flashdata('message')) {
        echo $this->session->flashdata('message');
    }
    ?>
</div>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Input Layanan</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="post" action="addlayanan">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nama_layanan">Nama Layanan</label>
                                <input type="text" class="form-control" name="nama_layanan" id="nama_layanan" placeholder="Nama Layanan">
                            </div>
                            <div class="form-group">
                                <label for="bidang">Bidang</label>
                                <select class="form-control" name="bidang" id="bidang" required>
                                    <option value="1">Kantor Kementerian Agama</option>
                                    <option value="2">Sekertariat Keuangan</option>
                                    <option value="3">Sekertariat Umum</option>
                                    <option value="4">Sekertariat Kepegawaian</option>
                                    <option value="5">Penyelenggara Haji dan Umroh</option>
                                    <option value="6">Bimas Islam</option>
                                    <option value="7">PAKIS</option>
                                    <option value="8">Pendidikan Madrasah</option>
                                    <option value="9">Penyelenggara Zakat dan Wakaf</option>
                                    <option value="10">Penyelenggara Katolik</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="lama_waktu">Lama Waktu</label>
                                <input type="text" class="form-control" name="lama_waktu" id="lama_waktu" placeholder="Lama Waktu Dalam Hari">
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Tambah Layanan</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Input Syarat</h3>
                    </div>
                    <form method="post" action="addSyarat">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="jenis_layanan">Jenis Layanan</label>
                                <input name="jenis_layanan" type="text" id="jenis_layanan" placeholder="Jenis Layanan" class="form-control">
                                <input name="id_layanan" type="hidden" id="id_layanan" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="syarat_layanan">Syarat Layanan</label>
                                <input type="text" class="form-control" id="syarat_layanan" name="syarat_layanan" placeholder="Syarat Layanan">
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Tambah Syarat</button>
                        </div>
                    </form>
                </div>
            </div>
            <!--/.col (right) -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>

<script type="text/javascript" src="<?= base_url(); ?>assets/js/jquery-3.3.1.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>assets/js/bootstrap.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>assets/js/jquery-ui.js"></script>
<script>
    $(document).ready(function() {
        $('#jenis_layanan').autocomplete({
            source: "<?php echo site_url('Ticket/get_autocomplete'); ?>",

            select: function(event, ui) {
                $('[name="jenis_layanan"]').val(ui.item.label);
                $('[name="id_layanan"]').val(ui.item.id);
            }
        });
    });
</script>