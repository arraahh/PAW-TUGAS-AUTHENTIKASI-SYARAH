<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
  <style>
    * {
      font-family: 'Poppins', sans-serif;
    }

    body, html {
      height: 100%;
      margin: 0;
      background: url('/tult.jpg') no-repeat center center fixed;
      background-size: cover;

    }

    .login-container {
      height: 100vh;
    }

    .login-box {
      max-width: 400px;
      padding: 2.5rem;
      border-radius: 1rem;
      background: rgba(255, 255, 255, 0.2);
      backdrop-filter: blur(20px);
      animation: fadeIn 0.8s ease-in-out;
    }

    .login-box h2 {
      font-weight: 600;
      color: #333;
    }

    .form-label {
      font-weight: 500;
      color: #444;
    }

    .form-control {
      border-radius: 0.5rem;
    }

    .btn-primary {
      background-color:rgb(7, 90, 51);
      border: none;
      border-radius: 0.5rem;
      font-weight: 500;
    }

    .btn-primary:hover {
      background-color: #1a5cd8;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }
  </style>
</head>
<body>
  <div class="container login-container d-flex justify-content-center align-items-center">
    <div class="login-box">
      <h2 class="text-center mb-4">Login Database Mahasiswa</h2>
      <form action="{{ url('login') }}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="nama" class="form-label">Nama</label>
          <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="mb-3">
          <label for="nim" class="form-label">NIM</label>
          <input type="text" name="nim" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary w-100">Login</button>
      </form>
    </div>
  </div>
</body>
</html>
