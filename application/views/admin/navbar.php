<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Admin</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link <?=$this->uri->segment(2) == "" ? "active" : ""?>" href="<?=site_url('admin')?>">Home</a>
      <a class="nav-item nav-link <?=$this->uri->segment(2) == "accountSetting" ? "active" : ""?>" href="<?=site_url('admin/accountSetting')?>">Setting Akun</a>
      <a class="nav-item nav-link" href="<?=site_url('admin/logout')?>">Logout</a>
    </div>
  </div>
</nav>
