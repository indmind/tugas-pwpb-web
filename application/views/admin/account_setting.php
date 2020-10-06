<main>
  <?= $navbar ?>

  <div class="container py-4">
    <h2>Setting Akun</h2>
    <hr>
    <div class="row">
      <div class="col-md-5">
        <form action="<?= site_url('admin/addUser') ?>" method="post">
          <div class="form-group">
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" class="form-control" name="username" id="username" placeholder="Username">
            </div>

            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" name="password" id="password" placeholder="password">
            </div>

            <button type="submit" class="btn btn-primary">Add</button>
          </div>
        </form>
      </div>
      <div class="col-md-12 my-2">
        <h2>Daftar Akun</h2>
        <table class="table table-striped my-3">
          <thead>
            <tr>
              <th>No</th>
              <th>Username</th>
              <th>Password</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1;?>
            <?php foreach($userdata as $user) { ?>
              <tr>
                <td scope="row"><?= $no++ ?></td>
                <td><?=$user->username?></td>
                <td><?=$user->password?></td>
                <td><?=$user->status == 1 ? "aktif" : "tidak aktif"?></td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</main>
