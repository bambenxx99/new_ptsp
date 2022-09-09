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


        <!-- =========================Chart Tahun ini ============================================ -->
        <div class="row mx-2">
            <div class="col-xl-8 col-lg-7">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary ">Grafik Cuti Tahun <?= date('Y'); ?></h6>
                        <div class="dropdown no-arrow">
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                <div class="dropdown-header">Dropdown:</div>
                                <a class="dropdown-item" href="#">Action</a>
                            </div>
                        </div>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="chartContainer">
                            <canvas id="myChart"></canvas>
                            <?php
                            $jenis_cuti = "";
                            $jumlah = null;
                            foreach ($chart1 as $item) {
                                $jur = $item->jenis_cuti;
                                $jenis_cuti .= "'$jur'" . ", ";
                                $jum = $item->total;
                                $jumlah .= "$jum" . ", ";
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-5">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Cuti Tahunan</h6>
                        <div class="dropdown no-arrow">
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                <div class="dropdown-header">Dropdown:</div>
                                <a class="dropdown-item" href="#">Action</a>
                            </div>
                        </div>
                    </div>
                    <!-- Card Body -->
                    <div>
                        <div class="card-body">
                            <?php

                            $progress1 = ((12 - $sisaTahunini) / 12) * 100;
                            $progress2 = ((12 - $sisaTahunkemarin) / 12) * 100; ?>


                            <div class="card border-left-success shadow py-3 my-4">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Sisa Cuti Tahunan <?= date('Y');  ?></div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $sisaTahunini; ?></div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm mx-2">
                                                        <div class="progress-bar bg-info" role="progressbar" style="width: <?= $progress1 ?>%" aria-valuenow="<?= $sisaTahunini ?>" aria-valuemin=" 0" aria-valuemax="12"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card border-left-success shadow py-3 mt-4 ">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Sisa Cuti Tahunan <?= date('Y') - 1;  ?></div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $sisaTahunkemarin; ?></div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm mx-2">
                                                        <div class="progress-bar bg-info" role="progressbar" style="width: <?= $progress2 ?>%" aria-valuenow="<?= $sisaTahunkemarin ?>" aria-valuemin=" 0" aria-valuemax="12"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- =========================Chart Tahun ini ============================================ -->

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" cellspacing="0" cellpadding="3" width="100%" id="profilCuti">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>Jenis Cuti</td>
                            <td>Tanggal Mulai</td>
                            <td>Tahun Cuti</td>
                            <td>Lama Cuti</td>
                            <td>Status</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($cuti as $data_cuti) : ?>
                            <tr>
                                <th scope="row"><?= $i ?></th>
                                <td><?= $data_cuti['jenis_cuti']; ?></td>
                                <td><?= $data_cuti['tanggal_mulai']; ?></td>
                                <td><?= $data_cuti['tahun_cuti']; ?></td>
                                <td><?= $data_cuti['lama_cuti'] . " Hari"; ?></td>
                                <td><?php if ($data_cuti['status'] == '1') : ?>
                                        <?= "DITERIMA"; ?>
                                    <?php else : ?>
                                        <?= "DITOLAK"; ?>
                                    <?php endif; ?>
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
</div>
<?php
$this->load->view('templates/footer');
$this->session->set_flashdata('message', null);
?>

<!-- =========================Script tahun ini======================================== -->

<script>
    $(document).ready(function() {
        $("#chartContainer").html('<canvas id="myChart"></canvas>');

        // console.log(<?php echo $jenis_cuti; ?>);
        // console.log(<?php echo $jumlah; ?>);
        var ctx = document.getElementById('myChart').getContext('2d');
        var chart = new Chart(ctx, {
            // The type of chart we want to create
            type: 'bar',
            // The data for our dataset
            data: {
                labels: [<?php echo $jenis_cuti; ?>],
                datasets: [{
                    label: 'Data Jenis Cuti',
                    backgroundColor: ['rgb(255, 99, 132)', 'rgba(56, 86, 255, 0.87)', 'rgb(60, 179, 113)', 'rgb(175, 238, 239)'],
                    borderColor: ['rgb(255, 99, 132)'],
                    data: [<?php echo $jumlah; ?>]
                }]
            },
            // Configuration options go here
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    });
</script>