<style>
  @import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap');

  * {
    font-family: 'Montserrat', sans-serif;
    box-sizing: border-box;
  }

  .navbar {
    height: 98px;
    position: relative;
    z-index: 2;
  }

  @media (min-width: 576px) {
    .navbar {
      padding: 0 120px;
    }
  }

  .hero {
    color: white;
    background-image: linear-gradient(to top, rgba(0, 0, 0, .5), rgba(0, 0, 0, .3)), url(https://gatra.website/foldershared/images/2019/anton/10-Oct/64.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    /* object-fit: cover; */
    margin-top: -98px;
    height: 100vh;
    position: relative;
  }

  .hero .content {
    position: absolute;
    left: 20px;
    bottom: 100px;
  }

  @media (min-width: 576px) {
    .hero .content {
      left: 120px;
    }
  }

  .hero .content h1 {
    font-weight: bold;
    font-size: 60px;
  }

  .hero .content p {
    max-width: 500px;
    font-size: 16px;
  }

  .hero .content button {
    background-color: transparent;
    color: white;
    border: 1px solid white;
    border-radius: 99px;
    padding: .5rem 1rem;
  }

  .hero .attractions {
    position: absolute;
    /* background-color: white; */
    width: 50%;
    height: 80%;
    right: 120px;
    bottom: 100px;

    display: grid;
    grid-template: "jtp jtp jtp jtp3 jtp3 jtp3 jtp3"50% "prlng prlng prlng jtp3 jtp3 jtp3 jtp3"50%;
    gap: 1rem;
  }

  .hero .attractions img {
    width: 100%;
    height: 100%;
    background-position: center;
    background-size: contain;
    object-fit: cover;
    border-radius: 8px;
    box-shadow: 0 5px 10px rgba(154, 160, 185, .025), 0 15px 40px rgba(166, 173, 201, .2);
    transition: 300ms ease-in-out;
    cursor: pointer;
  }

  .hero .attractions img:hover {
    transform: scale(1.02);
  }

  .hero .attractions .item-1 {
    grid-area: jtp;
  }

  .hero .attractions .item-2 {
    grid-area: satwa;
  }

  .hero .attractions .item-3 {
    grid-area: jtp3;
  }

  .hero .attractions .item-4 {
    grid-area: prlng;
  }

  #slider {
    vertical-align: middle;
    margin: 0 1rem;
  }

  @media screen and (max-height: 840px) {
    .hero .attractions {
      width: 40%;
      height: 70%;
      /* right: 0; */
    }
  }

  @media screen and (max-width: 1366px) {
    .hero .content h1 {
      font-size: 40px;
    }
  }

  @media screen and (max-width: 1225px) {
    .hero .attractions {
      display: none;
    }
  }
</style>

<nav class="navbar navbar-expand-lg navbar-dark">
  <a class="navbar-brand" href="#">
    <img src="<?= base_url('static/logo.svg') ?>" width="40" height="40" alt="Kota Batu" loading="lazy">
    &nbsp; Kota Batu
  </a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <ul class="navbar-nav ml-auto text-white">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('pulsa') ?>">Pulsa</a>
      </li>

      <?php if ($isLoggedIn) { ?>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('admin') ?>">Admin</a>
        </li>
      <?php } else { ?>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('admin/login') ?>">Login</a>
        </li>
      <?php } ?>

      <li class="nav-item">
        <a class="nav-link disabled" href="#">@Tio Misbaqul Irawan</a>
      </li>
    </ul>
  </div>
</nav>


<div class="hero">
  <div class="content">
    <h1>Jawa Timur Park <span id="jtp-number">1</span></h1>
    <p>Sebuah theme park dengan berbagai wahana permainan yang seru dan asyik banget, sobat tiket. Jatim Park 1 adalah theme park yang memadukan konsep edukasi serta hiburan.</p>
    <button class="btn btn-primary">Learn More</button>

    <input id="slider" type="range" min="1" max="3" value="1">
  </div>

  <div class="attractions">
    <img class="item-1" src="https://www.anekawisata.com/wp-content/uploads/2019/08/Jatim-Park-1-Batu-Malang-Jawa-Timur.jpg" alt="" srcset="">
    <!-- <img class="item-2" src="https://jtp.id/museumsatwa/images/zona/20170531150806_01%20Museum%20Satwa_Terbesar.jpg" alt="" srcset=""> -->
    <img class="item-3" src="https://jtp.id/jatimpark1/images/peta_zona.jpg" alt="" srcset="">
    <img class="item-4" src="https://dakta.com/upload/Wahana-di-Jatim-Park-2.jpg" alt="" srcset="">
  </div>
</div>

<script>
  window.onload = () => {
    document.getElementById('slider').addEventListener("input", ({
      target
    }) => {
      document.getElementById('jtp-number').innerText = target.value
    })
  }
</script>