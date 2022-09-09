<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="col-lg-9">
        <?= $this->session->flashdata('message'); ?>
    </div>

    <!-- Page Heading -->
    <div class="card shadow">
        <div class="card-header">
            <h3>
                Daftar Pendaftaran Akun Pegawai
            </h3>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="display table table-bordered table nowrap" cellspacing="0" cellpadding="3" width="100%" id="usermandataTable">
                        <thead>
                            <tr>
                                <td>No</td>
                                <td>Nama</td>
                                <td>NIP</td>
                                <td>E-Mail</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($daftar as $data_masuk) : ?>
                                <tr>
                                    <th scope="row"><?= $i ?></th>
                                    <td><?= $data_masuk['name']; ?></td>
                                    <td><?= $data_masuk['nip']; ?></td>
                                    <td><?= $data_masuk['email']; ?></td>
                                    <td>
                                        <a href="<?= base_url('admin/activate/' . $data_masuk['nip']); ?>" class="btn btn-success btn-sm"><i class="fas fa-check-circle"></i></a>
                                        <button class="btn-delete btn btn-danger btn-sm" value="<?= $data_masuk['nip'] ?>" data-toggle="modal" data-target="#deleteAccount"><i class="fa fa-trash"></i>&nbsp;&nbsp;Delete</button>
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
</div>

<div class="modal fade" id="deleteAccount" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Acccount?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Delete" below if you are ready to delete account.</div>
            <div class="modal-footer">
                <form class="user" method="post" action="<?= base_url('Admin/hapus'); ?>">
                    <input type="hidden" id="nipTodelete" name="nipTodelete">
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
<script>
    $(".btn-delete").click(function() {
        $('#nipTodelete').val($(this).val());
    })
</script>