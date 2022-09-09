<div class="card shadow ml-3 mr-3">
    <h1 class="h3 mt-3 ml-3 mb-3 text-black-750">Edit Profile</h1>

    <?= form_open_multipart('user/edit'); ?>
    <div class="row mb-3 ml-3">
        <label for="name" class="col-sm-2 col-form-label">Nama Pegawai</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" id="name" name='name' value='<?= $user['name']; ?>'>
            <?php echo form_error('name', '<small class=text-danger pl-9>', '</small>'); ?>
        </div>
    </div>
    <div class="row mb-3 ml-3">
        <label for="nip" class="col-sm-2 col-form-label">N I P</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" id="nip" name='nip' value='<?= $user['nip']; ?>' readonly>
        </div>
    </div>
    <div class="row mb-3 ml-3">
        <label for="email" class="col-sm-2 col-form-label">E-Mail</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" id="email" name='email' value=<?= $user['email']; ?>>
            <?php echo form_error('email', '<small class=text-danger pl-9>', '</small>'); ?>
        </div>
    </div>
    <div class="row mb-3 ml-3">
        <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" id="jabatan" name="jabatan" value='<?= $user['jabatan']; ?>'>
            <?php echo form_error('jabatan', '<small class=text-danger pl-9>', '</small>'); ?>
        </div>
    </div>
    <div class="row mb-3 ml-3">
        <label for="satker" class="col-sm-2 col-form-label">Satuan Kerja</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" id="satker" name="satker" value='<?= $user['satker']; ?>'>
            <?= form_error('satker', '<small class=text-danger pl-9>', '</small>'); ?>
        </div>
    </div>
    <div class="row mb-3 ml-3">
        <label for="golongan" class="col-sm-2 col-form-label">Golongan</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" id="golongan" name="golongan" value='<?= $user['golongan']; ?>'>
            <?= form_error('golongan', '<small class=text-danger pl-9>', '</small>'); ?>
        </div>
    </div>
    <div class="row mb-3 ml-3">
        <label for="image" class="col-sm-2 col-form-label">Photo</label>
        <div class="col-sm-6">
            <div class="row">
                <div class="col-sm-3">
                    <img src="<?= base_url("assets/img/profile/" . $user['image']); ?>" alt="" class="img-thumbnail">
                </div>
                <div class="col-sm-9">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image" name="image">
                        <label class="custom-file-label" for="image">Choose file</label>
                        <?= form_error('image', '<small class=text-danger pl-9>', '</small>'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary ml-3 mb-3">Edit Data</button>
    </form>

</div>