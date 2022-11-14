<!-- Begin Page Content -->

<div class="container-fluid">
    <div class="col-lg-9">
        <?= $this->session->flashdata('message'); ?>
    </div>

    <div class="card shadow">
        <div class="card-header">
            <h3>
                Daftar Seluruh Ticket
            </h3>
        </div>
        <div class="card-header">
            <div class="float-right">
                <button class="btn-pesan btn btn-success btn-sm" data-toggle="modal" data-target="#pesan_ticket"><i class="fa fa-message"></i>&nbsp;&nbsp;Pesan</button>
                <a href="<?= base_url('ticket/input') ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>&nbsp;&nbsp;Tambah</a>
            </div>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" cellspacing="0" cellpadding="3" width="100%" id="Ticket_table">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>Kode Ticket</td>
                            <td>Nama</td>
                            <td>Layanan</td>
                            <td>Detail</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>

                        <?php $i = 1; ?>
                        <?php foreach ($semuaticket as $all_in) : ?>
                            <tr>
                                <th scope="row"><?= $i ?></th>
                                <td><?= $all_in['kode_ticket']; ?></td>
                                <td>
                                    <?= $all_in['nama']; ?><br>
                                    <?= $all_in['nomorhp']; ?>
                                </td>
                                <td>
                                    <?= $all_in['jenis_layanan']; ?><br>
                                    <?= $all_in['tanggal']; ?>
                                </td>
                                <td>
                                    <?= $all_in['detail_ticket']; ?><br>
                                </td>
                                <td>
                                    <?php if ($all_in['kirimPesan'] == 0) : ?>
                                        <button type="button" class="btn-message btn-sm btn-success" value="<?= $all_in['kode_ticket'] ?>" data-toggle="modal" data-target="#send_message">Send</button>
                                    <?php endif ?>
                                    <?php if ($all_in['kirimPesan'] == 1) : ?>
                                        <button type="button" class="btn-message btn-sm btn-success fa fa-check-circle"></button>
                                    <?php endif ?><br><br>
                                    <a href="<?= base_url('Ticket/laporan_pdf/' . $all_in['kode_ticket']); ?>"><button type="button" class="btn-message btn-sm btn-danger"><i class="fa fa-print"></i>&nbsp;&nbsp;Cetak</button></a><br><br>
                                    <a href="<?= base_url('Ticket/edit/' . $all_in['kode_ticket']); ?>"><button type="button" class="btn-message btn-sm btn-primary"><i class="fa fa-pen"></i>&nbsp;&nbsp;Edit</button></a><br><br>
                                    <button type="button" class="btn-message btn-sm btn-delete btn-danger" value="<?= $all_in['kode_ticket'] ?>" data-toggle="modal" data-target="#delete_ticket"><i class="fa fa-trash"></i>&nbsp;&nbsp;Delete</button>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="pesan_ticket" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Pesan Ticket?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form class="user" method="post" action="<?= base_url('Ticket/update_pesan'); ?>">
                <div class="modal-body">
                    <div>
                        <?php foreach ($pesan_ticket as $pesan) : ?>
                            <textarea rows="5" name="pesan_ticket" class="form-control form-control-sm" id="pesan_ticket"><?= $pesan['pesan']; ?></textarea>
                    </div> <?php endforeach ?>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary btn-sm" type="button" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary btn-sm"><i class="fa">
                            Simpan
                        </i></button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="delete_ticket" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Ticket?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Delete" below if you are ready to delete account.</div>
            <div class="modal-footer">
                <form class="user" method="post" action="<?= base_url('Ticket/delete_ticket'); ?>">
                    <input type="hidden" id="to_delete" name="to_delete">
                    <button class="btn btn-primary" type="button" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash">
                            Delete
                        </i></button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="send_message" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Send Message User?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-footer">
                <form class="user" method="post" action="<?= base_url('Ticket/sendMessage'); ?>">
                    <input type="hidden" id="id_tomessage" name="id_tomessage">
                    <button class="btn btn-danger btn-sm" type="button" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-paper">
                            Send
                        </i></button>
                </form>
            </div>
        </div>
    </div>
</div>



<?php
$this->load->view('templates/footer');
$this->session->set_flashdata('message', null);
?>
<script type="text/javascript">
    // $.fn.dataTable.moment('DD/MM/YYYY HH:mm');
    $(document).ready(function() {
        $('#Ticket_table').DataTable({
            order: [
                [1, 'desc']
            ],
        });

    });
</script>
<script>
    $(".btn-delete").click(function() {
        $('#to_delete').val($(this).val());
    })
    $(".btn-message").click(function() {
        $('#id_tomessage').val($(this).val());
    })
</script>