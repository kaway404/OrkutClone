@guest



@else

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="header">
        <img src="/img/logohome.png" class="logoh">
        <div class="links">
            <button>Home</button>
            <button>Perfl</button>
            <button>Comunidades</button>
        </div>
    </div>

    <div id="panelinfo">
        <div id="photo">
            <img src="/img/avatar/{{ Auth::user()->photo }}">
        </div>
        <div id="photo-hover">
            <center>
                <p style="position: absolute;color: #fff; bottom: 0; font-size: 18px;">Mudar foto de perfil</p>
            </center>
        </div>
        <center>
            <a href="/profile/{{ Auth::user()->id }}"><p>{{ Auth::user()->name }}</p></a>
        </center>
    </div>

    <div class="panelstatus">

    </div>


</div>
@endsection

@endguest
