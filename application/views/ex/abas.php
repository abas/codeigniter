<div class="container">

<div class="row">
  <div class="col l12 s12">
    <div class="card blue">
      <div class="card-content">
        <span class="card-title white-text">Daftar Mahasiswa</span>
      </div>
    </div>
  </div>
  <?php foreach ($MHS as $mhs) { ?>
  <?php echo validation_errors(); ?>
  <?php echo form_open('/index.php/abas/update/'.$mhs['id']); ?>
  <div class="col l4 s12">
    <div class="card hoverable">
      <div class="card-content">
        <span class="card-title">
          <?php echo $mhs['nama']; ?>
        </span>
      </div>
      <div class="card-action">
        <a href="<?php echo base_url();?>index.php/abas/#">
          <b><?php echo $mhs['nim']; ?></b>
        </a>
        <a href="<?php echo base_url();?>index.php/abas/#">
          <?php echo $mhs['kelompok']; ?>
        </a>
      </div>
    </div>
  </div>
  <?php echo form_close(); ?>
  <?php } ?>
</div>
<div class="row">
  <div class="col s12 m5">
    <?php echo validation_errors(); ?>
    <?php echo form_open('/index.php/abas'); ?>
    <div class="card hoverable">
      <div class="card-content">
        <div class="card-title input-field">
          <input type="text" name="nama" required class="active validate" value="" id="nama">
          <label for="nama">Nama</label>
        </div>
        <div class="card-title input-field">
          <input type="text" name="nim" id="nim" value="">
          <label for="nim">Nim</label>
        </div>
        <div class="card-title input-field">
          <input type="text" name="kelompok" id="kelompok" value="">
          <label for="kelompok">Kelompok</label>
        </div>
      </div>
      <div class="card-action">
        <input type="submit" class="btn" name="submit" value="Daftar">
      </div>
    </div>
    <?php echo form_close(); ?>
  </div>
</div>
</div>
