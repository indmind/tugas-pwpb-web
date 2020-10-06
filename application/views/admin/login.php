<style>
  .main-head {
    height: 150px;
    background: #FFF;

  }

  .sidenav {
    height: 100%;
    background-color: #186d9e;
    overflow-x: hidden;
    padding-top: 20px;
  }


  .main {
    padding: 0px 10px;
  }

  @media screen and (max-height: 450px) {
    .sidenav {
      padding-top: 15px;
    }
  }

  @media screen and (max-width: 450px) {
    .login-form {
      margin-top: 10%;
    }

  }

  @media screen and (min-width: 768px) {
    .main {
      margin-left: 40%;
    }

    .sidenav {
      width: 40%;
      position: fixed;
      z-index: 1;
      top: 0;
      left: 0;
    }

    .login-form {
      margin-top: 70%;
    }
  }

  .login-main-text {
    margin-top: 40%;
    padding: 60px;
    color: #fff;
  }

  .login-main-text h2 {
    font-weight: 300;
  }

  .btn-blue {
    background-color: #186d9e !important;
    color: #fff;
  }
</style>

<div class="sidenav">
  <div class="login-main-text">
    <h2>Admin Login</h2>
    <p>Login from here to access.</p>
  </div>
</div>
<div class="main">
  <div class="col-md-6 col-sm-12 pt-4 pt-md-0">
    <div class="login-form">
      <form method="post" action="<?=site_url('admin/loginProcess')?>">
        <div class="form-group">
          <label>Username</label>
          <input type="text" class="form-control" placeholder="Username" name="username">
        </div>
        <div class="form-group">
          <label>Password</label>
          <input type="password" class="form-control" placeholder="Password" name="password">
        </div>
        <button type="submit" class="btn btn-blue">Login</button>
      </form>
    </div>
  </div>
</div>