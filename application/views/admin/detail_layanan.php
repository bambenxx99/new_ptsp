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
                    <div class="card text-white bg-success">
                        <div class="card-header"><h3 style="color:black">Layanan</h3></div>
                        <div class="card-body">
                            <p class="card-text" style="color:black"><?= $namalayanan['jenis_layanan'] ?></p>
                            <!-- <p class="card-text"><?= $namalayanan['id_layanan'] ?></p> -->
                        </div>

                    </div>
                </div>
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Input Syarat</h3>
                    </div>
                    <form method="post" action="addSyaratfromDetail">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="syarat_layanan">Syarat Layanan</label>
                                <input type="text" class="form-control" id="syarat_layanan" name="syarat_layanan" placeholder="Syarat Layanan">
                                <input type="hidden" class="form-control" id="id_layanan" name="id_layanan" value=<?= $namalayanan['id_layanan'] ?>>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Tambah Syarat</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card text-black" style="max-width: 45rem;">
                        <div class="card-header"><h3 style="color:black">Syarat Layanan</h3></div>
                        <div class="card-body">
                            <?php $i = 1; ?>
                            <?php foreach ($syarat as $all_in) : ?>
                            <ul><h5 class="card-title">
                                <li>
                                    <?= $all_in['syarat_layanan']; ?> 
                                    <button class="btn-delete btn btn-danger btn-sm" value="<?= $all_in['id_syarat'] ?>" data-toggle="modal" data-target="#delete_syarat"><i class="fa fa-trash"></i></button>
                                    <br>
                                </li>
                            </ul>
                            <?php $i++; ?>
                            <?php endforeach ?>
                           </h5>
                        </div>

                    </div>
                </div>
            </div>
            <!--/.col (right) -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>


<div class="modal fade" id="delete_syarat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Ticket?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Delete" below if you are ready to delete syarat.</div>
            <div class="modal-footer">
                <form class="user" method="post" action="<?= base_url('Admin/delete_syarat'); ?>">
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
<script>
    $(".btn-delete").click(function() {
        $('#to_delete').val($(this).val());
    })
</script>

