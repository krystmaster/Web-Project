<!DOCTYPE html>
<html lang="cs">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <title>Muj web</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        @media (min-width: 768px) {
            #sidebarOffcanvas {
                width: 240px !important;
            }
        }
    </style>
</head>
<body>

<div class="d-flex flex-column flex-md-row min-vh-100">

    <div class="d-md-none bg-body-tertiary border-bottom p-2 d-flex justify-content-between align-items-center">
        <a class="text-decoration-none fw-bold text-primary fs-5" href="#">
            <i class="bi bi-bootstrap-fill me-1"></i> Aplikace
        </a>
        <button class="btn btn-outline-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarOffcanvas" aria-controls="sidebarOffcanvas">
            <i class="bi bi-list fs-3"></i>
        </button>
    </div>

    <div class="offcanvas-md offcanvas-start bg-body-tertiary border-end flex-shrink-0" tabindex="-1" id="sidebarOffcanvas">

        <div class="offcanvas-header border-bottom d-md-none">
            <h5 class="offcanvas-title"><i class="bi bi-bootstrap-fill text-primary me-2"></i>Aplikace</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarOffcanvas" aria-label="Zavřít"></button>
        </div>

        <div class="offcanvas-body d-flex flex-column p-3 h-100">

            <a href="/" class="d-none d-md-flex align-items-center link-body-emphasis text-decoration-none pb-3 border-bottom w-100">
                <i class="bi bi-bootstrap-fill fs-2 text-primary me-2"></i>
                <span class="fs-4 fw-bold">Aplikace</span>
            </a>

            <div class="my-3">
                <small class="text-uppercase text-secondary fw-bold fs-7 mb-2 d-block">Navigace</small>
                <ul class="nav nav-pills flex-column gap-1">
                    <li class="nav-item">
                        <a href="#" class="nav-link active d-flex align-items-center" aria-current="page">
                            <i class="bi bi-house me-2 fs-5"></i> Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link link-body-emphasis d-flex align-items-center">
                            <i class="bi bi-star me-2 fs-5"></i> Features
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link link-body-emphasis d-flex align-items-center">
                            <i class="bi bi-tags me-2 fs-5"></i> Pricing
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link link-body-emphasis d-flex align-items-center">
                            <i class="bi bi-question-circle me-2 fs-5"></i> FAQs
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link link-body-emphasis d-flex align-items-center">
                            <i class="bi bi-info-circle me-2 fs-5"></i> About
                        </a>
                    </li>
                </ul>
            </div>

            <hr class="my-2">

            <div class="mb-auto">
                <small class="text-uppercase text-secondary fw-bold fs-7 mb-2 d-block">Nástroje</small>
                <ul class="nav nav-pills flex-column gap-1">
                    <li class="nav-item">
                        <a href="#" class="nav-link link-body-emphasis d-flex align-items-center">
                            <i class="bi bi-speedometer2 me-2 fs-5"></i> Nástěnka
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link link-body-emphasis d-flex align-items-center">
                            <i class="bi bi-table me-2 fs-5"></i> Objednávky
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link link-body-emphasis d-flex align-items-center">
                            <i class="bi bi-grid me-2 fs-5"></i> Produkty
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link link-body-emphasis d-flex align-items-center">
                            <i class="bi bi-people-circle me-2 fs-5"></i> Zákazníci
                        </a>
                    </li>
                </ul>
            </div>

            <hr class="my-2">

            <div class="dropdown">
                <a href="#" class="d-flex align-items-center link-body-emphasis text-decoration-none dropdown-toggle p-1 rounded" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle me-2">
                    <strong>Můj Účet</strong>
                </a>
                <ul class="dropdown-menu text-small shadow">
                    <li><a class="dropdown-item" href="#">Nový projekt...</a></li>
                    <li><a class="dropdown-item" href="#">Nastavení</a></li>
                    <li><a class="dropdown-item" href="#">Profil</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Odhlásit se</a></li>
                </ul>
            </div>

        </div>
    </div>

    <div class="flex-grow-1 p-3 p-md-4 overflow-hidden">
        <div class="container-fluid container-xl">

            <div class="row g-3 g-md-4 align-items-center mb-4">
                <div class="col-12 col-md-8">
                    <div class="border border-dark p-3 p-md-4 rounded bg-body">
                        <h1 class="h2">Havlíček kryštof</h1>
                        <p class="mb-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since 1966, when designers at Letraset and James Mosley, the librarian at St Bride Printing Library in London, took a 1914 Cicero translation and scrambled it to make dummy text for Letraset's Body Type sheets.</p>
                        <button type="button" class="btn btn-primary">Další</button>
                    </div>
                </div>

                <div class="col-12 col-md-4 text-center">
                    <img src="22-jupiter-foto.jpg" class="img-fluid rounded shadow-sm w-100" style="max-height: 300px; object-fit: cover;" alt="Jupiter">
                </div>
            </div>

            <div class="row g-3 g-md-4">
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="card rounded-3 shadow-sm h-100">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal fs-5">Podpoření chudých</h4>
                        </div>
                        <div class="card-body d-flex flex-column">
                            <h1 class="card-title pricing-card-title fs-2">0 kč<small class="text-body-secondary fw-light">/mo</small></h1>
                            <ul class="list-unstyled mt-3 mb-4 flex-grow-1">
                                <li>10 users included</li>
                                <li>2 GB of storage</li>
                                <li>Email support</li>
                                <li>Help center access</li>
                            </ul>
                            <button type="button" class="w-100 btn btn-lg btn-outline-primary mt-auto">Sign up for free</button>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="card rounded-3 shadow-sm h-100">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal fs-5">Podpoření proti invazi podložek pod myše</h4>
                        </div>
                        <div class="card-body d-flex flex-column">
                            <h1 class="card-title pricing-card-title fs-2">0 kč<small class="text-body-secondary fw-light">/mo</small></h1>
                            <ul class="list-unstyled mt-3 mb-4 flex-grow-1">
                                <li>10 users included</li>
                                <li>2 GB of storage</li>
                                <li>Email support</li>
                                <li>Help center access</li>
                            </ul>
                            <button type="button" class="w-100 btn btn-lg btn-outline-primary mt-auto">Sign up for free</button>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="card rounded-3 shadow-sm h-100">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal fs-5">Podpoření proti chudým</h4>
                        </div>
                        <div class="card-body d-flex flex-column">
                            <h1 class="card-title pricing-card-title fs-2">0 kč<small class="text-body-secondary fw-light">/mo</small></h1>
                            <ul class="list-unstyled mt-3 mb-4 flex-grow-1">
                                <li>10 users included</li>
                                <li>2 GB of storage</li>
                                <li>Email support</li>
                                <li>Help center access</li>
                            </ul>
                            <button type="button" class="w-100 btn btn-lg btn-outline-warning mt-auto">Sign up for free</button>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
                            <img src="https://github.com/twbs.png" alt="" width="32" height="32" class="rounded-circle flex-shrink-0">
                            <div class="d-flex gap-2 w-100 justify-content-between">
                                <div>
                                    <h6 class="mb-0">List group item heading</h6>
                                    <p class="mb-0 opacity-75"></p>
                                </div>
                                <small class="opacity-50 text-nowrap">now</small>
                            </div>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
                            <img src="https://github.com/twbs.png" alt="" width="32" height="32" class="rounded-circle flex-shrink-0">
                            <div class="d-flex gap-2 w-100 justify-content-between">
                                <div>
                                    <h6 class="mb-0">Another title here</h6>
                                    <p class="mb-0 opacity-75"></p>
                                </div>
                                <small class="opacity-50 text-nowrap">3d</small>
                            </div>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
                            <img src="https://github.com/twbs.png" alt="" width="32" height="32" class="rounded-circle flex-shrink-0">
                            <div class="d-flex gap-2 w-100 justify-content-between">
                                <div>
                                    <h6 class="mb-0">Third heading</h6>
                                    <p class="mb-0 opacity-75"></p>
                                </div>
                                <small class="opacity-50 text-nowrap">1w</small>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <footer class="py-3 my-4 border-top">
                <p class="text-center text-body-secondary mb-0">© 2026 Firma</p>
            </footer>

        </div>
    </div>

</div>

</body>
</html>