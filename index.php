<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tim Vyhnálek – Osobní web</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <!-- Hlavní navigace -->
    <header class="p-3 text-bg-dark sticky-top shadow-sm">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-between">
                <a href="#" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none fw-bold fs-4">
                    <i class="bi bi-person-circle me-2"></i> Tim Vyhnálek
                </a>

                <ul class="nav me-auto ms-lg-4 mb-2 justify-content-center mb-md-0">
                    <li><a href="#uvol" class="nav-link px-2 text-white">Domů</a></li>
                    <li><a href="#o-mne" class="nav-link px-2 text-white-50">O mně</a></li>
                    <li><a href="#uspechy" class="nav-link px-2 text-white-50">Mé úspěchy</a></li>
                </ul>

                <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
                    <input type="search" class="form-control form-control-dark text-bg-dark" placeholder="Hledat..." aria-label="Search">
                </form>

                <div class="text-end">
                    <button type="button" class="btn btn-outline-light me-2">Přihlásit</button>
                    <button type="button" class="btn btn-warning">Registrace</button>
                </div>
            </div>
        </div>
    </header>

    <main id="uvol">
        <!-- Hero Banner -->
        <div class="bg-primary text-white text-center py-5 mb-5 shadow-sm">
            <div class="container py-4">
                <h1 class="display-4 fw-bold">Vítejte na mém webu!</h1>
                <p class="lead">lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <a class="btn btn-light btn-lg mt-3 fw-semibold text-primary" href="#uspechy" role="button">Moje úspěchy »</a>
            </div>
        </div>

        <div class="container my-5">
            <div class="row g-5 align-items-center" id="o-mne">
                <!-- Profilová Karta -->
                <div class="col-lg-4 col-md-5">
                    <div class="card shadow border-0 rounded-4 overflow-hidden">
                        <img src="selfie.jpg" class="card-img-top" alt="Tim Vyhnálek" style="height: 320px; object-fit: cover;">
                        <div class="card-body text-center p-4">
                            <h4 class="card-title fw-bold">Tim Vyhnálek</h4>
                            <p class="card-text text-muted">Buuuuuum 🚀</p>
                            <a href="#" class="btn btn-primary w-100 rounded-pill">Koukni se na můj profil</a>
                        </div>
                    </div>
                </div>

                <!-- Úvodní popis -->
                <div class="col-lg-8 col-md-7">
                    <h2 class="display-6 fw-bold mb-3">Něco o mně</h2>
                    <p class="fs-5 text-secondary">
                        Vítám vás na svých osobních stránkách. Rád se věnuji sportu a posouvám své hranice. Podívejte se na mé největší dosavadní úspěchy níže!
                    </p>
                    <hr class="my-4">
                    <div class="row g-3">
                        <div class="col-md-4">
                            <div class="p-3 bg-white rounded shadow-sm border text-center">
                                <i class="bi bi-trophy text-warning fs-1"></i>
                                <h5 class="mt-2 fw-bold">Sport</h5>
                                <p class="small text-muted mb-0">Atletika a florbal</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="p-3 bg-white rounded shadow-sm border text-center">
                                <i class="bi bi-laptop text-primary fs-1"></i>
                                <h5 class="mt-2 fw-bold">Technologie</h5>
                                <p class="small text-muted mb-0">Pomoc s PC & IT</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="p-3 bg-white rounded shadow-sm border text-center">
                                <i class="bi bi-people text-success fs-1"></i>
                                <h5 class="mt-2 fw-bold">Tým</h5>
                                <p class="small text-muted mb-0">Týmový hráč</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="container py-5" id="uspechy">
            <h2 class="text-center display-5 fw-bold mb-5">Mé úspěchy</h2>
            
            <div class="row g-4">
               
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm p-4 rounded-4 bg-white">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary text-white rounded-3 fs-2 mb-3" style="width: 60px; height: 60px;">
                            <i class="bi bi-award"></i>
                        </div>
                        <h3 class="h4 fw-bold">Atletické závody</h3>
                        <p class="text-secondary">Pokořil jsem rekord školy i celého turnaje ve skoku do dálky.</p>
                    </div>
                </div>

                
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm p-4 rounded-4 text-white bg-dark">
                        <div class="d-inline-flex align-items-center justify-content-center bg-warning text-dark rounded-3 fs-2 mb-3" style="width: 60px; height: 60px;">
                            <i class="bi bi-dribbble"></i>
                        </div>
                        <h3 class="h4 fw-bold">Florbalový turnaj</h3>
                        <p class="text-white-50">Díky mé skvělé obraně i útoku jsme se dokázali umístit čtvrtí z 12 týmů.</p>
                    </div>
                </div>

                
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm p-4 rounded-4 text-white bg-primary">
                        <div class="d-inline-flex align-items-center justify-content-center bg-light text-primary rounded-3 fs-2 mb-3" style="width: 60px; height: 60px;">
                            <i class="bi bi-tools"></i>
                        </div>
                        <h3 class="h4 fw-bold">IT Podpora</h3>
                        <p class="text-white-50">lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Patka -->
    <footer class="bg-dark text-white text-center py-4 mt-5">
        <div class="container">
            <p class="mb-0 text-white-50">&copy; 2026 Tim Vyhnálek. Všechna práva vyhrazena.</p>
        </div>
    </footer>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>