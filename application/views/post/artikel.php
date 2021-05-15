<div class="container">
<div class="row mt-8">
    <?php foreach($post as $post): ?>
    <div class="container">
    <h3 class="my-3"><?= $post['judul'] ?> </h3>
</div>
<div class="container">
    <hr>
    <p class="text-justify"><?= $post['isi'] ?></p>
</div>
<div class="container">
    <a href="<?= base_url() ?>post" class="btn btn-secondary">Kembali</a>
    <hr>
</div>
    </div>
    <?php endforeach; ?>
  </div>
</div>
</div>

