<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Midnighter Cafe</title>
</head>
<style>
    body {
        height: auto;
        width: auto;
        margin: 0;
        font-family: "Cambria";
        background-color: #eceed3;
        overflow-x: hidden;
    }

    #header {
        background-color: #341c61a7;
        color: #ffffffff;
        font-family: "Cambria";
        font-weight: bolder;
        padding: 0;
        margin: 0;
    }

    #navbar-info {
        color: white;
        font-family: "Cambria";
        text-decoration: none;
        font-size: x-large;
        padding: 0;
        margin: 0;
    }

    .form-control {
        width: 30%;
        min-width: 20rem;
        padding: 1.5rem;
        border: 2px solid #151e65;
        border-radius: 20px;
        margin-top: 0;
        margin-right: 0;
    }

    #form-card {
        padding-top: 20vh;
        padding-left: 10vw;
    }

    #form-card h1 {
        color: #341c61a7;
        font-weight: 750;
        font-size: 3rem;
    }

    #form-card p {
        color: #151e65;
        font-family: "Inter", sans-serif;
        font-weight: 500;
        font-size: 1.5rem;
        margin-bottom: 0;
        margin-top: 1.5rem;
    }

    .btn {
        background-color: #151e65;
        color: #eceed3;
        font-family: "Cambria";
        font-weight: 500;
        font-size: 1.25rem;
        margin-top: 1.5rem;
    }

    .btn:hover {
        background-color: #341c61a7;
        color: #eceed3;
    }

    #footer {
        color: white;
        font-family: "Cambria";
        text-decoration: none;
    }

    #basic-info {
        color: white;
        font-family: "Cambria";
    }

    #footer:hover {
        color: #eceed3;
        font-family: "Cambria";
        text-decoration: underline;
    }
</style>

<body>
    <?php
    $session = session();
    $errors = $session->getFlashdata('errors') ?? [];
    $old = $session->getFlashdata('old') ?? [];
    ?>
    <header class="shadow py-3" id="header">
        <div class="container-fluid">
            <div class="align-items-center text-center row">
                <!--Site name-->
                <div class="col-3">
                    <p id="navbar-info"><img src="/assets/Coffee-Clipart.png" alt="Profile" width="30" height="30"> Midnighter Cafe</p>
                </div>
            </div>
        </div>
    </header>
    <div class="row">
        <div class="col-4" id="form-card">
            <h1>Login or Sign Up</h1>
            <p>Join fellow midnighters in a cup of coffee!</p>
            <form action="/login" method="post" novalidate>
                <p>Email:</p>
                <input class="form-control"
                    id="email"
                    name="email"
                    type="email"
                    autocomplete="email"
                    required
                    value="<?= esc($old['email'] ?? '') ?>"
                    aria-invalid="<?= isset($errors['email']) ? 'true' : 'false' ?>" aria-describedby="email-error">
                <?php if (! empty($errors['email'])): ?>
                    <p style="color:#a81d1dff"><?= esc($errors['email']) ?></p>
                <?php endif; ?>
                <p>Password:</p>
                <input type="password" name="password" class="form-control" />
                <?php if (! empty($errors['password'])): ?>
                    <p style="color:#a81d1dff"><?= esc($errors['password']) ?></p>
                <?php endif; ?>
                <input type="submit" value="Login" class="btn" />
            </form>
            <a href="/signup">No account? Signup!<a>
        </div>
    </div>
</body>

</html>