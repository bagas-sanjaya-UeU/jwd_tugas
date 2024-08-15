<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .carousel-custom {
            height: 400px;
        }

        @media (max-width: 768px) {
            .carousel-custom {
                height: 300px;
            }
        }
    </style>

</head>

<body>
    <!-- Navbar -->

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Wisata Banten</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Daftar Paket Wisata</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Modifikasi Pesanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <!-- Carousel -->
    <div class="container mt-2">
        <div class="row">
            <div class="col">
                <div id="carouselExampleIndicators" class="carousel slide">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?q=80&w=1473&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class=" d-block w-100 img-fluid carousel-custom" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://images.unsplash.com/photo-1432889490240-84df33d47091?q=80&w=1632&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="d-block w-100 img-fluid carousel-custom" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://images.unsplash.com/photo-1672228673973-363dc3484001?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="d-block w-100 img-fluid carousel-custom" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

            </div>
        </div>
    </div>


    <!-- Content -->
    <div class="container mt-4">
        <div class="row">
            <div class="col-8">
                <div class="row row-cols-sm-1 row-cols-md-2 row-cols-lg-2">
                    <div class="col mb-2">
                        <div class="card">
                            <img src="https://images.unsplash.com/photo-1560067394-658386023ed3?q=80&w=1629&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Tour Paket 2 hari</h5>
                                <p class="card-text">Paket ini untuk wisata 2 hari euy...</p>
                                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Daftar Paket</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="https://images.unsplash.com/photo-1560067394-658386023ed3?q=80&w=1629&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Tour Paket 3 hari</h5>
                                <p class="card-text">Paket ini untuk wisata 3 hari euy...</p>
                                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Daftar Paket</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="https://images.unsplash.com/photo-1560067394-658386023ed3?q=80&w=1629&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Tour Paket 4 hari</h5>
                                <p class="card-text">Paket ini untuk wisata 4 hari euy...</p>
                                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Daftar Paket</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="https://images.unsplash.com/photo-1560067394-658386023ed3?q=80&w=1629&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Tour Paket 5 hari</h5>
                                <p class="card-text">Paket ini untuk wisata 5 hari euy...</p>
                                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Daftar Paket</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="ratio ratio-16x9">

                    <iframe width="250" height="250" src="https://www.youtube.com/embed/ladQoajlOkw?si=DwgWlUDnctZnWZk5" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                </div>
            </div>

        </div>
    </div>



    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>