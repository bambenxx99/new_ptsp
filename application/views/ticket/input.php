<!-- Begin Page Content -->
<div class="col-lg-9">
    <?php
    if ($this->session->flashdata('message')) {
        echo $this->session->flashdata('message');
    }
    ?>
</div>

<!-- Begin fluid -->
<!-- End of Topbar -->

<!-- Begin Page Content -->
<div class="container-fluid">


    <form method="post" action="proses_input_ticket" id="form1">
        <!-- <script type="text/javascript">
      
            var theForm = document.forms['form1'];
            if (!theForm) {
                theForm = document.form1;
            }

            function __doPostBack(eventTarget, eventArgument) {
                if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
                    theForm.__EVENTTARGET.value = eventTarget;
                    theForm.__EVENTARGUMENT.value = eventArgument;
                    theForm.submit();
                }
            }
        
        </script> -->

        <div id="UpdatePanel1">
            <input type="hidden" name="ctl00$ContentPlaceHolder1$HiddenField1" id="ContentPlaceHolder1_HiddenField1" value="ee8a0343-c3f1-4522-99ed-3e56cf305b36">
            <div class="mb-2">
                <!-- <input name="sendTicket" type="submit" id="sendTicket" class="btn btn-primary btn-sm" value="Kirim "> -->
                <input type="submit" name="sendTicket" id="sendTicket" value=" Kirim " class="btn btn-primary btn-sm" disabled="" />
                &nbsp; <span>
                    <span id="ContentPlaceHolder1_lblPesan" class="text-danger"></span></span>
            </div>
            <div class="row">
                <div class="col-xl-8 col-md-8 mb-4">
                    <div class="card shadow mb-2">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Identitas Pemohon</h6>
                        </div>
                        <fieldset id="ContentPlaceHolder1_fData">
                            <div class="card-body">
                                <fieldset id="ContentPlaceHolder1_fData2">
                                    <div class="row mb-2">
                                        <div class="col-md-4 col-xl-4 font-weight-bold col-form-label ">
                                            Nama</div>
                                        <div class="col-md-6 col-xl-8 ">
                                            <input name="nama_pemohon" type="text" id="nama_pemohon" class="form-control form-control-sm">
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-md-4 col-xl-4 font-weight-bold col-form-label ">Jabatan Pemohon</div>
                                        <div class="col-md-6 col-xl-8 ">
                                            <input name="jabatan_pemohon" type="text" id="jabatan_pemohon" class="form-control form-control-sm">
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-md-4 col-xl-4 font-weight-bold col-form-label ">No. Handphone (Whatsapp)</div>
                                        <div class="col-md-6 col-xl-8 ">
                                            <input name="no_hp" type="text" id="no_hp" class="form-control form-control-sm">
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                        </fieldset>
                    </div>
                    <div class="card shadow mb-2">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Detail Tiket</h6>
                        </div>
                        <fieldset id="ContentPlaceHolder1_fData">
                            <div class="card-body">


                                <!-- <div class="row mb-2">
                                    <div class="col-md-12 col-xl-3 font-weight-bold col-form-label ">Layanan Permohonan
                                    </div>
                                    <div class="col-md-12 col-xl-9 ">
                                        <select name="layanan_pengajuan" id="layanan_pengajuan" class="form-control form-control-sm">
                                            <option selected="selected" value="">-- PILIH LAYANAN --</option>
                                            <?php $i = 1; ?>
                                            <?php foreach ($layanan as $layanan) : ?>
                                                <option value="<?= $layanan['id_layanan']; ?>"><?= $layanan['jenis_layanan']; ?></option>
                                                <?php $i++; ?>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div> -->

                                <div class="row mb-2">
                                    <div class="col-md-12 col-xl-3 font-weight-bold col-form-label ">Jenis Layanan</div>
                                    <div class="col-md-6 col-xl-9 ">
                                        <input name="jenis_layanan" type="text" id="jenis_layanan" class="form-control form-control-sm">
                                        <input name="id_layanan" type="hidden" id="id_layanan" class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-12 col-xl-3 font-weight-bold col-form-label ">Unit Penyelenggara</div>
                                    <div class="col-md-6 col-xl-9 ">
                                        <input name="unit_penyelenggara" type="text" id="unit_penyelenggara" readonly class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-12 col-xl-3 font-weight-bold col-form-label ">Detail Ticket</div>
                                    <div class="col-md-6 col-xl-9 ">
                                        <textarea name="detail_ticket" class=" form-control" id="detail_ticket" rows="3"></textarea>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 mb-4">
                    <div class="row">
                        <div class="col-md-12 col-xl-12 ">
                            <div class="card shadow mb-2">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Info Ticket</h6>
                                </div>
                                <div class="card-body">
                                    <fieldset id="ContentPlaceHolder1_fData2">
                                        <div class="row mb-2">
                                            <div class="col-md-4 col-xl-4 font-weight-bold col-form-label ">No.
                                                Ticket</div>
                                            <div class="col-md-6 col-xl-8 ">
                                                <input name="no_ticket" type="text" id="no_ticket" placeholder='<?= $unix; ?>' value='<?= $unix; ?>' readonly class="form-control form-control-sm">
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-md-4 col-xl-4 font-weight-bold col-form-label ">Tanggal</div>
                                            <div class="col-md-6 col-xl-8 ">
                                                <input name="tgl_pengajuan" type="text" placeholder="<?= $tanggal; ?>" readonly id="tgl_pengajuan" class="form-control form-control-sm">
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-md-4 col-xl-4 font-weight-bold col-form-label ">Jangka</div>
                                            <div class="col-md-6 col-xl-3 ">
                                                <input name="lama_waktu" type="text" id="lama_waktu" readonly class="form-control form-control-sm">
                                            </div>
                                            <label for="lama_waktu" class=" col-form-label">Hari</label>
                                        </div>
                                    </fieldset>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 col-xl-12 ">
                            <div class="card shadow mb-2">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Syarat-Syarat</h6>
                                </div>
                                <div class="card-body">
                                    <fieldset id="ContentPlaceHolder1_Fieldset1">
                                        <div class="row mb-2">
                                            <div class="custom-control">
                                                <input type="checkbox" name="validasiSyarat" id="validasiSyarat">
                                                <label for="validasiSyarat">*Semua Syarat sudah terpenuhi.</label>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <div class="modal fade" id="myModalTidakLengkap" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog " role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myModalHead">Persyaratan Tidak Lengkap</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <label id="label2" class="pb-4">Dokumen persyaratan belum lengkap</label>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class=" btn-secondary " data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="modal fade" id="myModalSuccess" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog " role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Success</h5>
                        <button type="button" class="close " data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <label class="pb-4">Simpan Sukses </label>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" name="ctl00$ContentPlaceHolder1$btnSukses" value="OK" id="ContentPlaceHolder1_btnSukses" class="btn-secondary btn-sm">
                    </div>
                </div>
            </div>
        </div> -->

        <!-- <div class="modal fade" id="modalConfirm" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog " role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">HAPUS</h5>
                        <button type="button" class="close " data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <label class="pb-4">Yakin ingin menghapus? </label>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" name="ctl00$ContentPlaceHolder1$btnYa" value="Ya" id="ContentPlaceHolder1_btnYa">
                        <button type="button" class="btn-secondary btn-sm" onclick="window.location.href='/main'">Tidak</button>
                    </div>
                </div>
            </div>
        </div> -->

        <!-- <div class="modal fade" id="Ajukan" tabindex="-1" role="dialog" aria-labelledby="UpdateData" aria-hidden="true">
            <div class="modal-dialog " role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="UpdateData1">Pengajuan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Ajukan
                        <span id="ContentPlaceHolder1_lblNamaPendamping">Fulan bin Fulan</span>
                        sebagai Pendamping?
                    </div>
                    <div class="modal-footer">
                        <input type="submit" name="ctl00$ContentPlaceHolder1$btbYa" value="Ya" id="ContentPlaceHolder1_btbYa" class="btn btn-primary btn-sm">
                        <input type="submit" name="ctl00$ContentPlaceHolder1$btnBatal2" value="Tidak" id="ContentPlaceHolder1_btnBatal2" class="btn btn-secondary btn-sm" data-dismiss="modal">
                    </div>
                </div>
            </div>
        </div> -->

    </form>
    <!-- Page Heading -->

</div>
<!-- /.container-fluid -->
<!-- End Fluid -->


<?php
$this->load->view('templates/footer');
$this->session->set_flashdata('message', null);
?>


<script type="text/javascript" src="<?= base_url(); ?>assets/js/jquery-3.3.1.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>assets/js/bootstrap.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>assets/js/jquery-ui.js"></script>


<script type="text/javascript">
    $(document).ready(function() {

        $('#jenis_layanan').autocomplete({
            source: "<?php echo site_url('Ticket/get_autocomplete'); ?>",

            select: function(event, ui) {
                $('[name="jenis_layanan"]').val(ui.item.label);
                $('[name="id_layanan"]').val(ui.item.id);
                $('[name="unit_penyelenggara"]').val(ui.item.bidang);
                $('[name="lama_waktu"]').val(ui.item.waktu);
                //api.jquery.com/jquery.get
            }
        });

    });

    $("input[type=checkbox]").on("change", function(evt) {
        var cekList = $('input[id=validasiSyarat]:checked');
        if (cekList.length == 0) {
            $("input[name=sendTicket]").prop("disabled", true);
        } else {
            $("input[name=sendTicket]").prop("disabled", false);
        }
    });






























    // $(function() {
    // $('#tanggalMulai').datetimepicker({
    // format: 'Y/M/D'

    // });
    // });
    // $('#tanggalSelesai').datetimepicker({
    // useCurrent: false,
    // format: 'Y/M/D'
    // });

    // $('#tanggalMulai').on("dp.change", function(e) {
    // $('#tanggalSelesai').data("DateTimePicker").minDate(e.date);
    // CalcDiff()
    // });

    // $('#tanggalSelesai').on("dp.change", function(e) {
    // $('#tanggalMulai').data("DateTimePicker").maxDate(e.date);
    // CalcDiff()
    // });

    // function CalcDiff() {
    // var a = $('#tanggalMulai').data("DateTimePicker").date();
    // var b = $('#tanggalSelesai').data("DateTimePicker").date();
    // var timeDiff = 0
    // if (b) {
    // timeDiff = (b - a) / 1000;
    // }
    // $('#JumlahHari').val(Math.floor(timeDiff / (86400) + 1))
    // }
    // $(document).ready(function() {
    // $("#jenis_cuti").on('change', function() {
    // if (this.value == "Tahunan") {
    // $("#Tahunan").show(500);
    // } else {
    // $("#Tahunan").hide(500);
    // }
    // });
    // });
</script>