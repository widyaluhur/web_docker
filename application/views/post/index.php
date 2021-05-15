<div class="container">
    <div class="row">
        <div class="col-md-4 d-flex justify-content-between">
            <h1>Artikel</h1>
            <a href="<?= base_url() ?>post/tambah" class="btn btn-primary align-self-center">tambah</a>
        </div>
        <div class="col-md-8 align-self-end">
            <?= $this->pagination->create_links(); ?>
        </div>
    </div>

    <hr>
    <div class="row mt-3">
        <?php if (isset($post)) : ?>
            <?php foreach ($post as $posts) : ?>
                <div class="col-md-4 mb-3">
                    <h3 class="text-truncate"><?= $posts['judul']; ?></h3>
                    <p class="" style="-webkit-line-clamp:3; overflow:hidden; 
                    text-overflow:ellipsis; display: -webkit-box; 
                    -webkit-box-orient:vertical;"><?= $posts['isi']; ?> </p>
                    <a role="button" href="<?= base_url(); ?>post/artikel/<?= $posts['id_post']; ?>" class="btn btn-primary">Lihat &raquo;</a>
                    <a role="button" href="<?= base_url(); ?>post/update/<?= $posts['id_post'] ?>" class="btn btn-primary">Update &raquo;</a>
                    <a href="<?= base_url() ?>post/hapus/<?= $posts['id_post'] ?>" class="btn btn-danger" onclick="return confirm('yakin di hapus?')">hapus</a>
                    <hr>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>