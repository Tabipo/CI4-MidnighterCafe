<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <title>Midnighter Cafe</title>
</head>
<style>
    body {
        height: auto;
        width: auto;
        margin: 0;
        font-family: "Cambria";
        background-color: #eceed3;
    }

    .container-xxl {
        background-color: #eceed3;
        height: 95vh;
        width: 100%;
        text-align: left;
        padding-top: 28vh;
        padding-left: 10vw;
        padding-right: 10vw;
    }

    .container-xxl h1 {
        color: #341c61a7;
        font-weight: 750;
        font-size: 3rem;
    }

    .container-xxl p {
        color: #151e65;
        font-family: "Inter", sans-serif;
        font-weight: 500;
        font-size: 1.5rem;
        margin-bottom: 0;
        margin-top: 1.5rem;
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

    #navbar-header {
        background-color: #341c61a7;
        color: #eceed3;
        font-family: "Cambria";
        font-weight: bolder;
        padding-left: 15px;
        margin-bottom: 0;
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
    <header class="shadow py-3" id="navbar-header">
        <div class="container-fluid">
            <div class="align-items-center text-center row">
                <!--Site name-->
                <div class="col-3 fw-bold fs-5">
                    <h2 id="navbar-link"><img src="/assets/Coffee-Clipart.png" alt="Profile" width="30" height="30"> Midnighter Cafe</h2>
                </div>
            </div>
        </div>
    </header>
    <div class="container-xxl">
        <h1>Login or Sign Up</h1>
        <p>Join our artists in cooking fire art!</p>
        <form action="login_databasecheck.php" method="POST">
            <p>Username:</p>
            <input type="text" name="username" class="form-control" />
            <p>Password:</p>
            <input type="password" name="password" class="form-control" />
            <input type="submit" value="Login" class="btn" />
        </form>
        <a href="#signup">No account? Signup!<a>
    </div>
</body>

</html>