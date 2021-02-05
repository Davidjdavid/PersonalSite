@section('header')
    <header>
        <div class="navBar">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="about">About Me</a></li>
                <li><a href="projects">Projects</a></li>
                <li><a href="contact">Contact</a></li>
            </ul>
        </div>
    </header>
@endsection

@section('footer')
    <footer>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <div class="footerIcons">
            <a href="https://github.com/Davidjdavid" target="_blank" ><i class="fa fa-github"></i></a>
            <a href="https://www.linkedin.com/in/david-hazelwood-151059178/" target="_blank"><i class="fa fa-linkedin"></i></a>
            <a href="https://davehazelwood.com/blog/" target="_blank"><i class="fa fa-wordpress"></i></a>
        </div>
    </footer>
@endsection

<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="css/style.css">
    <head>
        <title>@yield('title')</title>
        @yield('header')
    </head>

    <body>
        @yield('content')
        @yield('footer')
    </body>

</html>


