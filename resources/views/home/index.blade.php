@extends('template')

@section('content')

<section class="container row text-center" style="margin: auto; margin-top: 50px">
    <div class="col-md-6">
        <a href="{{url('/adicionar/usuario')}}">
            <img src="{{asset('/img/user.png')}}"><br> <span style="font-size: 40px">Cadastro de Usuários</span>
        </a>
    </div>
    <div class="col-md-6">
        <a href="{{url('/adicionar/configuracao')}}">
           <img src="{{asset('/img/config.png')}}"><br> <span style="font-size: 40px">Cadastro de Configurações</span>
        </a>
    </div>

</section>


@endsection