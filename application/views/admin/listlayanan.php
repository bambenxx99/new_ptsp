<!-- Begin Page Content -->

<div class="container-fluid">
    <div class="col-lg-9">
        <?= $this->session->flashdata('message'); ?>
    </div>

    <div class="card shadow">
        <div class="card-header">
            <h3>
                Daftar Seluruh Layanan
            </h3>
        </div>  
        <div class="card-header">
            <div class="float-right">
                <a href="<?= base_url('admin/input_data') ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>&nbsp;&nbsp;Tambah</a>
            </div>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" cellspacing="0" cellpadding="3" width="100%" id="layanan_table">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>Nama Layanan</td>
                            <td>Bidang</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>

                        <?php $i = 1; ?>
                        <?php foreach ($layanan as $all_in) : ?>
                            <tr>
                                <th scope="row"><?= $i ?></th>
                                <td>
                                    <!-- <a href="<?= base_url('admin/profil?cariAkun=' . $all_in['nip']); ?>"><?= $all_in['name']; ?></a> -->
                                    <a href="<?= base_url('admin/detail_layanan?layanan='. $all_in['id']); ?>"><?= $all_in['jenis_layanan']; ?></a>
                                </td>
                                <td>
                                    <?= $all_in['nama_bidang']; ?><br>
                                </td>
                                <td>
                                    <button class="btn-delete btn btn-danger btn-sm" value="<?= $all_in['id_layanan'] ?>" data-toggle="modal" data-target="#delete_ticket"><i class="fa fa-trash"></i>&nbsp;&nbsp;Delete</button>
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

<div class="modal fade" id="delete_ticket" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Ticket?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Delete" below if you are ready to delete layanan.</div>
            <div class="modal-footer">
                <form class="user" method="post" action="<?= base_url('Admin/delete_layanan'); ?>">
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




<?php
$this->load->view('templates/footer');
$this->session->set_flashdata('message', null);
?>
<script type="text/javascript">
    $(document).ready(function() {
        $('#layanan_table').DataTable({
            "pageLength": 25
        });
    });
</script>
<script>
    $(".btn-delete").click(function() {
        $('#to_delete').val($(this).val());
    })
</script>