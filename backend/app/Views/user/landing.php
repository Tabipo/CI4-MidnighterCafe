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

    #info-card {
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
            <h1 style="color:#151e65; font-family: Cambria; font-weight:bold; text-align: center"> Reviews</h1>
        </div>
    </div>
    <div class="mx-5 my-5 row">
        <?= view('components/cards/review-card.php', [
            'review' => '"Great coffee and atmosphere!"',
            'author' => '- Chris B.'
        ]); ?>
        <?= view('components/cards/review-card.php', [
            'review' => '"Good menu selection"',
            'author' => '- Jane D.'
        ]); ?>
        <?= view('components/cards/review-card.php', [
            'review' => '"Workers are so nice here!"',
            'author' => '- John S.'
        ]); ?>
    </div>
    <div class="my-5 row">
        <div class="col-2">
            <!--FOR SPACING-->
        </div>
        <div class="col-8">
            <h1 style="color:#151e65; font-family: Cambria; font-weight:bold; text-align: center"> Special Promo!</h1>
        </div>
    </div>
    <div class="my-5 row">
        <div class="col-2">
            <!--FOR SPACING-->
        </div>
        <?= view('components/cards/promo-card.php', [
            'promoTitle' => 'Trio Pack',
            'promoDescription' => 'Save more with this deal! Choose 3 drinks from the all time favorite picks!'
        ]); ?>
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
        <?= view('components/cards/item-card.php', [
            'menuItem' => 'Flat White',
            'menuDescription' => 'Rich espresso with microfoam for a smooth and balanced taste.'
        ]); ?>
        <?= view('components/cards/item-card.php', [
            'menuItem' => 'Spanish Latte',
            'menuDescription' => 'Bold espresso with condensed milk sweetness for a balance of strong and sweet.'
        ]); ?>
        <?= view('components/cards/item-card.php', [
            'menuItem' => 'Americano',
            'menuDescription' => 'Espresso softened with hot water for a bold and classic taste.'
        ]); ?>
        <?= view('components/cards/item-card.php', [
            'menuItem' => 'Matcha Latte',
            'menuDescription' => 'Latte with Japans earthy green tea powder for a perfect blend of bitter and sweet.'
        ]); ?>
    </div>
    <div class="my-5 row">
        <div class="col-4">
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
    <?= view('components/footer'); ?>
</body>

</html>