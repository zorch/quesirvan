<div class="sidebar" data-active-color="orange" data-background-color="black" style="position:fixed;" data-image="{{ asset('img/sidebar-1.jpg')}}">
    <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
    @if(Auth::user())
    <div class="logo">
        <a href="{{url('/')}}" class="simple-text">
            <img alt="image" class="" style="max-width: 50px;" src="{{asset('img/logo_white.png') }}">
        </a>
    </div>
    <div class="logo logo-mini">
        <a href="{{url('/')}}" class="simple-text">
            SDA
        </a>
    </div>
    <div class="sidebar-wrapper">
        <div class="user">
            <div class="photo">
                <img alt="image" class="img-circle" src="{{ Auth::user()->avatar_path ? Storage::url('users/'. Auth::user()->id . '/' . get_thumbnail(Auth::user()->avatar_path)): Storage::url('users/default.png')}}">
            </div>
            <div class="info">
                <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                    {{Auth::user()->name}}
                    <b class="caret"></b>
                </a>
                <div class="collapse" id="collapseExample">
                    <ul class="nav">
                        <li>
                            <a href="{{url('/profile')}}">Editar Perfil</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <ul class="nav">
            <li @yield('attr_navlink_1')>
            <a href="{{url('/')}}">
                <i class="material-icons">home</i>
                <p>Inicio
                </p>
            </a>
            </li>
            <li @yield('attr_navlink_2')>
            <a href="{{url('/officials')}}">
                <i class="material-icons">group</i>
                <p>Funcionarios
                </p>
            </a>
            </li>

            <li @yield('attr_navlink_2')>
            <a href="{{url('/reports')}}">
                <i class="material-icons">equalizer</i>
                <p>Reportes
                </p>
            </a>
            </li>

            <li @yield('attr_navlink_2')>
            <a href="{{url('/users')}}">
                <i class="material-icons">face</i>
                <p>Usuarios
                </p>
            </a>
            </li>
        </ul>
    </div>
    @else
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li @yield('attr_navlink_1')>
            <a href="{{url('/')}}">
                <i class="material-icons">home</i>
                <p>Inicio
                </p>
            </a>
            </li>
        </ul>
    </div>
    @endif
    asdf
</div>
