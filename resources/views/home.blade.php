<!-- PAGINA PRINCIPAL DEL ADMINISTRADOR -->
@extends('layouts.app')

@section('title', 'TEMPLATE HOME')

@section('content')
    <div class="row">
        <article class="col s12">
            <div class="card-panel teal lighten-2">This is a card panel with a teal lighten-2 class</div>
        </article>
    </div>

    <div class="row">
        <div class="col s12">
            <div class="video-container">
                <iframe width="853" height="480" src="//www.youtube.com/embed/Q8TXgCzxEnw?rel=0" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <div class="fixed-action-btn horizontal">
        <a class="btn-floating btn-large red">
            <i class="large material-icons">mode_edit</i>
        </a>
        <ul>
            <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a></li>
            <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
            <li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
            <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
        </ul>
    </div>
@endsection