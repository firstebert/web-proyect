<html>
<head>
    <title>LOGIN</title>
    @extends('layouts.layoutcss')
</head>
<body class="orange lighten-1">

<div class="container-login center-align card-panel">
    <div style="margin:15px 0;">
        <i class="zmdi zmdi-account-circle zmdi-hc-5x"></i>
        <p>Inicia sesión con tu cuenta</p>
    </div>
    <form method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}
        <div class="input-field">
            <input id="username" class="validate" type="text" name="username" value="{{ old('username') }}" required autofocus>
            <label for="username"><i class="zmdi zmdi-account"></i>&nbsp; Nombre</label>
            @if ($errors->has('username'))
                <span class="help-block">
                        <strong>{{ $errors->first('username') }}</strong>
                    </span>
            @endif
        </div>
        <div class="input-field col s12">
            <input class="validate" id="password" type="password" name="password" required>
            <label for="Password" ><i class="zmdi zmdi-lock" ></i>&nbsp; Contraseña</label>
            @if ($errors->has('password'))
                <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
            @endif
        </div>
        <button class="waves-effect waves-teal btn-flat">Ingresar &nbsp; <i class="zmdi zmdi-mail-send"></i></button>
    </form>
    <div class="divider" style="margin: 20px 0;"></div>
    <!-- <a href="home.html">Crear cuenta</a> -->
</div>

@extends('layouts.layoutjs')
</body>
</html>


