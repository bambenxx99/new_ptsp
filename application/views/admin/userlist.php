<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="col-lg-9">
        <?= $this->session->flashdata('message'); ?>
    </div>

    <div class="card shadow">
        <div class="card-header">
            <h3>
                Daftar Seluruh Pegawai
            </h3>
        </div>
        <div class="card-header">
            <div class="float-right">
                <a href="<?= base_url('admin/export') ?>" class="btn btn-danger btn-sm"><i class="fa fa-file-pdf"></i>&nbsp;&nbsp;Export</a>
                <a href=" " data-toggle="modal" data-target="#adduserModal" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>&nbsp;&nbsp;Tambah</a>
            </div>
        </div>
        <!-- ========================================================== -->
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" cellspacing="0" cellpadding="3" width="100%" id="userdataTable">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>Nama</td>
                            <td>E-Mail</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($semuadata as $all_in) : ?>
                            <tr>
                                <th scope="row"><?= $i ?></th>
                                <td><a href="<?= base_url('admin/profil?cariAkun=' . $all_in['username']); ?>"><?= $all_in['name']; ?></a>
                                    <br><?= $all_in['username']; ?>
                                </td>
                                <td><?= $all_in['email']; ?></td>
                                <td>
                                    <!-- <a href="<?= base_url('admin/editpegawai/' . $all_in['username']); ?>" class="btn btn-primary btn-sm"><i class="fa fa-pen" aria-hidden="true"></i>&nbsp;&nbsp;Edit</a>
                                    <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#userAccess"><i class="fas fa-check-circle"></i></button> -->
                                    <button class="btn-delete btn btn-danger btn-sm" value="<?= $all_in['username'] ?>" data-toggle="modal" data-target="#deleteAccount"><i class="fa fa-trash"></i>&nbsp;&nbsp;Delete</button>
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


<!-- Modal -->
<div class="modal fade" id="userAccess" tabindex="-1" aria-labelledby="userAccessLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="userAccessLabel">Edit Data User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('Admin/userlist'); ?>" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="AccessRole">User Access</label>
                        <select class="form-control" id="AccessRole" name="AccessRole">
                            <option>User</option>
                            <option>Administrator</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
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
                <form class="user" method="post" action="<?= base_url('Admin/dell'); ?>">
                    <input type="hidden" id="usernameTodelete" name="usernameTodelete">
                    <button class="btn btn-primary" type="button" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash">
                            Delete
                        </i></button>
                </form>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="adduserModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add User Account </h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="user" method="post" action="<?= base_url('Admin/addAccount'); ?>">
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Full Name" value=<?= set_value('name'); ?>>
                            <?= form_error('name', '<small class=text-danger pl-9>', '</small>'); ?>
                        </div>
                        <div class="col-sm-6">
                            <input type="text" class="form-control form-control-user" id="nomorusername" name="nomorusername" placeholder="Nomor Induk Pegawai" value=<?= set_value('nomorusername'); ?>>
                            <?= form_error('nomorusername', '<small class=text-danger pl-9>', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control form-control-user" id="email" name="email" placeholder="Email Address" value=<?= set_value('email'); ?>>
                        <?= form_error('email', '<small class=text-danger pl-9>', '</small>'); ?>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                            <?= form_error('password1', '<small class=text-danger pl-9>', '</small>'); ?>
                        </div>
                        <div class="col-sm-6">
                            <input type="password" class="form-control form-control-user" id="Password2" name="password2" placeholder="Repeat Password">
                            <?= form_error('password2', '<small class=text-danger pl-9>', '</small>'); ?>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-primary" type="button" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">
                            Add Account
                        </button>
                    </div>
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
        $('#userdataTable').DataTable();

    });
</script>
<script>
    $(".btn-delete").click(function() {
        $('#usernameTodelete').val($(this).val());
    })
</script>