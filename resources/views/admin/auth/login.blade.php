<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    @vite('resources/css/app.css') {{-- If you use Laravel with Vite & Tailwind --}}
    <style>
        /* If Tailwind is not installed, fallback custom CSS */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #4f46e5, #3b82f6);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .login-card {
            background: #fff;
            padding: 2rem;
            border-radius: 1rem;
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 400px;
        }
        .login-card h2 {
            font-size: 1.8rem;
            font-weight: bold;
            color: #1e293b;
            margin-bottom: 1rem;
            text-align: center;
        }
        .login-card input {
            width: 100%;
            padding: 0.8rem;
            margin-bottom: 1rem;
            border: 1px solid #cbd5e1;
            border-radius: 0.5rem;
            outline: none;
            transition: border 0.3s;
        }
        .login-card input:focus {
            border-color: #3b82f6;
        }
        .login-btn {
            width: 100%;
            padding: 0.8rem;
            background: #3b82f6;
            color: white;
            border: none;
            border-radius: 0.5rem;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.3s;
        }
        .login-btn:hover {
            background: #2563eb;
        }
        .login-card p {
            text-align: center;
            margin-top: 1rem;
            color: #64748b;
        }
        .login-card a {
            color: #3b82f6;
            text-decoration: none;
            font-weight: 500;
        }
        .login-card a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-card">
        <h2>Admin Login</h2>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <input type="email" name="email" placeholder="Email Address" required>
            <input type="password" name="password" placeholder="Password" required>

            <button type="submit" class="login-btn">Login</button>
        </form>

        <p>Forgot your password? <a href="#">Reset here</a></p>
    </div>
</body>
</html>
