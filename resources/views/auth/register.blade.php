<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: rgb(10, 10, 10);
            color: white;
        }

        .login-body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card {
            background-color: rgba(255, 255, 255, 0.1); /* Adjust the opacity and color as needed */
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            padding: 20px;
            width: 400px;
        }

        .form-default {
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: white;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: none;
            background-color: #007bff;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .invalid-feedback {
            color: red;
        }

        .pt-30 {
            padding-top: 30px;
        }

        .registration {
            color: #007bff;
            text-decoration: none;
        }
    </style>
</head>

<body>
<main class="login-body">
    <div class="card">
        <!-- Login Admin -->
        <form class="form-default" method="POST" action="{{ route('register') }}">
            @csrf
            <div class="login-form">
                <!-- logo-login -->
                <div class="logo-login">
                    <a style="font-size: 1.5rem" class="btn btn-dark" href="{{ url('/') }}">GO BACK</a>
                </div>
                <h2>Or</h2>
                <div class="form-input">
                    <label for="name">Name</label>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-input">
                    <label for="name">Email</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-input">
                    <label for="name">Password</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-input">
                    <label for="name">Confirm Password</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
                <div class="form-input pt-30">
                    <input type="submit" name="submit" value="Submit">
                </div>

                <!-- Forget Password -->
                <p>Already have an account?</p>
                <a href="/login" class="registration">Login</a>
            </div>
        </form>
        <!-- /end login form -->
    </div>
</main>
</body>

</html>

