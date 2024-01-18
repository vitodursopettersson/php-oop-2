<?php
include_once __DIR__ . '/db.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boolpet</title>

    <!-- Link Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>

    <!-- Header -->
    <header>

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary">

            <!-- Container -->
            <div class="container-fluid">

                <!-- Menu Mobile -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Navbar -->
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">

                    <!-- Brand -->
                    <a class="navbar-brand" href="#">Hidden brand</a>

                    <!-- Menu -->
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                        <!-- Menu Item -->
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>

                        <!-- Menu Item -->
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>

                        <!-- Menu Item -->
                        <li class="nav-item">
                            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>

                    <!-- Search Input -->
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>

                </div>

            </div>

        </nav>
    </header>

    <!-- Main -->
    <main>

        <!-- Hero -->
        <div class="contrainer-md">
            <h1>Shop</h1>
            <h4>Cani e gatti</h4>
        </div>

        <!-- Main -->
        <div class="container-md">
            <div class="row">

                <!-- Left Column -->
                <div class="col-3">

                    <!-- Price Range -->
                    <div class="card" style="width: 18rem;">
                        <div class="card-header">
                            Featured
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">An item</li>
                        </ul>
                    </div>

                    <div class="card" style="width: 18rem;">
                        <div class="card-header">
                            Featured
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">An item</li>
                        </ul>
                    </div>

                    <div class="card" style="width: 18rem;">
                        <div class="card-header">
                            Featured
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">An item</li>
                        </ul>
                    </div>

                    <div class="card" style="width: 18rem;">
                        <div class="card-header">
                            Featured
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">An item</li>
                        </ul>
                    </div>

                </div>

                <!-- Right Column -->
                <div class="col-9 d-flex flex-wrap gap-4">

                    <?php foreach ($products as $product) : ?>
                        <!-- Product Card -->
                        <div class="card" style="width: 18rem;">
                            <img src="<?php $product->get_img(); ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <?php $product->get_name(); ?>
                                </h5>
                                <p class="card-text"> <?php $product->get_price(); ?> €</p>
                                <a href="#" class="btn btn-primary">Aggiungi al carrello</a>
                            </div>
                        </div>
                    <?php endforeach ?>

                </div>

            </div>

        </div>

    </main>

</body>

</html>