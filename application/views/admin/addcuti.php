<!-- Begin Page Content -->
<div class="col-lg-9">
    <?php
    if ($this->session->flashdata('message')) {
        echo $this->session->flashdata('message');
    }
    ?>
</div>
<div class="container-fluid">
    <div class="col-lg-9">
        <!-- <?= $this->session->flashdata('message'); ?> -->
        <?= $this->session->tempdata('message'); ?>
    </div>
    <div class="card shadow">
        <div class="card-header">
            <h3>
                <center>Tambah Data Cuti Pegawai</center>
            </h3>
        </div>
        <div class="card-header">
            <form class="form" method="post" action="<?= base_url('Cuti/addcuti'); ?>">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control" id="nipuser" name="nipuser" placeholder="Nomor NIP Pegawai">
                </div>
                <br>
                <div class="col-sm-4">
                    <button type="submit" class="btn btn-primary btn-block">
                        Cari Data
                    </button>
                </div>
            </form>
        </div>
        <div class="card-body">
            <?= form_open_multipart('Cuti/addcuti'); ?>
            <div class="mb-3 row row">
                <label for="Namapegawai" class="col-sm-2 col-form-label">Nama</label>
                <div class="form-group col-sm-6">
                    <input type="text" class="form-control" id="name" name="name" readonly placeholder="Full Name" value='<?= isset($datafind["name"]) ? $datafind['name'] : set_value('name'); ?>'>
                </div>
            </div>
            <div class="mb-3 row row">
                <label for="nip" class="col-sm-2 col-form-label">NIP</label>
                <div class="form-group col-sm-6">
                    <input type="text" class="form-control" id="nip" name="nip" readonly placeholder="Nomor NIP" value='<?= isset($datafind['nip']) ? $datafind['nip'] : set_value('nip'); ?>'>
                </div>
            </div>


            <!-- ============================================================================================== -->

            <div class="mb-3 row row">
                <label for="jenis_cuti" class="col-sm-2 col-form-label">Jenis Cuti</label>
                <div class="form-group col-sm-6">
                    <select class="form-control col-sm-5" id="jenis_cuti" name="jenis_cuti" value=<?= set_value('jenis_cuti'); ?>>
                        <option value="">Pilih Jenis Cuti</option>
                        <option value="Tahunan">Cuti Tahunan</option>
                        <option value="Besar">Cuti Besar</option>
                        <option value="Sakit">Cuti Sakit</option>
                        <option value="Melahirkan">Cuti Melahirkan</option>
                        <option value="Alasan Penting">Cuti Alasan Penting</option>
                        <option value="Non Tanggungan">Cuti di Luar Tanggungan Negara</option>
                    </select>
                </div>
            </div>
            <div class="mb-3 row row">
                <label for="tahunCuti" class="col-sm-2 col-form-label">Tahun Cuti</label>
                <div class="form-group col-sm-6">
                    <select class="form-control col-sm-5" id="tahunCuti" name="tahunCuti">
                        <option selected="true"><?= date('Y'); ?></option>
                        <option><?= date('Y') - 1; ?></option>
                    </select>
                </div>

            </div>

            <!-- ============================================================================================== -->


            <!-- <div class="mb-3 row row">
                <label for="tanggalMulai" class="col-sm-2 col-form-label">Tanggal Mulai</label>
                <div class="form-group col-3">
                    <input type="text" class="form-control datepicker" id="tanggalMulai" name="tanggalMulai" value=<?= set_value('tanggalMulai'); ?> />
                </div>

            </div>

            <div class="mb-3 row row">
                <label for="tanggalSelesai" class="col-sm-2 col-form-label">Tanggal Akhir</label>
                <div class="form-group col-3">
                    <input type="text" class="form-control" id='tanggalSelesai' name="tanggalSelesai" value=<?= set_value('tanggalSelesai'); ?> />
                </div>
            </div> -->
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Tanggal Mulai Cuti</label>
                <div class="col-sm-2">
                    <input type="date" class="form-control" name="tanggalMulai" required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Tanggal Selesai Cuti</label>
                <div class="col-sm-2">
                    <input type="date" class="form-control" name="tanggalSelesai" required>
                </div>
            </div>


            <div class="mb-3 row row">
                <label for="JumlahHari" class="col-sm-2 col-form-label">Jumlah Hari</label>
                <div class="form-group col-1">
                    <input type="text" class="form-control" id="JumlahHari" name="JumlahHari">
                </div>
                <label for="JumlahHari" class="col-mr-2 col-form-label">Hari</label>
            </div>

            <div class="row mb-3">
                <label for="alasanCuti" class="col-sm-2 col-form-label">Alasan</label>
                <div class="form-group col-sm-6">
                    <input type="text" class="form-control" id="alasanCuti" name="alasanCuti" value=<?= set_value('alasanCuti'); ?>>
                </div>
            </div>

            <div class="row row mb-3">
                <label for="statusCuti" class="col-sm-2 col-form-label">Status</label>
                <div class="form-group col-sm-6">
                    <select class="form-control col-sm-5" id="statusCuti" name="statusCuti">
                        <option>Pilih Status</option>
                        <option value="1">Di Setujui</option>
                        <option value="0">Di Tolak</option>
                    </select>
                </div>
            </div>

            <div class="row mb-3 row row">
                <label for="file" class="col-sm-2 col-form-label">File PDF</label>
                <div class="form-group col-sm-6">
                    <div class="row">
                        <div class="col-sm-9">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="fileupload" name="fileupload">
                                <label class="custom-file-label" for="fileupload">Choose file</label>
                                <?= form_error('fileupload', '<small class=text-danger pl-9>', '</small>'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">
                    Tambah Data Cuti
                </button>
            </div>
            </form>
        </div>
    </div>

</div>
<?php
$this->load->view('templates/footer');
$this->session->set_flashdata('message', null);
?>


<script type="text/javascript" src="<?= base_url(); ?>assets/js/moment.min.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>assets/js/bootstrap-datetimepicker.min.js"></script>

<script type="text/javascript">
    $(function() {
        $('#tanggalMulai').datetimepicker({
            format: 'Y/M/D'

        });
    });
    $('#tanggalSelesai').datetimepicker({
        useCurrent: false,
        format: 'Y/M/D'
    });

    // $('#tanggalMulai').on("dp.change", function(e) {
    //     $('#tanggalSelesai').data("DateTimePicker").minDate(e.date);
    //     CalcDiff()
    // });

    // $('#tanggalSelesai').on("dp.change", function(e) {
    //     $('#tanggalMulai').data("DateTimePicker").maxDate(e.date);
    //     CalcDiff()
    // });

    // function CalcDiff() {
    //     var a = $('#tanggalMulai').data("DateTimePicker").date();
    //     var b = $('#tanggalSelesai').data("DateTimePicker").date();
    //     var timeDiff = 0
    //     if (b) {
    //         timeDiff = (b - a) / 1000;
    //     }
    //     $('#JumlahHari').val(Math.floor(timeDiff / (86400) + 1))
    // }
    // $(document).ready(function() {
    //     $("#jenis_cuti").on('change', function() {
    //         if (this.value == "Tahunan") {
    //             $("#Tahunan").show(500);
    //         } else {
    //             $("#Tahunan").hide(500);
    //         }
    //     });
    // });
</script>