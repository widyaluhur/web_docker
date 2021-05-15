<div class="container">
    <div class="row mt-4">
        <div class="col-md-4">
            <?php foreach ($post as $posts) : ?>
                <div class="card">
                    <div class="card-header">
                        update Post
                    </div>
                    <div class="card-body">

                        <form action="<?= base_url() ?>post/prosesUpdate/<?= $posts['id_post'] ?>" method="POST">
                            <div class="form-group">
                                <label for="judul">judul</label>
                                <input type="text" class="form-control" name="judul" id="judul" placeholder="masukan judul" value="<?= $posts['judul'] ?> " required>
                            </div>
                            <div class=" form-group">
                                <label for="isi">isi</label>
                                <textarea class="form-control" name="isi" id="isi" placeholder="Masukan isi" required><?= $posts['isi'] ?></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="<?= base_url() ?>post" class="btn btn-secondary">Batal</a>
                        </form>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

</div>