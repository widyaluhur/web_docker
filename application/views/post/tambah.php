    <div class="container">
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        Tambah Post
                    </div>
                    <div class="card-body">

                        <form action="<?= base_url() ?>post/prosesTambah" method="POST">
                            <div class="form-group">
                                <label for="judul">judul</label>
                                <input type="text" class="form-control" name="judul" id="judul" placeholder="masukan judul" required>
                            </div>
                            <div class="form-group">
                                <label for="isi">isi</label>
                                <textarea class="form-control" name="isi" id="isi" placeholder="Masukan isi" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>