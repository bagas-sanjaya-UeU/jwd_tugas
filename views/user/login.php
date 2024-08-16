<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="container mt-4 text-center ">
        <div class="row align-items-center">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h1>Login Aplikasi Pariwisata Banten</h1>
                        <form action="index.php?controller=auth&action=login" method="post">
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" name="username" id="username" required autofocus>

                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" id="exampleInputPassword1" required autofocus>
                            </div>
                            <p>Belum punya akun? <a href="index.php?controller=auth&action=register">Register </a></p>

                            <button type="submit" class="btn btn-primary">Masuk</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        console.log(`
        %cJangan ubah-ubah kode program ini ya, nanti error loh!
        Biarlah kode program ini seperti semula
        Dibuat dengan ❤️ oleh Charderra Sanjaya

        `, 'color: #FFC300 ; font-size: 16px;');
    </script>

</body>

</html>