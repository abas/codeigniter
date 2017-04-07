<div class="row">
  <div class="col s12 m12 l12">
    <?php echo validation_errors(); ?>
    <?php echo form_open('/index.php/abas/update/'); ?>
    <?php echo $MHS['id']; ?>
    <div class="card hoverable">
      <div class="card-content">
        <div class="card-title input-field">
          <input style="text-transform: uppercase;" type="text" name="nama" required class="active validate" value="<?php echo $MHS['nama']; ?>" id="nama">
          <label for="nama">Nama</label>
        </div>
        <div class="card-title input-field">
          <input style="text-transform: uppercase;" type="text" name="nim" id="nim" required value="<?php echo $MHS['nim']; ?>">
          <label for="nim">Nim</label>
        </div>
        <div style="text-transform: uppercase;" class="card-title input-field">
          <input type="text" name="kelompok" required id="kelompok" value="<?php echo $MHS['kelompok']; ?>">
          <label for="kelompok">Kelompok</label>
        </div>
      </div>
      <div class="card-action">
        <input type="submit" class="btn" name="submit" value="UPDATE">
      </div>
    </div>
    <?php echo form_close(); ?>
  </div>
</div>
