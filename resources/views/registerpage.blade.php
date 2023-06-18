
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

    <title>Register</title>

</head>
<body style="background-image: url(images/main.jpg);">
   <div class="box">
    <div class="container">

        <div class="top">
            <header>Register</header>
        </div>

        <form method="POST" action="/register">
            @csrf
            <div class="input-field">
                <input type="text" name="name" class="input" placeholder="Username" id="">
                <i class="fa fa-user" aria-hidden="true"></i>
            </div>
            <p></p>

            <div class="input-field">
                <input type="Password" name="password" class="input" placeholder="Password" id="">
                <i class="fa fa-unlock-alt" aria-hidden="true"></i>
            </div>
            <p></p>

            <div class="input-field">
                <input type="number" name="phone" class="input" placeholder="Phone" id="">
                <i class="fa fa-phone" aria-hidden="true"></i>
            </div>
            <p></p>

            <div class="input-field">
                <input type="submit" class="submit" value="Register" id="">
            </div>

            <div class="two-col">
                <div class="one">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>
                <div class="two">
                    <label><a href="/login">Already have An Account?</a></label>
                </div>
            </div>

        </form>

    </div>
</div>
</body>
</html>
