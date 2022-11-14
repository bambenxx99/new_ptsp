<!-- Begin Page Content -->
<div class="col-lg-9">
    <?php
    if ($this->session->flashdata('message')) {
        echo $this->session->flashdata('message');
    }
    ?>
</div>

<div class="container-fluid">
    <form method="post" action="<?= base_url("ticket/proses_edit_ticket") ?>">
        <?php foreach ($dataedit as $all_data) : ?>
            <div id="UpdatePanel1">
                <div class="mb-2">
                    <input type="submit" name="editTicket" id="editTicket" value=" Simpan " class="btn btn-primary btn-sm" />
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
                                                <input name="nama_pemohon" type="text" value="<?= $all_data['nama']; ?>" id="nama_pemohon" class="form-control form-control-sm">
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-md-4 col-xl-4 font-weight-bold col-form-label ">Jabatan Pemohon</div>
                                            <div class="col-md-6 col-xl-8 ">
                                                <input name="jabatan_pemohon" type="text" id="jabatan_pemohon" value="<?= $all_data['jabatan_pemohon']; ?>" class=" form-control form-control-sm">
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-md-4 col-xl-4 font-weight-bold col-form-label ">No. Handphone (Whatsapp)</div>
                                            <div class="col-md-6 col-xl-8 ">
                                                <input name="no_hp" type="text" id="no_hp" value="<?= $all_data['nomorhp']; ?>" class=" form-control form-control-sm">
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
                            <fieldset id="ContentData">
                                <div class="card-body">
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
                                            <textarea name="detail_ticket" class=" form-control" id="detail_ticket" rows="3"><?= $all_data['detail_ticket']; ?></textarea>
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
                                                    <input name="no_ticket" type="text" id="no_ticket" value="<?= $all_data['kode_ticket']; ?>" readonly class=" form-control form-control-sm">
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-md-4 col-xl-4 font-weight-bold col-form-label ">Tanggal</div>
                                                <div class="col-md-6 col-xl-8 ">
                                                    <input name="tgl_pengajuan" type="text" value="<?= $all_data['tanggal']; ?>" readonly id=" tgl_pengajuan" class="form-control form-control-sm">
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-md-4 col-xl-4 font-weight-bold col-form-label ">waktu</div>
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
                                    <div class="form-group">
                                    </div>
                                    <div class="card-body">
                                        <fieldset id="ContentPlaceHolder1_Fieldset1">
                                            <div class="row mb-2">
                                                <ul style="list-style-type:disc" id="sub_category" name="sub_category">
                                                    <li>Syarat yang harus dibawa</li>
                                                </ul>
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="card-body">
                                        <fieldset id="ContentPlaceHolder1_Fieldset1">
                                            <div class="row mb-2">
                                                <div class="custom-control">
                                                    <!-- <input type="checkbox" name="validasiSyarat" id="validasiSyarat"> -->
                                                    <label for="validasiSyarat">*Semua syarat sudah terpenuhi.</label>
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
        <?php endforeach ?>
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
            }
        });


        $('#jenis_layanan').change(function() {
            var id = $(id_layanan).val();
            $.ajax({
                url: "<?php echo site_url('ticket/get_autosyarat'); ?>",
                method: "POST",
                data: {
                    id: id
                },
                async: true,
                dataType: 'json',
                success: function(data) {

                    var html = '';
                    var i;
                    for (i = 0; i < data.length; i++) {
                        html += '<li> ' + data[i].syarat_layanan + '</li>';
                    }
                    $('#sub_category').html(html);

                }
            });
            return false;
        });

        $("input[type=checkbox]").on("change", function(evt) {
            var cekList = $('input[id=validasiSyarat]:checked');
            if (cekList.length == 0) {
                $("input[name=editTicket]").prop("disabled", true);
            } else {
                $("input[name=editTicket]").prop("disabled", false);
            }
        });
    });
</script>