<main class="bg-light vh-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card mt-5">
                    <div class="card-body">
                        <form action="" method="POST">
                            <h1>Form Register</h1>
                            <div class="form-group">
                                <label for="name">Nama Lengkap</label>
                                <input type="text" name="name" class="form-control" id="name" value="<?= set_value('name'); ?>"><?= form_error('name', '<small class="pl-3 text-danger">', '</small>'); ?>
                                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                            </div>
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="email" name="email" class="form-control" id="email" value="<?= set_value('email'); ?>"><?= form_error('email', '<small class="pl-3 text-danger">', '</small>'); ?>
                                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                            </div>
                            <div class="form-row mb-3">
                                <div class="col">
                                    <label for="password">Password</label>
                                    <input type="password" name="password1" class="form-control" id="password1"><?= form_error('password1', '<small class="pl-3 text-danger">', '</small>'); ?>
                                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                </div>
                                <div class="col">
                                    <label for="password">Konfirmasi Password</label>
                                    <input type="password" name="password2" class="form-control" id="password2"><?= form_error('password2', '<small class="pl-3 text-danger">', '</small>'); ?>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Daftar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
