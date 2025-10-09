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

    #navbar-link {
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
    <?= view('components/header'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="content-banner col-md-12">
                <p style="font-size: 75px;"> Welcome to Midnighter Cafe!<br></p>
                <p style="font-size: 40px;">Here to serve you a cup even after hours<br></p>
            </div>
        </div>
    </div>
    <div class="my-5 row">
        <div class="col-2">
            <!--FOR SPACING-->
        </div>
        <div class="col-8">
            <h1 style="color:#151e65; font-family: Cambria; font-weight:bold; text-align: center"> All Time Favorite Picks!</h1>
            <h3 style="color:#151e65; font-family: Cambria; font-weight:bold; text-align: center">Some choices that are popular with your fellow Midnighters!</h3>
        </div>
    </div>
    <div class="my-5 row">
        <div class="col-2">
            <!--FOR SPACING-->
        </div>
        <div class="col-2">
            <div class="shadow-sm h-100 card" id="favorite-card">
                <div class="text-center card-body">
                    <img src="/assets/Coffee-Clipart.png" id="item-pic" style="margin-left:15px; margin-top:1rem; margin-bottom:2rem" width="100" height="100" alt="Popular1">
                    <h5 style="font-weight: 600;" class="card-title">Flat White</h5>
                    <p class="card-text">Rich espresso with microfoam for a smooth and balanced taste.</p>
                </div>
            </div>
        </div>
        <div class="col-2">
            <div class="shadow-sm h-100 card" id="favorite-card">
                <div class="text-center card-body">
                    <img src="/assets/Coffee-Clipart.png" id="item-pic" style="margin-left:15px; margin-top:1rem; margin-bottom:2rem" width="100" height="100" alt="Popular1">
                    <h5 style="font-weight: 600;" class="card-title">Spanish Latte</h5>
                    <p class="card-text">Bold espresso with condensed milk sweetness for a balance of strong and sweet.</p>
                </div>
            </div>
        </div>
        <div class="col-2">
            <div class="shadow-sm h-100 card" id="favorite-card">
                <div class="text-center card-body">
                    <img src="/assets/Coffee-Clipart.png" id="item-pic" style="margin-left:15px; margin-top:1rem; margin-bottom:2rem" width="100" height="100" alt="Popular1">
                    <h5 style="font-weight: 600;" class="card-title">Americano</h5>
                    <p class="card-text">Espresso softened with hot water for a bold and classic taste.</p>
                </div>
            </div>
        </div>
        <div class="col-2">
            <div class="shadow-sm h-100 card" id="favorite-card">
                <div class="text-center card-body">
                    <img src="/assets/Coffee-Clipart.png" id="item-pic" style="margin-left:15px; margin-top:1rem; margin-bottom:2rem" width="100" height="100" alt="Popular1">
                    <h5 style="font-weight: 600;" class="card-title">Matcha Latte</h5>
                    <p class="card-text">Latte with Japan's earthy green tea powder for a perfect blend of bitter and sweet.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="my-5 row">
        <div class="col-4">
            <!--FOR SPACING-->
        </div>
        <div class="col-2">
            <div class="shadow-sm h-100 card" id="favorite-card">
                <div class="text-center card-body">
                    <img src="/assets/Coffee-Clipart.png" id="item-pic" style="margin-left:15px; margin-top:1rem; margin-bottom:2rem" width="100" height="100" alt="Popular1">
                    <h5 style="font-weight: 600;" class="card-title">Mocha</h5>
                    <p class="card-text">Espresso mixed with chocolate for a sweet drink with a caffeine kick.</p>
                </div>
            </div>
        </div>
        <div class="col-2">
            <div class="shadow-sm h-100 card" id="favorite-card">
                <div class="text-center card-body">
                    <img src="/assets/Coffee-Clipart.png" id="item-pic" style="margin-left:15px; margin-top:1rem; margin-bottom:2rem" width="100" height="100" alt="Popular1">
                    <h5 style="font-weight: 600;" class="card-title">Frappuccino</h5>
                    <p class="card-text">Cold coffee topped with whipped cream and the flavor of your choice, when you want a icy sweet treat.</p>
                </div>
            </div>
        </div>
    </div>
    <?= view('components/footer'); ?>
</body>

</html>