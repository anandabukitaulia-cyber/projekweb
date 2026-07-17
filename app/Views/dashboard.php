<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #fdfbf7;
            color: #332f2c;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        .card {
            background: white;
            padding: 3rem;
            border-radius: 16px;
            box-shadow: 0 10px 25px rgba(166, 124, 82, 0.1);
            text-align: center;
        }
        h1 {
            color: #c29b71;
            margin-bottom: 1rem;
        }
        .btn-logout {
            display: inline-block;
            margin-top: 2rem;
            padding: 0.75rem 1.5rem;
            background: #e11d48;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-weight: 600;
            transition: background 0.3s;
        }
        .btn-logout:hover {
            background: #be123c;
        }
    </style>
</head>
<body>

    <div class="card">
        <h1>Selamat Datang!</h1>
        <p>Anda berhasil login dengan email: <strong><?= session()->get('email') ?></strong></p>
        <a href="<?= base_url('logout') ?>" class="btn-logout">Logout</a>
    </div>

</body>
</html>
