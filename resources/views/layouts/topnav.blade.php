@if(Auth::user())
<nav class="navbar navbar-transparent navbar-absolute">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Que sirvan</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                {{-- <li>
                    <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="material-icons">dashboard</i>
                        <p class="hidden-lg hidden-md">Dashboard</p>
                    </a>
                </li> --}}
                {{-- <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="material-icons">down</i>
                        <span class="notification">5</span>
                        <p class="hidden-lg hidden-md">Notifications</p>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Mike John responded to your email</a></li>
                        <li><a href="#">You have 5 new tasks</a></li>
                        <li><a href="#">You're now friend with Andrew</a></li>
                        <li><a href="#">Another Notification</a></li>
                        <li><a href="#">Another One</a></li>
                    </ul>
                </li> --}}
                <li class="dropdown">
                    <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                       <i class="material-icons">person</i>
                       <p class="hidden-lg hidden-md">Profile</p>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="{{url('/profile')}}">Editar Perfil</a></li>
                        <li><a href="{{url('/logout')}}">Cerrar Sesion</a></li>
                    </ul>
                </li>
            </ul>


                {{-- <form role="search" class="navbar-form navbar-right" method="GET" action="{{ url('/search') }}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input autofocus type="text" placeholder="Introduce busqueda..." class="form-control" name="value" id="value">
                        <input type="hidden" placeholder="Introduce busqueda..." class="form-control" name="id" id="id">
                    </div>
                </form> --}}

            <form class="navbar-form navbar-right" role="search" method="GET" action="{{ url('/search') }}">
                {{ csrf_field() }}
                <div class="form-group  selectpicker is-empty">
                    <input type="text" placeholder="Introduce busqueda..." class="form-control" name="value" id="value">
                    <span class="material-input"></span>
                    <input type="hidden" placeholder="Introduce busqueda..." class="form-control" name="id" id="id">
                </div>
                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                    <i class="material-icons">search</i><div class="ripple-container"></div>
                </button>
            </form>
        </div>
    </div>
</nav>

@endif
