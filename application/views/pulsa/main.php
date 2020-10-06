<?php $this->load->helper('rupiah_helper'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aplikasi Pulsa</title>

  <link rel="stylesheet" href="https://bootswatch.com/4/minty/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

  <style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Open+Sans&display=swap');

    * {
      font-family: 'Montserrat', sans-serif;
      box-sizing: border-box;
    }

    main {
      height: 100vh;
    }

    body {
      background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.87), rgba(255, 255, 255, 0.87)), url(<?=base_url('static/bg.jpg')?>);
      background-size: cover;
      background-repeat: no-repeat;
    }
  </style>

</head>


<body>
  <main class="d-flex justify-content-between">
    <div class="container my-4">
      <div class="row mb-3">
        <div class="col-12 col-sm-6">
          <div class="container">
            <h4>Aplikasi Pulsa</h4>
            <hr>
            <form action="<?= site_url('pulsa/hasil') ?>" method="post">
              <div class="form-group">
                <div class="row">
                  <label for="noHP" class="col-sm-4">No HP</label>
                  <input type="tel" placeholder="..." value="<?= $noHP ?? '' ?>" pattern="[0-9]*" onkeypress="if ( isNaN( String.fromCharCode(event.keyCode) )) return false;" id="noHP" name="noHP" class="form-control col-sm-8" required>
                </div>
              </div>

              <div class="form-group">
                <div class="row">
                  <label for="operator" class="col-sm-4">Operator</label>
                  <select name="operator" id="operator" class="col-sm-8 form-control">
                    <option value="Indosat" <?= set_select("operator", "Indosat") ?>>Indosat</option>
                    <option value="Simpati" <?= set_select("operator", "Simpati") ?>>Simpati</option>
                    <option value="Axis" <?= set_select("operator", "Axis") ?>>Axis</option>
                    <option value="3" <?= set_select("operator", "3") ?>>3</option>
                  </select>
                </div>
              </div>


              <fieldset class="form-group">
                <div class="row">
                  <legend class="col-form-label col-sm-4 pt-0">Jumlah Pulsa</legend>
                  <div class="col-sm-8">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="jumlahPulsa" id="jumlahPulsa5rb" value="5000" <?= set_checkbox("jumlahPulsa", "5000", TRUE) ?>>
                      <label class="form-check-label" for="jumlahPulsa5rb">
                        5rb
                      </label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="jumlahPulsa" id="jumlahPulsa10rb" value="10000" <?= set_checkbox("jumlahPulsa", 10000) ?>>
                      <label class="form-check-label" for="jumlahPulsa10rb">
                        10rb
                      </label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="jumlahPulsa" id="jumlahPulsa25rb" value="25000" <?= set_checkbox("jumlahPulsa", "25000") ?>>
                      <label class="form-check-label" for="jumlahPulsa25rb">
                        25rb
                      </label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="jumlahPulsa" id="jumlahPulsa50rb" value="50000" <?= set_checkbox("jumlahPulsa", "50000") ?>>
                      <label class="form-check-label" for="jumlahPulsa50rb">
                        50rb
                      </label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="jumlahPulsa" id="jumlahPuls100rb" value="100000" <?= set_checkbox("jumlahPulsa", "100000") ?>>
                      <label class="form-check-label" for="jumlahPuls100rb">
                        100rb
                      </label>
                    </div>
                  </div>
              </fieldset>

              <input type="submit" class="btn btn-primary" value="Submit">
            </form>
          </div>
        </div>

        <div class="col-12 col-sm-6 mt-4 mt-sm-0">
          <div class="container bg-<?=$harga ? 'success' : 'warning' ?> text-white p-4 rounded">
            <h4 class="text-white">Struk Pembelian Pulsa</h4>
            <hr>
            <div class="row">
              <p class="col-4">No HP</p>
              <p class="col-8">: <?= $noHP ?? "-" ?></p>

              <p class="col-4">Operator</p>
              <p class="col-8">: <?= $operator ?? "-" ?></p>

              <p class="col-4">Jumlah Pulsa</p>
              <p class="col-8">: <?= $jumlahPulsa ? rupiah($jumlahPulsa) : "-" ?></p>

              <p class="col-4">Harga</p>
              <p class="col-8">: <?= $harga ? rupiah($harga) : "-" ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>