<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm mb-5">
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
                <li class="nav-item"><a href="#" class="nav-link">Iníco</a></li>
                <!-- dropdown -->
                <li class="nav-item dropdown">
                    <!-- Dropdown Toggler -->
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Produtos</a>
                    <!-- Conteúdo -->
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="#" class="dropdown-item">Lista</a>
                        <a href="{{route('novo')}}" class="dropdown-item">Novo Produto</a>
                    </div>
                </li>
            </ul>
            
            <!-- Direita -->
            <ul class="navbar-nav ml-auto mr-2">
                <li class="nav-item"><a href="#" class="nav-link">#######</a></li>
            </ul>
        </div>
    </div>
</nav>