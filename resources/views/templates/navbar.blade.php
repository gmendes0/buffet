<nav class="navbar navbar-expand-lg navbar-light bg-dark shadow-sm sticky-top">
    <div class="container-fluid">
        <a href="{{route('inicio')}}" class="navbar-brand h1 mb-0">Buffet</a>

        <!-- Navbar Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navSite">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Conteúdo da navbar -->
        <div class="collapse navbar-collapse" id="navSite">
            <!-- conteúdos à esquerda -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"><a href="{{route('inicio')}}" class="nav-link">Início</a></li>

                @if(Auth::check() && Auth::user()->nivel <= 2)
                    <!-- dropdown -->
                    <li class="nav-item dropdown">
                        <!-- Dropdown Toggler -->
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Produtos</a>
                        <!-- Conteúdo -->
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="{{route('novo')}}" class="dropdown-item">Novo Produto</a>
                            <a href="{{route('register')}}" class="dropdown-item">Cadastrar Usuário</a>
                            <a href="{{route('item-tabela')}}" class="dropdown-item">Visualização em Tabela</a>
                        </div>
                    </li>
                @endif
            </ul>
            
            <!-- Direita -->
            <ul class="navbar-nav ml-auto mr-2">
                <!-- login / logoff -->
                @guest

                    <li class="nav-item"><a href="{{route('login')}}" class="nav-link">login</a></li>

                @else

                    <!-- dropdown -->
                    <li class="nav-item dropdown">
                        <!-- Dropdown Toggler -->
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">{{Auth::user()->name}}</a>
                        <!-- Conteúdo -->
                        <div class="dropdown-menu dropdown-menu-right">
                            <form action="{{route('logout')}}" method="post">
                                <input class="btn btn-link dropdown-item" type="submit" value="logout"/>
                                @csrf
                            </form>
                            <!-- <a href="{{route('novo')}}" class="dropdown-item">Novo Item</a> -->
                        </div>
                    </li>

                @endguest
            </ul>
        </div>
    </div>
</nav>