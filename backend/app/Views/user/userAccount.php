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
        width: 13.6vw;
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

    #stats-card h2,
    h3 {
        color: #151e65;
        font-family: Cambria;
        font-weight: bolder;
    }

    #stats-card h5,
    h4 {
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
        margin-left: 2.5rem;
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
    <?= view('components/header'); ?>
    <div class="container-fluid">
        <div class="row" style="margin-bottom: 10vh;">
            <!-- Main Content -->
            <div class="py-4 col">
                <div class="container">
                    <h1 class="mb-4" style="font-weight:bolder; font-family:Lucida Sans; color:#151e65;">Profile</h1>

                    <div class="row g-4" id="stats-card">
                        <div class="col-md-12">
                            <div class="shadow p-3 text-left card">
                                <div class="row" id="stats-card">
                                    <div class="col-10">
                                        <img src="/assets/Midnighter-Cafe-Profile.png" style="vertical-align:text-bottom; float:left;" alt="Profile" width="150" height="150" class="mx-3 rounded-circle">
                                        <h3 style="margin-bottom: 0px;">John S. Doe</h3>
                                    </div>
                                    <div class="col-1">
                                        <?= view('components/buttons/button-border.php', [
                                            'id' => 'border-btn',
                                            'value' => 'Edit'
                                        ]); ?>
                                    </div>
                                    <div class="col-1">
                                        <input type="button" value="Logout" onclick="location.href ='/login'" class="btn" id="secondary-btn" />
                                    </div>
                                    <div class="row g-4" id="stats-card" style="margin-top: 0px;">
                                        <div class="mt-5px pt-3 pl-5px border-top">
                                            <h2>Profile Information</h2>
                                            <div class="container">
                                                <div class="mt-4 row">
                                                    <div class="col-6">
                                                        <h3>First Name:</h3>
                                                        <h4>Jane</h4>
                                                    </div>
                                                    <div class="col-6">
                                                        <h3>Last Name:</h3>
                                                        <h4>Smith</h4>
                                                    </div>
                                                </div>
                                                <div class="mt-4 row">
                                                    <div class="col-6">
                                                        <h3>Middle Name:</h3>
                                                        <h4>Brynn</h4>
                                                    </div>
                                                    <div class="col-6">
                                                        <h3>Age:</h3>
                                                        <h4>20</h4>
                                                    </div>
                                                </div>
                                                <div class="mt-4 row">
                                                    <div class="col-6">
                                                        <h3>Email:</h3>
                                                        <h4>janesmith@gmail.com</h4>
                                                    </div>
                                                    <div class="col-6">
                                                        <h3>Date Joined:</h3>
                                                        <h4>8/19/2022</h4>
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
        </div>
    </div>

    <?= view('components/footer'); ?>
</body>

</html>