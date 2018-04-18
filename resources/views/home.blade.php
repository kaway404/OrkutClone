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
        <center>
            <a href="/profile/{{ Auth::user()->id }}"><p>{{ Auth::user()->name }}</p></a>
        </center>
    </div>

</div>
@endsection

@endguest
