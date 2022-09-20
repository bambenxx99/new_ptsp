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
                    <div class="card text-white bg-success" style="max-width: 45rem;">
                        <div class="card-header"><h3 style="color:black">Layanan</h3></div>
                        <div class="card-body">
                            <p class="card-text"><?= $namalayanan['jenis_layanan'] ?></p>
                        </div>

                    </div>
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
                                    <?= $all_in['syarat_layanan']; ?><br>
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

