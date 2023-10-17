<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kategori Nilai - Laila Novia Sari</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container shadow position-absolute top-50 start-50 translate-middle p-5 bg-light" style="width: 500px;">
        <h1 class="text-uppercase fs-3 fw-bold text-center">Kategori Nilai</h1>
        <form class="mt-4" method="get" action="">
            <div class="my-3">
                <label for="name">Name</label>
                <input type="text" class="form-control bg-secondary bg-opacity-10 py-3" id="name" name="name" required>
            </div>
            <div class="my-3">
                <label for="nilai">Nilai</label>
                <input type="text" class="form-control bg-secondary bg-opacity-10 py-3" id="nilai" name="nilai" required>
            </div>
            <div class="row justify-content-center my-3">
                <div class="col-4 text-center">
                    <button type="submit" name="calculate" class="btn btn-primary text-center">Submit</button>
                </div>
            </div>
        </form>
        <?php
        if (isset($_GET['calculate'])) {
            $name = $_GET['name'];
            $nilai = number_format(floatval($_GET['nilai']), 2, '.', '');

            switch ($nilai) {
                case $nilai > 90 && $nilai <= 100:
                    echo "
                    <div class='card-footer text-center'>
                        Halo, $name. Nilai angka anda adalah $nilai, dan nilai huruf adalah A.
                    </div>";
                    break;

                case $nilai > 80 && $nilai <= 90:
                    echo "
                    <div class='card-footer text-center'>
                        Halo, $name. Nilai angka anda adalah $nilai, dan nilai huruf adalah B.
                    </div>";
                    break;

                case $nilai > 70 && $nilai <= 80:
                    echo "
                    <div class='card-footer text-center'>
                        Halo, $name. Nilai angka anda adalah $nilai, dan nilai huruf adalah C.
                    </div>";
                    break;

                default:
                    echo "
                    <div class='card-footer text-center'>
                        Halo, $name. Nilai angka anda adalah $nilai, dan nilai huruf anda adalah D.
                    </div>";
                    break;
            }
        }
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>