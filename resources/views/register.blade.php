<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <title>REGISTER</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
    <!-- Styles -->
    <style>
        .hidden {
            transform: translateX(-16rem);
            transition: transform 300ms ease-out;
        }

        .sidebar {
            background-color: #ffffff;
            width: 16rem;
            height: 100vh;
            padding: 16px 10px 0 0;
            position: fixed;
            transition: transform 300ms ease-in;
            top: 0;
        }

        .menu {
            width: 32px;
        }

        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
        }

        h1 {
            font-family: 'Poppins', sans-serif;
            font-size: 20px;
            font-weight: bold;
            color: #21BF73;
        }

        .container {
            width: 100%;
            max-width: 480px;
        }

        a {
            text-decoration: none;
        }
        .menu-sidebar{
            padding: 4px 6px;
            border-radius: 0.5rem;
        }
        .menu-sidebar:hover {
            color: #F1F864;
            background-color: #F1F864;
            transition-property: all;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 150ms;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #F1F864;
            padding: 10px;
            padding-top: 20px;
            box-shadow:
                0px 12.6px 10px rgba(0, 0, 0, 0.092),
                0px 88px 80px rgba(0, 0, 0, 0.07);
        }

        .title-container {
            background: white;
            padding: 5px 0px 5px 0px;
        }

        .image {
            padding: 0px;
            margin: 0px;
            height: 273px;
            width: 100%;
            max-width: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: contain;
        }

        .header-title {
            color: #21BF73;
            font-size: 24px;
            font-weight: bold;
            text-align: center;
        }

        #content {
            background: #FAF8ED;
        }

        .main {
            align-items: center;
            text-align: center;
            padding: 10px 70px 10px 70px;
        }

        .main-content {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .section h3 {
            font-size: 18px;
            margin-bottom: 5px;
            align-items: center;
        }

        .section p {
            line-height: 1.5;
            margin-bottom: 20px;
            /* Add spacing between sections */
            align-items: center;
        }

        /* Mobile Responsive Styles */
        @media only screen and (max-width: 768px) {
            .main-content {
                flex-direction: column;
            }
        }

        .poppins-thin {
            font-family: "Poppins", sans-serif;
            font-weight: 100;
            font-style: normal;
        }

        .poppins-extralight {
            font-family: "Poppins", sans-serif;
            font-weight: 200;
            font-style: normal;
        }

        .poppins-light {
            font-family: "Poppins", sans-serif;
            font-weight: 300;
            font-style: normal;
        }

        .poppins-regular {
            font-family: "Poppins", sans-serif;
            font-weight: 400;
            font-style: normal;
        }

        .poppins-medium {
            font-family: "Poppins", sans-serif;
            font-weight: 500;
            font-style: normal;
        }

        .poppins-semibold {
            font-family: "Poppins", sans-serif;
            font-weight: 600;
            font-style: normal;
        }

        .poppins-bold {
            font-family: "Poppins", sans-serif;
            font-weight: 700;
            font-style: normal;
        }

        .poppins-extrabold {
            font-family: "Poppins", sans-serif;
            font-weight: 800;
            font-style: normal;
        }

        .poppins-black {
            font-family: "Poppins", sans-serif;
            font-weight: 900;
            font-style: normal;
        }

        .poppins-thin-italic {
            font-family: "Poppins", sans-serif;
            font-weight: 100;
            font-style: italic;
        }

        .poppins-extralight-italic {
            font-family: "Poppins", sans-serif;
            font-weight: 200;
            font-style: italic;
        }

        .poppins-light-italic {
            font-family: "Poppins", sans-serif;
            font-weight: 300;
            font-style: italic;
        }

        .poppins-regular-italic {
            font-family: "Poppins", sans-serif;
            font-weight: 400;
            font-style: italic;
        }

        .poppins-medium-italic {
            font-family: "Poppins", sans-serif;
            font-weight: 500;
            font-style: italic;
        }

        .poppins-semibold-italic {
            font-family: "Poppins", sans-serif;
            font-weight: 600;
            font-style: italic;
        }

        .poppins-bold-italic {
            font-family: "Poppins", sans-serif;
            font-weight: 700;
            font-style: italic;
        }

        .poppins-extrabold-italic {
            font-family: "Poppins", sans-serif;
            font-weight: 800;
            font-style: italic;
        }

        .poppins-black-italic {
            font-family: "Poppins", sans-serif;
            font-weight: 900;
            font-style: italic;
        }

    </style>
</head>

<body style="display: flex; min-height: h-screen">
    <div style="width: 100%; height: full; background-color: #F8FAFD;"></div>
    <div class="container">
        <header class="header h1">
            <div class="logo">
                <img src="{{ asset('assets/logo.png') }}" alt="RSU Fikri Medika Logo">
            </div>
            <button id="openToggle" style="background-color: transparent; border: none; cursor:pointer">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                    stroke="#21BF73" class="menu">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
        </header>

        <p class="header-title poppins-bold">Profil RSU Fikri Medika</p>

        <section id="content">

            <div class="image" style="background-image: url('./assets/image 5.png')">
                <img src="{{ asset ('assets/image 5.png') }}" style="visibility: hidden">
            </div>

            <main class="main" class="h1">
                <section>
                <div class="container mt-5">
    <h2 class="text-center">Register</h2>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="form-group">
            <label for="name">Nama Lengkap</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
       <div class="form-group">
            <label for="no">No Telepon</label>
            <input type="no" class="form-control" id="no" name="no" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
   
        <button type="submit" class="btn btn-primary">Daftar</button>
    </form>
    <p>Sudah memiliki akun ? <a href="{{ route('login') }}">Masuk</a></p>
</div>
                </section>



            </main>

        </section>
    </div>
    @include('partials.sidebaruser')
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</body>

</html>
