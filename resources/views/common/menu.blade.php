<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand col-md-9 row" href="#">
        <img src="{{asset('img/logo-header.png')}}">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse col-md-3 row" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{url('/adicionar/usuario')}}"><i class="fa fa-user" aria-hidden="true"></i> Usuário</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/adicionar/configuracao')}}"><i class="fa fa-cog"></i> Configurações</a>
            </li>
        </ul>
    </div>
</nav>