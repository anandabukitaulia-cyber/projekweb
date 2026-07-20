<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Premium Experience</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #c29b71;
            --primary-hover: #a67c52;
            --bg-color: #fdfbf7;
            --card-bg: rgba(255, 255, 255, 0.75);
            --text-main: #332f2c;
            --text-muted: #80776c;
            --border-color: rgba(255, 255, 255, 0.6);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }

        body {
    background: linear-gradient(-45deg, #ffd6e7, #ffc2d9, #ffb3d1, #ffe5ec);
    background-size: 400% 400%;
    animation: gradientBG 10s ease infinite;

    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    overflow: hidden;
}

@keyframes gradientBG {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}
        .login-container {
            width: 100%;
            max-width: 420px;
            padding: 2rem;
            position: relative;
            z-index: 1;
        }

        .login-card {
    background: rgba(255, 240, 246, 0.95);
    backdrop-filter: blur(20px);
    -webkit-backdrop-filter: blur(20px);
    border-radius: 24px;
    padding: 3rem 2.5rem;
    box-shadow: 0 15px 35px rgba(255, 105, 180, 0, 25);
    animation: floating 3s ease-in-out infinite;
}

@keyframes floating {
    0% { transform: translateY(0px); }
    50% { transform: translateY(-10px); }
    100% { transform: translateY(0px); }
}

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .logo-area {
            text-align: center;
            margin-bottom: 2rem;
        }

        .logo-icon {
            width: 56px;
            height: 56px;
            background: linear-gradient(135deg, #d4b895, #c29b71);
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
            box-shadow: 0 10px 25px -5px rgba(194, 155, 113, 0.4);
        }

        .logo-icon svg {
            width: 28px;
            height: 28px;
            color: white;
        }

        .title {
            font-size: 1.5rem;
            font-weight: 600;
            letter-spacing: -0.025em;
            margin-bottom: 0.5rem;
        }

        .subtitle {
            color: var(--text-muted);
            font-size: 0.875rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
            position: relative;
        }

        .form-label {
            display: block;
            font-size: 0.875rem;
            font-weight: 500;
            margin-bottom: 0.5rem;
            color: var(--text-main);
        }

        .form-input {
            width: 100%;
            background: rgba(255, 255, 255, 0.9);
            border: 1px solid rgba(194, 155, 113, 0.3);
            color: var(--text-main);
            padding: 0.875rem 1rem;
            border-radius: 12px;
            font-size: 1rem;
            transition: all 0.3s ease;
            outline: none;
        }

        .form-input:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 4px rgba(194, 155, 113, 0.15);
            background: #ffffff;
        }

        .form-input::placeholder {
            color: #b5aca1;
        }

        .forgot-password {
            position: absolute;
            right: 0;
            top: 0;
            font-size: 0.875rem;
            color: var(--primary);
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
        }

        .forgot-password:hover {
            color: var(--primary-hover);
        }

        .btn-primary {
            width: 100%;
            background: linear-gradient(135deg, #d4b895, #c29b71);
            color: white;
            border: none;
            padding: 1rem;
            border-radius: 12px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 1rem;
            box-shadow: 0 4px 12px rgba(194, 155, 113, 0.3);
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(194, 155, 113, 0.4);
            background: linear-gradient(135deg, #c29b71, #a67c52);
        }

        .btn-primary:active {
            transform: translateY(0);
        }

        .footer-text {
            text-align: center;
            margin-top: 2rem;
            font-size: 0.875rem;
            color: var(--text-muted);
        }

        .footer-text a {
            color: var(--primary);
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
        }

        .footer-text a:hover {
            color: var(--primary-hover);
        }

        /* Animated background elements */
        .blob {
            position: absolute;
            filter: blur(80px);
            z-index: 0;
            opacity: 0.6;
            animation: float 10s ease-in-out infinite;
        }

        .blob-1 {
            top: -10%;
            left: -10%;
            width: 300px;
            height: 300px;
            background: #e6d5b8;
            animation-delay: 0s;
        }

        .blob-2 {
            bottom: -20%;
            right: -10%;
            width: 400px;
            height: 400px;
            background: #efecd5;
            animation-delay: -5s;
        }

        @keyframes float {
            0%, 100% { transform: translate(0, 0) scale(1); }
            33% { transform: translate(30px, -50px) scale(1.1); }
            66% { transform: translate(-20px, 20px) scale(0.9); }
        }
    </style>
</head>
<body>

    <div class="blob blob-1"></div>
    <div class="blob blob-2"></div>

    <div class="login-container">
        <div class="login-card">
            <div class="logo-area">
                <div class="logo-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4" />
                    </svg>
                </div>
                <h1 class="title">Selamat datang</h1>
                <p class="subtitle">kembali dan datang </p>
            </div>

            <?php if(session()->getFlashdata('msg')): ?>
                <div style="background: rgba(225, 29, 72, 0.1); border: 1px solid #e11d48; color: #e11d48; padding: 1rem; border-radius: 12px; margin-bottom: 1.5rem; text-align: center; font-size: 0.875rem;">
                    <?= session()->getFlashdata('msg') ?>
                </div>
            <?php endif; ?>

            <form action="<?= base_url('login') ?>" method="POST">
                <div class="form-group">
                    <label class="form-label" for="email">Masukan Email</label>
                    <input type="email" name="email" id="email" class="form-input" placeholder="name@example.com" required>
                </div>

                <div class="form-group">
                    <label class="form-label" for="password">Password</label>
                    <a href="#" class="forgot-password">Forgot?</a>
                    <input type="password" name="password" id="password" class="form-input" placeholder="••••••••" required>
                </div>

                <button type="submit" class="btn-primary">masuk</button>
            </form>

            <div class="footer-text">
                Tidak punya akun? <a href="#">Buat baru</a>
            </div>
        </div>
    </div>

</body>
</html>
