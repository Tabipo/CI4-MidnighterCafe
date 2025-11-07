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
                <a href="/adminDashboard" class="active">Dashboard</a><br>
                <a href="/adminMenu">Menu</a><br>
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
                    <h1 class="mb-4" style="font-weight:bolder; font-family:Lucida Sans; color:#151e65;">Overview</h1>

                    <div class="row g-4" id="stats-card">
                        <div class="col-md-4">
                            <div class="shadow p-3 text-center card">
                                <h3>Today's Sales</h3>
                                <h5>₱2,230</h5>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="shadow p-3 text-center card">
                                <h3>Orders</h3>
                                <h5>42</h5>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="shadow p-3 text-center card">
                                <h3>Best Seller</h3>
                                <h5>Spanish Latte</h5>
                            </div>
                        </div>
                    </div>
                    <div class="mt-2 row g-4" id="stats-card">
                        <div class="col-md-4">
                            <div class="shadow p-3 text-center card">
                                <h3>Expenses</h3>
                                <h5>₱1,370</h5>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="shadow p-3 text-center card">
                                <h3>Total Profit</h3>
                                <h5>₱8,740</h5>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="shadow p-3 text-center card">
                                <h3>New Customer</h3>
                                <h5>58</h5>
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