
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <title>Login</title>

</head>
<body style="background-image: url(images/main.jpg);">
   <div class="box">
    <div class="container">

        <div class="top">

            <header>Login</header>
        </div>
        <form method="POST" action="/login">
            @csrf
            <div class="input-field">
                <input type="text" name='name' class="input" placeholder="Username" id="">
                <i class='bx bx-user' ></i>
            </div>

            <div class="input-field">
                <input type="Password" name="password" class="input" placeholder="Password" id="">
                <i class='bx bx-lock-alt'></i>
            </div>

            <div class="input-field">
                <input type="submit" class="submit" value="Login" id="">
            </div>

            <div class="two-col">
                <div class="one">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>
                <div class="two">
                    <label><a href="/register">Don't Have An Account?</a></label>
                </div>
            </div>
        </form>

    </div>
</div>
</body>
</html>
