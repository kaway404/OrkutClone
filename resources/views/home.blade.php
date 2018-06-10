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


    <div class="uk-position-relative uk-visible-toggle uk-light news" uk-slider>

    <p style="font-size: 18px; color: #1e87f0;">Amigos sugeridos</p>

    <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m">
        <li>
            <img src="/img/avatar/{{ Auth::user()->photo }}" alt="">
            <div class="uk-position-center uk-panel"><h1>1</h1></div>
        </li>
        <li>
            <img src="/img/avatar/{{ Auth::user()->photo }}" alt="">
            <div class="uk-position-center uk-panel"><h1>2</h1></div>
        </li>
        <li>
            <img src="/img/avatar/{{ Auth::user()->photo }}" alt="">
            <div class="uk-position-center uk-panel"><h1>3</h1></div>
        </li>
        <li>
            <img src="/img/avatar/{{ Auth::user()->photo }}" alt="">
            <div class="uk-position-center uk-panel"><h1>4</h1></div>
        </li>
        <li>
            <img src="/img/avatar/{{ Auth::user()->photo }}" alt="">
            <div class="uk-position-center uk-panel"><h1>5</h1></div>
        </li>
        <li>
            <img src="/img/avatar/{{ Auth::user()->photo }}" alt="">
            <div class="uk-position-center uk-panel"><h1>4</h1></div>
        </li>
        <li>
            <img src="/img/avatar/{{ Auth::user()->photo }}" alt="">
            <div class="uk-position-center uk-panel"><h1>4</h1></div>
        </li>
    </ul>

    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

</div>


    </div>


</div>
@endsection

@endguest
