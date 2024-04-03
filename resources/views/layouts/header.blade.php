<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'eJKDB - Template Page')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />
</head>
<body>
    <header>
        <!--Navigation Bar-->
        <nav>
            <ul class="sidebar">
                <li onclick="hideSidebar()"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg></a></li>
                <!--<li><a href="#">Qairull Ashraff</a></li>-->
                <li><a href="#">Faris Danish</a></li>
            </ul>
            <ul>
                <li><a href="#" style="font-size: 22px;"><b>eJKDB</b></a></li>
                <!--<li class="hideOnMobile"><a href="#">Qairull Ashraff</a></li>-->
                <li class="hideOnMobile"><a href="#"><b>@yield('username', 'Faris Danish')</b></a></li>
                <li class="menu-button" onclick="showSidebar()"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="28" viewBox="0 -960 960 960" width="28"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg></a></li>
            </ul>
        </nav>
    </header>
    <main>