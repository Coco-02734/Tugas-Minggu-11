<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <title>Data Transaksi | WarMoed</title>
</head>

<body>
    <div class="container mt-3">
        <h2 class="text-center">Data Transaksi</h2>
        <form class="col-lg-6">
            <div class="mb-3">
                <label for="katakunci" class="form-label">Nama / No Trans / Alamat / Kurir / Status </label>
                <input type="text" class="form-control" name="katakunci" id="katakunci">
                <div class="mt-3">
                    <button type="button" id="btn-search" class="btn btn-warning">Cari</button>
                    <a class="btn btn-success" href="">Ulangi</a>
                </div>

            </div>

        </form>
        <div class="mt-3 col-lg-10" id="hasil">

            <?php $this->load->view('tabel', ['trans' => $trans]);
            ?>

        </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script>
        var baseurl = "<?php echo base_url("index.php/"); ?>";
    </script>
    <script src="<?php echo base_url("assets/js/jquery.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/datajs/transaksi.js"); ?>"></script>


</body>

</html>