<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="col-lg-9">
        <?= $this->session->flashdata('message'); ?>
    </div>

    <div class="card shadow">
        <h1 class="h3 mt-3 ml-3 mb-3 text-black-750"><?= $user['name']; ?> Profile</h1>
        <div class="card-body mb-3">
            <div class="row">
                <div class="col-sm-3">
                    <img src="<?= base_url('assets/img/profile/'); ?><?= $user['image']; ?>" alt="" class="img-thumbnail">
                </div>
                <div class="col-md-6">
                    <table border="0">
                        <td>
                            <tr>
                                <h5 class="card-title"><?= $user['name']; ?></h5>
                            </tr>
                            <tr>
                                <p class="card-text"><?= $user['nip']; ?></p>
                            </tr>
                            <tr>
                                <p class="card-text"><?= $user['email']; ?></p>
                            </tr>
                            <tr>
                                <p class="card-text"><?= $user['jabatan']; ?></p>
                            </tr>
                            <tr>
                                <p class="card-text"><?= $user['golongan']; ?></p>
                            </tr>
                            <tr>
                                <p class="card-text"><?= $user['satker']; ?></p>
                            </tr>
                        </td>
                    </table>
                </div>
            </div>
        </div>



</div>
<?php
$this->load->view('templates/footer');
$this->session->set_flashdata('message', null);
?>
