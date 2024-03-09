<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Asa Ican Video Call - Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            background: #ffe6f2;
            font-family: 'Georgia', serif;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        #login-container {
            max-width: 300px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background: #fff;
            text-align: center;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #ff80b3;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <div id="login-container">
        <h2>Login</h2>
        <form id="login-form">
            <label for="username">Username:</label>
            <input type="text" id="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" required>

            <button type="button" onclick="login()">Login</button>
        </form>
    </div>

    <script>
        function login() {
            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;

            // Simulasi autentikasi
            if ((username === 'ichsan' && password === 'cintanyafasya') || (username === 'fasya' && password === 'cintanyaichsan')) {
                // Menyimpan status login di sessionStorage
                sessionStorage.setItem('isAuthenticated', true);
                alert('Login berhasil!');
                window.location.href = 'index.html';
            } else {
                // Menampilkan pesan khusus ketika login gagal
                alert('Login gagal. Terdeteksi bahwa Anda bukan pacar saya.');
                // Langsung arahkan ke link YouTube setelah klik "OK" pada konfirmasi
                window.location.href = 'https://www.youtube.com/watch?v=gIAcdAWsR5o&ab_channel=NoraMusik';
            }
        }
    </script>

    <script>
        // Cek status autentikasi di sessionStorage
        const isAuthenticated = sessionStorage.getItem('isAuthenticated');

        // Jika tidak terautentikasi, redirect ke halaman cerita
        if (!isAuthenticated) {
            window.location.href = 'opening.html';
        }
    </script>

</body>
</html>
