
<div class="main-sidebar sidebar-style-2" >
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="#"> <span
                    class="logo-name">PATRIOTA</span>
            </a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Menu</li>
            <li class="dropdown active">
                <a href="{{ url('painel_principal') }}" class="nav-link"><i data-feather="monitor"></i><span>Tela Principal</span></a>
            </li>
            <li class="dropdown">
                <a href="{{ url('agendamento.turmas') }}" class="nav-link"><i class="fas fa-chalkboard-teacher"></i><span>Agendamentos</span></a>
            </li>
            <li class="dropdown">
                <a href="{{ url('cliente.lista') }}?id={{Auth::user()->id}}" class="nav-link"><i class="fas fa-chalkboard-teacher"></i><span>Clientes</span></a>
            </li>

            <li class="dropdown">
                <a href="{{ url('turma.lista') }}?id={{Auth::user()->id}}" class="nav-link"><i class="fas fa-chalkboard-teacher"></i><span>Turmas</span></a>
            </li>
            <li class="dropdown">
                <a href="{{ url('armas.lista') }}?id={{Auth::user()->id}}" class="nav-link"><i class="fas fa-chalkboard-teacher"></i><span>Armas</span></a>
            </li>

            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i class="fas fa-edit"></i><span>Cadastrar</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ url('cliente.lista') }}/{{Auth::user()->id}}">Clientes</a></li>
                    <li><a class="nav-link" href="{{ url('armas.cadastro') }}">Armas</a></li>
                    <li><a class="nav-link" href="{{ url('turma.cadastro') }}">Turmas</a></li>
                </ul>
            </li>
{{--            <li class="dropdown">--}}
{{--                <a href="{{ url('cliente.form_cadastro') }}" class="nav-link"><i class="fas fa-chalkboard-teacher"></i><span>Cadastrar Clientes</span></a>--}}
{{--            </li>--}}
{{--            <li class="dropdown">--}}
{{--                <a href="{{ url('armas.cadastro') }}" class="nav-link"><i class="fas fa-edit"></i><span>Cadastrar Armas</span></a>--}}
{{--            </li>--}}
{{--            <li class="dropdown">--}}
{{--                <a href="{{ url('turma.cadastro') }}" class="nav-link"><i class="fas fa-edit"></i><span>Cadastrar Turma</span></a>--}}
{{--            </li>--}}

            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i class="fas fa-cogs"></i><span>Controle de Processos</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ url('painel_principal') }}">Cadastro de Processos</a></li>
                    <li><a class="nav-link" href="widget-data.html">Processos Deferidos</a></li>
                    <li><a class="nav-link" href="widget-data.html">Processos em Análise</a></li>
                    <li><a class="nav-link" href="widget-data.html">Processos C/Pendência</a></li>
                    <li><a class="nav-link" href="widget-data.html">Processos Finalisados</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    <i class="fas fa-power-off"></i><span>Encerrar</span></a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>

        </ul>
    </aside>
</div>


