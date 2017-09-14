<!-- PAGINA PRINCIPAL DE LA WEB PARA USUARIO -->
<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{ asset('front/css/materialize.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
    <title>Home</title>
    <style>
        .icon-block {
            padding: 0 15px;
        }
        .icon-block .material-icons {
            font-size: inherit;
        }
        .text-blue {
        @extend .blue-text, .text-lighten-4;
        }

    </style>
</head>
<body>

<div class="col s12">
    <nav class="orange darken-2">
        <div class="nav-wrapper container">
            <a href="#" data-activates="mobile-demo" class="button-collapse right"><i class="material-icons">menu</i></a>
            <a href="#!" class="brand-logo">Logo</a>
            <!--Menus-->
            <ul class="right hide-on-med-and-down">
                <!-- <li><a href="sass.html">Inicio</a></li>
                <li><a href="badges.html">Facultad</a></li>
                <li><a href="badges.html">Escuela Profesional</a></li>
                -->
                <!-- Dropdown Trigger -->
                <li>
                    <a class="dropdown-button" href="#!" data-activates="escuela_profesional" data-beloworigin="true">
                        Escuela Profesional<i class="material-icons right">arrow_drop_down</i>
                    </a>
                </li>
                <li><a href="#!">Docentes</a></li>
                <li>
                    <a class="dropdown-button" href="#!" data-activates="unidades_organicas" data-beloworigin="true">
                        Unidades Orgánicas<i class="material-icons right">arrow_drop_down</i>
                    </a>
                </li>
                <li><a href="#!">Investigación</a></li>
                <li>
                    <a class="dropdown-button" href="#!" data-activates="acreditacion" data-beloworigin="true">
                        Acreditación<i class="material-icons right">arrow_drop_down</i>
                    </a>
                </li>
                <li>
                    <a class="dropdown-button" href="#!" data-activates="posgrado" data-beloworigin="true">
                        Posgrado<i class="material-icons right">arrow_drop_down</i>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Dropdown Structure -->
    <ul id="escuela_profesional" class="dropdown-content">
        <li><a class="blue-text" href="#!">one</a></li>
        <li class="divider"></li>
        <li><a class="blue-text" href="#!" >two</a></li>
        <li class="divider"></li>
        <li><a class="blue-text" href="#!" >three</a></li>
    </ul>
    <ul id="unidades_organicas" class="dropdown-content">
        <li><a class="blue-text" href="#!">Uno</a></li>
        <li class="divider"></li>
        <li><a class="blue-text" href="#!" >Dos</a></li>
        <li class="divider"></li>
        <li><a class="blue-text" href="#!" >Tres</a></li>
    </ul>
    <ul id="acreditacion" class="dropdown-content">
        <li><a class="blue-text" href="#!">Acreditacion Uno</a></li>
        <li class="divider"></li>
        <li><a class="blue-text" href="#!" >Acreditacion Dos</a></li>
        <li class="divider"></li>
        <li><a class="blue-text" href="#!" >Acreditacion Tres</a></li>
    </ul>
    <ul id="posgrado" class="dropdown-content">
        <li><a class="blue-text" href="#!">Posgrado Uno</a></li>
        <li class="divider"></li>
        <li><a class="blue-text" href="#!" >Posgrado Dos</a></li>
        <li class="divider"></li>
        <li><a class="blue-text" href="#!" >Posgrado Tres</a></li>
    </ul>

    <!-- Mobile demo -->
    <ul class="side-nav" id="mobile-demo">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">Javascript</a></li>
        <li><a href="mobile.html">Mobile</a></li>
    </ul>
</div>

<!-- Gallery images -->
<div class="col 12 hide-on-small-only">
    <div class="slider">
        <ul class="slides">
            <li>
                <img src="https://lorempixel.com/580/250/nature/1"> <!-- random image -->
                <div class="caption center-align">
                    <h3>This is our big Tagline!</h3>
                    <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                </div>
            </li>
            <li>
                <img src="https://lorempixel.com/580/250/nature/2"> <!-- random image -->
                <div class="caption left-align">
                    <h3>Left Aligned Caption</h3>
                    <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                </div>
            </li>
            <li>
                <img src="https://lorempixel.com/580/250/nature/3"> <!-- random image -->
                <div class="caption right-align">
                    <h3>Right Aligned Caption</h3>
                    <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                </div>
            </li>
            <li>
                <img src="https://lorempixel.com/580/250/nature/4"> <!-- random image -->
                <div class="caption center-align">
                    <h3>This is our big Tagline!</h3>
                    <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                </div>
            </li>
        </ul>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col s8">
            <div class="card-panel teal lighten-2">This is a card panel with a teal lighten-2 class</div></div>
        <div class="col s4">
            <div class="card-panel teal lighten-2">This is a card panel with a teal lighten-2 class</div>
        </div>
    </div>
</div>


<div class="section no-pad-bot" id="index-banner">
    <div class="container">
        <br><br>
        <h1 class="header center orange-text">Starter Template</h1>
        <div class="row center">
            <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
        </div>
        <div class="row center">
            <a href="http://materializecss.com/getting-started.html" id="download-button" class="btn-large waves-effect waves-light orange">Get Started</a>
        </div>
        <br><br>
    </div>
</div>


<div class="container">
    <div class="section">

        <!--   Icon Section   -->
        <div class="row">
            <div class="col s12 m4">
                <div class="icon-block">
                    <h2 class="center light-blue-text"><i class="material-icons">flash_on</i></h2>
                    <h5 class="center">Speeds up development</h5>

                    <p class="light">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.</p>
                </div>
            </div>

            <div class="col s12 m4">
                <div class="icon-block">
                    <h2 class="center light-blue-text"><i class="material-icons">group</i></h2>
                    <h5 class="center">User Experience Focused</h5>

                    <p class="light">By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.</p>
                </div>
            </div>

            <div class="col s12 m4">
                <div class="icon-block">
                    <h2 class="center light-blue-text"><i class="material-icons">settings</i></h2>
                    <h5 class="center">Easy to work with</h5>

                    <p class="light">We have provided detailed documentation as well as specific code examples to help new users get started. We are also always open to feedback and can answer any questions a user may have about Materialize.</p>
                </div>
            </div>
        </div>

    </div>
    <br><br>
</div>

<footer class="page-footer orange">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">Company Bio</h5>
                <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


            </div>
            <div class="col l3 s12">
                <h5 class="white-text">Settings</h5>
                <ul>
                    <li><a class="white-text" href="#!">Link 1</a></li>
                    <li><a class="white-text" href="#!">Link 2</a></li>
                    <li><a class="white-text" href="#!">Link 3</a></li>
                    <li><a class="white-text" href="#!">Link 4</a></li>
                </ul>
            </div>
            <div class="col l3 s12">
                <h5 class="white-text">Connect</h5>
                <ul>
                    <li><a class="white-text" href="#!">Link 1</a></li>
                    <li><a class="white-text" href="#!">Link 2</a></li>
                    <li><a class="white-text" href="#!">Link 3</a></li>
                    <li><a class="white-text" href="#!">Link 4</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            Made by <a class="orange-text text-lighten-3" href="http://materializecss.com">Materialize</a>
        </div>
    </div>
</footer>
<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="{{ asset('front/js/materialize.js') }}"></script>

<script>

    $('.dropdown-button').dropdown({
        constrainWidth: 500,
        inDuration: 300,
        outDuration: 225,
        hover: true, // Activate on hover
        belowOrigin: true, // Displays dropdown below the button
    });

    $('.button-collapse').sideNav({
        menuWidth: 200,
        edge: 'left',
        closeOnClick: true,
        draggable: true,
    });

    $(document).ready(function(){
        $('.slider').slider();
        // Pause slider
        $('.slider').slider('pause');
// Start slider
        $('.slider').slider('start');
// Next slide
        $('.slider').slider('next');
// Previous slide
        $('.slider').slider('prev');
    });
</script>
</body>
</html>