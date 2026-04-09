<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar sesión</title>

    <style>
        body {
            margin: 0;
            font-family: sans-serif;
            background-color: #111827;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: white;
        }

        .card {
            background-color: #1f2937;
            padding: 40px;
            border-radius: 12px;
            width: 400px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.3);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            font-size: 14px;
            display: block;
            margin-bottom: 5px;
        }

        input {
            width: 100%;
            padding: 10px;
            border-radius: 8px;
            border: none;
            margin-bottom: 15px;
            background: #374151;
            color: white;
        }

        button {
            width: 100%;
            padding: 12px;
            border-radius: 8px;
            border: none;
            background: #3b82f6;
            color: white;
            font-weight: bold;
            cursor: pointer;
        }

        button:hover {
            background: #2563eb;
        }

        .error {
            color: #f87171;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<div class="card">

    <h2>Iniciar sesión</h2>

    @if($errors->any())
        <div class="error">{{ $errors->first() }}</div>
    @endif

    <form method="POST" action="/login">
        @csrf

        <label>Email</label>
        <input type="email" name="email" required>

        <label>Password</label>
        <input type="password" name="password" required>

        <button type="submit">Sign in</button>
    </form>

</div>

</body>
</html>