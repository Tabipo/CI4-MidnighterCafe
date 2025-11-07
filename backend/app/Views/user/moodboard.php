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
    <?= view('components/header'); ?>
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
            <?= view('components/buttons/button-primary.php', ['id' => 'primary-btn']); ?>
            <?= view('components/buttons/button-secondary.php', ['id' => 'secondary-btn']); ?>
            <?= view('components/buttons/button-border.php', ['id' => 'border-btn']); ?>
            <?= view('components/buttons/button-disabled.php', ['id' => 'disabled-btn']); ?>
        </div>
        <div class="col-4" style="background-color:grey; padding-bottom: 20px;">
            <?= view('components/buttons/button-primary.php', ['id' => 'primary-btn-dark']); ?>
            <?= view('components/buttons/button-secondary.php', ['id' => 'secondary-btn-dark']); ?>
            <?= view('components/buttons/button-border.php', ['id' => 'border-btn-dark']); ?>
            <?= view('components/buttons/button-disabled.php', ['id' => 'disabled-btn-dark']); ?>
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
    <div class="mb-5 row">
        <div class="col-2">
            <!--FOR SPACING-->
        </div>
        <?= view('components/cards/item-card.php', [
            'menuItem' => 'Mocha',
            'menuDescription' => 'Espresso mixed with chocolate for a sweet drink with a caffeine kick.'
        ]); ?>
        <?= view('components/cards/item-card.php', [
            'menuItem' => 'Frappuccino',
            'menuDescription' => 'Cold coffee topped with whipped cream and the flavor of your choice, when you want a icy sweet treat.'
        ]); ?>
    </div>
    <div class="mb-5 row">
        <div class="col-2">
            <!--FOR SPACING-->
        </div>
        <?= view('components/cards/review-card.php', [
            'review' => '"Great coffee and atmosphere!"',
            'author' => '- Chris B.'
        ]); ?>
        <?= view('components/cards/review-card.php', [
            'review' => '"Good menu selection"',
            'author' => '- Jane D.'
        ]); ?>
    </div>
    <div class="mb-5 row">
        <div class="col-2">
            <!--FOR SPACING-->
        </div>
        <?= view('components/cards/promo-card.php', [
            'promoTitle' => 'Trio Pack',
            'promoDescription' => 'Save more with this deal! Choose 3 drinks from the all time favorite picks!'
        ]); ?>
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
    <?= view('components/footer'); ?>
</body>

</html>