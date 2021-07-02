<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Shop Homepage - Rental Mobil</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="<?= base_url('assets') ?>/assets/favicon.ico">
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?= base_url('assets') ?>/css/styles.css" rel="stylesheet">
</head>

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#!">Rental Mudah</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <!-- <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Home</a></li> -->
                    <li class="nav-item"><a class="nav-link" href="#" onclick="loadMenu('<?= base_url('About') ?>')">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#" onclick="loadMenu('<?= base_url('Profil') ?>')">Profil</a></li>
                    <li class="nav-item"><a class="nav-link" href="#" onclick="loadMenu('<?= base_url('Mobil') ?>')">Mobil</a></li>
                </ul>
                <form class="d-flex">
                    <button class="btn btn-outline-dark" type="submit">
                        <i class="bi-cart-fill me-1"></i>
                        Cart
                        <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                    </button>
                </form>
            </div>
        </div>
    </nav>
    <!-- Header-->
    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder page-title">Rental Mudah</h1>
                <p class="lead fw-normal text-white-50 mb-0">Ini tugas final projek matkul pwl2 || TI</p>
            </div>
        </div>
    </header>
    <!-- Section-->
    <section class="py-5">
        <div class="container" id="kontenTemplate">
            <div class="card text-white bg-danger mb-12">
                <div class="card-header">AWASS !!</div>
                <div class="card-body">
                    <h5 class="card-title">INI ADALAH FINAL PROJEK</h5>
                    <p class="card-text">Jangan Main Main Kamu dengan tugas, SELESAIKANLAH ! Baru nantinya kamu bisa ber leha-leha oke .</p>
                </div>
            </div>
    </section>
    <!-- Footer-->
    <!-- <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright © Your Website 2021</p>
        </div>
    </footer> -->
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    <!-- Core theme JS-->
    <script src="<?= base_url('assets') ?>/js/scripts.js"></script>

    <script type="text/javascript">
        function loadMenu(url) {
            $.ajax(url, {
                type: 'GET',
                success: function(data, status, xhr) {
                    var objData = JSON.parse(data);

                    $('#kontenTemplate').html(objData.konten);
                    $('title').html(objData.titel);
                    $('.page-title').html(objData.titel);
                },
                error: function(jqXHR, textStatus, errorMsg) {
                    alert('Error :' + errorMsg);
                }
            })
        }
    </script>


</body>

</html>