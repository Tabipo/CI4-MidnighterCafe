<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Midnighter Cafe</title>
</head>
<style>
    #navbar-link {
        color: white;
        font-family: Cambria;
        text-decoration: none;
    }

    #navbar-link:hover {
        color: #f7c5a5ff;
    }

    .content-banner {
        padding-top: 4rem;
        padding-right: 20px;
        padding-left: 20px;
        padding-bottom: 4rem;
        position: relative;
    }

    .jumbotron {
        width: 100%;
        max-width: 90vw;
        min-width: fit-content;
        height: auto;
        min-height: fit-content;
        background-color: #FDF9F6;
        padding: 2rem;
        border-radius: 1rem;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
</style>

<body style="background-color: #ecdfd4ff;">
    <header class="shadow py-3" style="background-color: #341c61a7;">
        <div class="container-fluid">
            <div class="align-items-center text-center row">

                <!-- Site name -->
                <div class="col-3 fw-bold fs-5">
                    <a href="#" id="navbar-link">Midnighter Cafe</a>
                </div>

                <!-- Navigation -->
                <div class="col-6">
                    <nav class="d-flex justify-content-center gap-4">
                        <a href="#" id="navbar-link" class="fw-semibold">About</a>
                        <a href="#" id="navbar-link" class="fw-semibold">Menu</a>
                        <a href="#" id="navbar-link" class="fw-semibold">Stores</a>
                    </nav>
                </div>

                <!-- Profile -->
                <div class="col-3 fw-semibold">
                    <a href="#" id="navbar-link">User<img src="backend/app/public/assets/Coffee-Clipart.png" alt="Profile" width="30" height="30"></a>
                </div>
            </div>
        </div>
    </header>
    <div class="container-fluid">
        <div class="row">
            <div class="align-items-center text-center row">
                <div class="col-2">
                    <!--FOR SPACING -->
                </div>
                <div class="px-0 content-banner col-md-8">
                    <div class="jumbotron banner">
                        <h1 style="font-family: Cambria"> Site under construction...<br>
                        </h1>
                    </div>
                </div>
                <div class="col-2">
                    <!--FOR SPACING -->
                </div>
            </div>
        </div>
    </div>
</body>

</html>