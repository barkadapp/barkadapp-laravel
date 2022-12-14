<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ url('css/home.css') }}">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <title>BARKADAPP</title>
</head>
<header>
    <div class="title-header">
        <img src="/img/barkadapp logo.png" class='logo-img'>
        BARKADAPP
    </div>

</header>

<body>
    <div class='main'>
        <div class="user-form">
            <a href="{{ URL::to('/bidding'); }}" class="user-button">
                <button class="user-button-btn">
                    <box-icon class="icon" type='solid' name='edit'></box-icon>
                    Create Bidding
                </button>
            </a>

        </div>

        <img src="/img/coffee.svg" class='home-img'>
    </div>

</body>

<div class="custom-shape-divider-bottom-1662909873">
    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
    </svg>
</div>

</html>
