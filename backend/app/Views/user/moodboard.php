<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Midnighter Cafe</title>
</head>
<style>
    body {
        background-color: #eceed3;
        height: auto;
        width: auto;
        margin: 0;
        overflow-x: hidden;
    }

    body h1,
    h3 {
        font-family: Cambria;
        color: #151e65;
        font-weight: bold;
    }

    body h4,
    p {
        font-family: Lucida Sans;
        color: #151e65;
    }

    body #navbar-link {
        color: white;
        font-family: Cambria;
        text-decoration: none;
    }

    #navbar-link:hover {
        color: #eceed3;
    }

    #item-link {
        color: black;
        font-family: Cambria;
        text-decoration: none;
    }

    #item-link:hover {
        color: #eceed3;
    }

    .content-banner {
        padding-top: 20rem;
        padding-right: 20px;
        padding-left: 20px;
        padding-bottom: 20rem;
        margin-bottom: 5rem;
        position: relative;
        background-image: url(/assets/Coffee-Background.png);
        background-size: cover;
        background-position: center;
    }

    .content-banner p {
        color: #ffffffff;
        font-family: Cambria;
        text-decoration: solid;
        text-align: center;
        font-style: italic;
    }

    #center-banner {
        margin-left: 17%;
        padding: 20px;
    }

    #center-banner-info {
        margin-left: 17%;
        padding-left: 20px;
    }

    #center-banner-info h4 {
        font-family: Cambria;
        color: #151e65;
        font-weight: bold;
    }

    #center-banner-info p {
        font-family: Lucida Sans;
        color: #151e65;
        margin: 0%;
    }

    #color-card {
        padding: 2%;
        border-width: 2px;
        border-color: #b4b4b4ff;
    }

    #primary-btn {
        background-color: #341c61a7;
        color: #eceed3;
        font-family: "Cambria";
        font-weight: 500;
        font-size: 1.25rem;
        margin-top: 1.5rem;
        margin-left: 10px;
    }

    #primary-btn:hover {
        background-color: #5b389cb6;
    }

    #secondary-btn {
        background-color: #151e65;
        color: #eceed3;
        font-family: "Cambria";
        font-weight: 500;
        font-size: 1.25rem;
        margin-top: 1.5rem;
        margin-left: 10px;
    }

    #secondary-btn:hover {
        background-color: #27338dec;
    }

    #border-btn {
        border-color: #341c61a7;
        border-width: 2px;
        color: #341c61a7;
        font-family: "Cambria";
        font-weight: 500;
        font-size: 1.25rem;
        margin-top: 1.5rem;
        margin-left: 10px;
    }

    #border-btn:hover {
        background-color: #5b389cb6;
        color: #eceed3;
    }

    #primary-btn-dark {
        background-color: #5b389cb6;
        color: #eceed3;
        font-family: "Cambria";
        font-weight: 500;
        font-size: 1.25rem;
        margin-top: 1.5rem;
        margin-left: 10px;
    }

    #primary-btn-dark:hover {
        background-color: #341c61a7;
    }

    #secondary-btn-dark {
        background-color: #27338dec;
        color: #eceed3;
        font-family: "Cambria";
        font-weight: 500;
        font-size: 1.25rem;
        margin-top: 1.5rem;
        margin-left: 10px;
    }

    #secondary-btn-dark:hover {
        background-color: #151e65;
    }

    #border-btn-dark {
        border-color: #5b389cb6;
        border-width: 2px;
        color: #5b389cb6;
        font-family: "Cambria";
        font-weight: 500;
        font-size: 1.25rem;
        margin-top: 1.5rem;
        margin-left: 10px;
    }

    #border-btn-dark:hover {
        background-color: #341c61a7;
        color: #eceed3;
    }

    #disabled-btn-dark {
        background-color: #a5a5a5a7;
        color: #dfdfdfff;
        font-family: "Cambria";
        font-weight: 500;
        font-size: 1.25rem;
        margin-top: 1.5rem;
        margin-left: 10px;
    }

    #disabled-btn {
        background-color: #7a7a7aa7;
        color: #dfdfdfff;
        font-family: "Cambria";
        font-weight: 500;
        font-size: 1.25rem;
        margin-top: 1.5rem;
        margin-left: 10px;
    }

    #favorite-card {
        background-color: #ffffffff;
        color: #151e65;
    }

    #footer {
        color: white;
        font-family: Cambria;
        text-decoration: none;
    }

    #basic-info {
        color: white;
        font-family: Cambria;
    }

    #footer:hover {
        color: #eceed3;
        font-family: Cambria;
        text-decoration: underline;
    }
</style>

<body>
    <header class="shadow py-3" style="background-color: #341c61a7;">
        <div class="container-fluid">
            <div class="align-items-center text-center row">
                <!--Site name-->
                <div class="col-3 fw-bold fs-5">
                    <a href="/" id="navbar-link"><img src="/assets/Midnighter-Cafe-Logo.png" alt="Profile" width="35" height="35" class="mx-2 rounded-2">Midnighter Cafe</a>
                </div>
                <!--Navigation-->
                <div class="col-6">
                    <nav class="d-flex justify-content-center gap-4">
                        <a href="#About" id="navbar-link" class="fw-semibold">About</a>
                        <a href="#Menu" id="navbar-link" class="fw-semibold">Menu</a>
                        <a href="#Stores" id="navbar-link" class="fw-semibold">Stores</a>
                    </nav>
                </div>
                <!--Profile-->
                <div class="col-3 fw-semibold">
                    <a href="#profile" id="navbar-link">User<img src="/assets/Midnighter-Cafe-Profile.png" alt="Profile" width="35" height="35" class="mx-3 rounded-circle"></a>
                </div>
            </div>
        </div>
    </header>
    <div class="mt-5 mb-2 row">
        <div class="col-2">
            <!--FOR SPACING-->
        </div>
        <div class="col-10">
            <h1>Moodboard</h1>
        </div>
    </div>
    <div class="my-2 row">
        <div class="col-2">
            <!--FOR SPACING-->
        </div>
        <div class="col-10">
            <p style="font-size:26px;">Visual style of Midnighter Cafe</p>
        </div>
    </div>
    <div class="my-2 row">
        <div class="col-2">
            <!--FOR SPACING-->
        </div>
        <div class="col-10">
            <h3>Color Palette</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-2">
            <!--FOR SPACING-->
        </div>
        <div class="col-10">
            <p style="font-size: 20px;"> Dark and light versions of main colors</p>
        </div>
    </div>
    <div class="row" id="center-banner-info">
        <div class="col-3">
            <h4>Main</h4>
        </div>
        <div class="col-3">
            <h4>Accent</h4>
        </div>
        <div class="col-3">
            <h4>Background</h4>
        </div>
    </div>
    <div class="row" id="center-banner">
        <div class="col-3">
            <div class="shadow h-100 card" id="color-card" style="background-color: #341c61a7;">
                <div class="p-5 text-center card-body">

                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="shadow h-100 card" id="color-card" style="background-color: #151e65;">
                <div class="p-5 text-center card-body">

                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="shadow h-100 card" id="color-card" style="background-color: #eceed3;">
                <div class="p-3 text-center card-body">

                </div>
            </div>
        </div>
    </div>
    <div class="row" id="center-banner-info">
        <div class="col-3">
            <p style="font-size: 20px;"> #341c61a7 </p>
        </div>
        <div class="col-3">
            <p style="font-size: 20px;"> #151e65 </p>
        </div>
        <div class="col-3">
            <p style="font-size: 20px;"> #eceed3 </p>
        </div>
    </div>
    <div class="row" id="center-banner">
        <div class="col-3">
            <div class="shadow h-100 card" id="color-card" style="background-color: #5b389cb6;">
                <div class="p-5 text-center card-body">

                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="shadow h-100 card" id="color-card" style="background-color: #27338dec;">
                <div class="p-5 text-center card-body">

                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="shadow h-100 card" id="color-card" style="background-color: #f8fae2ff;">
                <div class="p-3 text-center card-body">

                </div>
            </div>
        </div>
    </div>
    <div class="row" id="center-banner-info">
        <div class="col-3">
            <p style="font-size: 20px;"> #5b389cb6 </p>
        </div>
        <div class="col-3">
            <p style="font-size: 20px;"> #27338dec </p>
        </div>
        <div class="col-3">
            <p style="font-size: 20px;"> #f8fae2ff </p>
        </div>
    </div>
    <div class="mt-4 mb-2 row">
        <div class="col-2">
            <!--FOR SPACING-->
        </div>
        <div class="col-10">
            <h3>Buttons</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-2">
            <!--FOR SPACING-->
        </div>
        <div class="col-4">
            <h4>Light Mode</h4>
        </div>
        <div class="col-2">
            <h4>Dark Mode</h4>
        </div>
    </div>
    <div class="mb-4 row">
        <div class="col-2">
            <!--FOR SPACING-->
        </div>
        <div class="col-4">
            <input type="button" value="Primary" class="shadow btn" id="primary-btn">
            <input type="button" value="Secondary" class="shadow btn" id="secondary-btn">
            <input type="button" value="Border" class="shadow btn" id="border-btn">
            <input type="button" value="Disabled" class="shadow btn" id="disabled-btn">
        </div>
        <div class="col-4" style="background-color:grey; padding-bottom: 20px;">
            <input type="button" value="Primary" class="shadow btn" id="primary-btn-dark">
            <input type="button" value="Secondary" class="shadow btn" id="secondary-btn-dark">
            <input type="button" value="Border" class="shadow btn" id="border-btn-dark">
            <input type="button" value="Disabled" class="shadow btn" id="disabled-btn-dark">
        </div>
    </div>
    <div class="mt-4 mb-2 row">
        <div class="col-2">
            <!--FOR SPACING-->
        </div>
        <div class="col-10">
            <h3>Fonts</h3>
        </div>
    </div>
    <div class="mt-4 mb-2 row">
        <div class="col-2">
            <!--FOR SPACING-->
        </div>
        <div class="col-4">
            <h4 style="font-family:Cambria; font-weight:bold;">Cambria - Heading Text Example</h4>
        </div>
        <div class="col-4">
            <p style="font-size:20px;">Lucida Sans - Body Text Example</p>
        </div>
    </div>
    <div class="mt-4 mb-2 row">
        <div class="col-2">
            <!--FOR SPACING-->
        </div>
        <div class="col-10">
            <h3>Card Examples</h3>
        </div>
    </div>
    <div class="mb-5 row" id="center-banner-info">
        <div class="col-3">
            <div class="shadow-sm h-100 card" id="favorite-card">
                <div class="text-center card-body">
                    <img src="/assets/Coffee-Clipart.png" id="item-pic" style="margin-left:15px; margin-top:1rem; margin-bottom:2rem" width="100" height="100" alt="Popular1">
                    <h5 style="font-weight: 600;" class="card-title">Mocha</h5>
                    <p class="card-text">Espresso mixed with chocolate for a sweet drink with a caffeine kick.</p>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="shadow-sm h-100 card" id="favorite-card">
                <div class="text-center card-body">
                    <img src="/assets/Coffee-Clipart.png" id="item-pic" style="margin-left:15px; margin-top:1rem; margin-bottom:2rem" width="100" height="100" alt="Popular1">
                    <h5 style="font-weight: 600;" class="card-title">Spanish Latte</h5>
                    <p class="card-text">Bold espresso with condensed milk sweetness for a balance of strong and sweet.</p>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="shadow-sm h-100 card" id="favorite-card">
                <div class="text-center card-body">
                    <img src="/assets/Coffee-Clipart.png" id="item-pic" style="margin-left:15px; margin-top:1rem; margin-bottom:2rem" width="100" height="100" alt="Popular1">
                    <h5 style="font-weight: 600;" class="card-title">Frappuccino</h5>
                    <p class="card-text">Cold coffee topped with whipped cream and the flavor of your choice, when you want a icy sweet treat.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-4 mb-2 row">
        <div class="col-2">
            <!--FOR SPACING-->
        </div>
        <div class="col-10">
            <h3>Logos</h3>
        </div>
    </div>
    <div class="mt-4 mb-5 row">
        <div class="col-2">
            <!--FOR SPACING-->
        </div>
        <div class="col-4">
            <div class="shadow-sm p-3 h-100 card" id="favorite-card">
                <div class="text-center card-body">
                    <img src="/assets/Midnighter-Cafe-Logo.png" alt="Profile" width="300" height="300" class="rounded-circle">
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="shadow-sm p-3 h-100 card" id="favorite-card">
                <div class="text-center card-body">
                    <img src="/assets/Midnighter-Cafe-Logo.png" alt="Profile" width="300" height="300" class="rounded-5">
                </div>
            </div>
        </div>
    </div>
    <footer class="shadow py-3" style="background-color: #341c61a7;">
        <div class="container-fluid">
            <div class="align-items-center text-center row">

                <!--Site Name-->
                <div class="col-3 fw-bold fs-5">
                    <p id="basic-info"> 2025 &copy; Midnighter Cafe — CI4 Project</p>
                </div>
                <!--Navigation-->
                <div class="col-6">
                    <nav class="d-flex flex-column justify-content-center gap-2">
                        <a href="/moodboard" id="footer" class="fw-bold fs-5">Mood Board</a>
                        <a href="/roadmap" id="footer" class="fw-bold fs-5">Road Map</a>
                    </nav>
                </div>
                <div class="col-3 fw-bold fs-5">
                    <p id="basic-info">Contact: 123-456-7890</p>
                    <p id="basic-info">Email: MidnighterCafebiz@gmail.com</p>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>