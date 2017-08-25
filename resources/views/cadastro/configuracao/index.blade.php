@extends('template')

@section('content')

@push('scripts')
<script type="text/javascript">
    $('#so').change(function(){
       if($("#so").val() === '1'){
           $("#android").show('slow');
           $("#ios").hide('slow');
       }else if($("#so").val() === '2'){
           $("#android").hide('slow');
           $("#ios").show('slow');
       }
    });
</script>
@endpush
<section class="container row text-center" style="margin: auto; margin-top: 50px">
    <div id="escolha" class="container col-md-12" style="margin: auto; margin-bottom: 50px"> 
        <form id="formEscolha">
            <select class="form-control col-md-12" id="so">
                <option>Selecione um Sistema Operacional</option>
                <option value="1">Android</option>
                <option value="2">IOS</option>
            </select>
        </form>        
    </div>
    @include('cadastro.configuracao.android')
    @include('cadastro.configuracao.ios')
</section>


@endsection