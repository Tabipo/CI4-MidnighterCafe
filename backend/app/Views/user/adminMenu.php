<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>MidnighterCafe</title>
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

    .sidebar {
        background-color: #341c61a7;
        height: 100vh;
        padding: 20px;
        font-family: Cambria;
        font-size: 25px;
    }

    .sidebar a {
        padding: 10px;
        text-align: left;
        text-decoration: none;
        color: #ffffffff;
        border-radius: 8px;
        transition: 0.3s;
    }

    .sidebar a:hover {
        color: #eceed3;
    }

    .sidebar a.active {
        background-color: #151e65;
        color: #eceed3;
    }

    #stats-card h3 {
        color: #151e65;
        font-family: Cambria;
        font-weight: bolder;
    }

    #stats-card h5 {
        font-family: Lucida Sans;
        font-weight: bold;
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

    #add-btn {
        background-color: #341c61a7;
        color: #eceed3;
        font-family: "Cambria";
        font-weight: 500;
        font-size: 1.25rem;
        margin-left: 2.5rem;
    }

    #add-btn:hover {
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


    #footer:hover {
        color: #eceed3;
        font-family: Cambria;
        text-decoration: underline;
    }
</style>

<body>
    <div class="container-fluid">
        <div class="row">

            <!-- Sidebar -->
            <div class="d-flex flex-column col-auto sidebar">
                <p style="color: #ffffffff;"><img src="/assets/Midnighter-Cafe-Logo.png" alt="Profile" width="35" height="35" class="mx-2 rounded-2">Midnighter Cafe</p>
                <a href="/adminDashboard">Dashboard</a><br>
                <a href="/adminMenu" class="active">Menu</a><br>
                <a href="/adminOrder">Orders</a><br>
                <div class="mt-auto pt-3 border-top profile">
                    <div class="d-flex align-items-center">
                        <a href="/adminAccount" id="navbar-link"><img src="/assets/Midnighter-Cafe-Profile.png" style="vertical-align:text-bottom;" alt="Profile" width="35" height="35" class="mx-3 rounded-circle">Account</a>
                    </div>
                </div>
            </div>

            <!-- Main Content -->
            <div class="py-4 col">
                <div class="container">
                    <h1 class="mb-4" style="font-weight:bolder; font-family:Lucida Sans; color:#151e65;">Menu</h1>

                    <div class="row g-4" id="stats-card">
                        <div class="col-md-12">
                            <div class="shadow p-3 text-left card">
                                <div class="row" id="stats-card">
                                    <div class="col-10">
                                        <h3 style="margin-bottom: 0px;">Coffee</h3>
                                    </div>
                                    <div class="col-2">
                                        <?= view('components/buttons/button-border.php', [
                                            'id' => 'add-btn',
                                            'value' => '+ Add Item'
                                        ]); ?>
                                    </div>
                                    <div class="row g-4" id="stats-card" style="margin-top: 0px;">
                                        <div class="col-md-3">
                                            <div class="align-items-center shadow p-3 text-center card">
                                                <img src="/assets/Coffee-Clipart.png" id="item-pic" style="margin:2rem;" width="100" height="100" alt="Flat White">
                                                <h3>Flat White</h3>
                                                <form action="#">
                                                    <?= view('components/buttons/button-border.php', [
                                                        'id' => 'border-btn',
                                                        'value' => 'Edit'
                                                    ]); ?>
                                                    <?= view('components/buttons/button-secondary.php', [
                                                        'id' => 'secondary-btn',
                                                        'value' => 'Remove'
                                                    ]); ?>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="align-items-center shadow p-3 text-center card">
                                                <img src="/assets/Coffee-Clipart.png" id="item-pic" style="margin:2rem;" width="100" height="100" alt="Spanish Latte">
                                                <h3>Spanish Latte</h3>
                                                <form action="#">
                                                    <?= view('components/buttons/button-border.php', [
                                                        'id' => 'border-btn',
                                                        'value' => 'Edit'
                                                    ]); ?>
                                                    <?= view('components/buttons/button-secondary.php', [
                                                        'id' => 'secondary-btn',
                                                        'value' => 'Remove'
                                                    ]); ?>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="align-items-center shadow p-3 text-center card">
                                                <img src="/assets/Coffee-Clipart.png" id="item-pic" style="margin:2rem;" width="100" height="100" alt="Americano">
                                                <h3>Americano</h3>
                                                <form action="#">
                                                    <?= view('components/buttons/button-border.php', [
                                                        'id' => 'border-btn',
                                                        'value' => 'Edit'
                                                    ]); ?>
                                                    <?= view('components/buttons/button-secondary.php', [
                                                        'id' => 'secondary-btn',
                                                        'value' => 'Remove'
                                                    ]); ?>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="align-items-center shadow p-3 text-center card">
                                                <img src="/assets/Coffee-Clipart.png" id="item-pic" style="margin:2rem;" width="100" height="100" alt="Matcha Latte">
                                                <h3>Matcha Latte</h3>
                                                <form action="#">
                                                    <?= view('components/buttons/button-border.php', [
                                                        'id' => 'border-btn',
                                                        'value' => 'Edit'
                                                    ]); ?>
                                                    <?= view('components/buttons/button-secondary.php', [
                                                        'id' => 'secondary-btn',
                                                        'value' => 'Remove'
                                                    ]); ?>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row g-4" id="stats-card">
                                        <div class="col-md-3">
                                            <div class="align-items-center shadow p-3 text-center card">
                                                <img src="/assets/Coffee-Clipart.png" id="item-pic" style="margin:2rem;" width="100" height="100" alt="Mocha">
                                                <h3>Mocha</h3>
                                                <form action="#">
                                                    <?= view('components/buttons/button-border.php', [
                                                        'id' => 'border-btn',
                                                        'value' => 'Edit'
                                                    ]); ?>
                                                    <?= view('components/buttons/button-secondary.php', [
                                                        'id' => 'secondary-btn',
                                                        'value' => 'Remove'
                                                    ]); ?>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="align-items-center shadow p-3 text-center card">
                                                <img src="/assets/Coffee-Clipart.png" id="item-pic" style="margin:2rem;" width="100" height="100" alt="Espresso">
                                                <h3>Espresso</h3>
                                                <form action="#">
                                                    <?= view('components/buttons/button-border.php', [
                                                        'id' => 'border-btn',
                                                        'value' => 'Edit'
                                                    ]); ?>
                                                    <?= view('components/buttons/button-secondary.php', [
                                                        'id' => 'secondary-btn',
                                                        'value' => 'Remove'
                                                    ]); ?>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="align-items-center shadow p-3 text-center card">
                                                <img src="/assets/Coffee-Clipart.png" id="item-pic" style="margin:2rem;" width="100" height="100" alt="Frappuccino">
                                                <h3>Frappuccino</h3>
                                                <form action="#">
                                                    <?= view('components/buttons/button-border.php', [
                                                        'id' => 'border-btn',
                                                        'value' => 'Edit'
                                                    ]); ?>
                                                    <?= view('components/buttons/button-secondary.php', [
                                                        'id' => 'secondary-btn',
                                                        'value' => 'Remove'
                                                    ]); ?>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="align-items-center shadow p-3 text-center card">
                                                <img src="/assets/Coffee-Clipart.png" id="item-pic" style="margin:2rem;" width="100" height="100" alt="Caramel Macchiato">
                                                <h3>Caramel Macchiato</h3>
                                                <form action="#">
                                                    <?= view('components/buttons/button-border.php', [
                                                        'id' => 'border-btn',
                                                        'value' => 'Edit'
                                                    ]); ?>
                                                    <?= view('components/buttons/button-secondary.php', [
                                                        'id' => 'secondary-btn',
                                                        'value' => 'Remove'
                                                    ]); ?>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?= view('components/footer'); ?>
</body>

</html>