<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{ mix('first-package/assets/style.css') }}">
</head>
<body>
<section>
    <div class="container">
        <div id="scene">
            <div class="layer" data-depth-x="-0.5" data-depth-y="0.25">
                <img src="{{ mix('first-package/assets/images/moon.png') }}" alt="moon">
            </div>
            <div class="layer" data-depth-x="0.15">
                <img src="{{ mix('first-package/assets/images/mountains02.png') }}" alt="mountains02">
            </div>
            <div class="layer" data-depth-x="0.25">
                <img src="{{ mix('first-package/assets/images/mountains01.png') }}" alt="mountains01">
            </div>
            <div class="layer" data-depth-x="-0.25">
                <img src="{{ mix('first-package/assets/images/road.png') }}" alt="road">
            </div>
        </div>
    </div>

    <form class="login">
        <h2>Sign In</h2>
        <div class="inputBox">
            <input type="text" placeholder="Username">
        </div>
        <div class="inputBox">
            <input type="password" placeholder="Password">
        </div>
        <div class="inputBox">
            <input type="submit" value="Login" id="btn">
        </div>

        <div class="group">
            <a href="#">Forget Passworld</a>
            <a href="#">Signup</a>
        </div>
    </form>
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js" integrity="sha512-/6TZODGjYL7M8qb7P6SflJB/nTGE79ed1RfJk3dfm/Ib6JwCT4+tOfrrseEHhxkIhwG8jCl+io6eaiWLS/UX1w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    let scene = document.getElementById("scene");
    let parallax = new Parallax(scene);
</script>
</body>
</html>
