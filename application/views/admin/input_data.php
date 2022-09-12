<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Input Layanan</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="post" action="">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nama_layanan">Nama Layanan</label>
                                <input type="text" class="form-control" id="nama_layanan" placeholder="Nama Layanan">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Bidang</label>
                                <select class="form-control">
                                    <option>Kantor Kementerian Agama</option>
                                    <option>Sekertariat Keuangan</option>
                                    <option>Sekertariat Umum</option>
                                    <option>Sekertariat Kepegawaian</option>
                                    <option>Penyelenggara Haji dan Umroh</option>
                                    <option>Bimas Islam</option>
                                    <option>PAKIS</option>
                                    <option>Pendidikan Madrasah</option>
                                    <option>Penyelenggara Zakat dan Wakaf</option>
                                    <option>Penyelenggara Katolik</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="lama_waktu">Lama Waktu</label>
                                <input type="text" class="form-control" id="lama_waktu" placeholder="Lama Waktu Dalam Hari">
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Tambah Layanan</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Input Syarat</h3>
                    </div>
                    <form>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Jenis Layanan</label>
                                <select class="form-control">
                                    <option>Kantor Kementerian Agama</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="syarat_layanan">Syarat Layanan</label>
                                <input type="text" class="form-control" id="syarat_layanan" placeholder="Syarat Layanan">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>

                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Tambah Syarat</button>
                        </div>
                    </form>
                </div>
            </div>
            <!--/.col (right) -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>