
    <div class="navbar-bg"></div>
    <nav class="navbar navbar-expand-lg main-navbar sticky" style="left: 0;">
        <div class="form-inline mr-auto">
            <ul class="navbar-nav mr-3">
                <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
									collapse-btn"> <i data-feather="align-justify"></i></a></li>
                <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                        <i data-feather="maximize"></i>
                    </a></li>
         
            </ul>
        </div>
        <ul class="navbar-nav navbar-right">
            <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link nav-link-lg message-toggle"><span class="badge headerBadge1">
             Olá   {{ Auth::user()->name }} </span> </a>
                <div class="dropdown-menu dropdown-list dropdown-menu-right pullDown">
                    <div class="dropdown-header">
                        Seja bem-vindo!
                        <div class="float-right">
                            <a href="#">{{ Auth::user()->email }}</a>
                        </div>
                    </div>
                </div>
            </li>


            <li class="dropdown"><a href="#" data-toggle="dropdown"
                                    class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image" src="actech_template/assets/img/user.png"
                                                                                                     class="user-img-radious-style"> <span class="d-sm-none d-lg-inline-block"></span></a>
                <div class="dropdown-menu dropdown-menu-right pullDown">
                    <div class="dropdown-title">OLÁ {{ Auth::user()->nome }}! </div>
                    <a href="profile.html" class="dropdown-item has-icon"> <i class="far
                                    fa-user"></i> Meu Perfil
                    </a> <a href="#" class="dropdown-item has-icon"> <i class="fas fa-cog"></i>
                        Configurações
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="{{ route('logout') }}"  class="dropdown-item has-icon text-danger"onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"> <i class="fas fa-sign-out-alt"></i>
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>
    </nav>
