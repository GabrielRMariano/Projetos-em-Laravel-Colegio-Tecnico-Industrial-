@extends('layout.site')

@section('titulo','Home')

@section('conteudo')

<div class="container">
    <h3 class="center">Cursos Disponíveis</h3>

    <div class="row">
        @foreach($rows as $row)
            @if($row->publicado == 'sim')
                <div class="col s12 m4">
                    <div class="card">

                        <div class="card-image">
                            <img src="{{ asset($row->imagem) }}">
                            <span class="card-title">{{ $row->titulo }}</span>
                        </div>

                        <div class="card-content">
                            <p>{{ $row->descricao }}</p>
                            <p><strong>Valor:</strong> R$ {{ $row->valor }}</p>
                        </div>

                    </div>
                </div>
            @endif
        @endforeach
    </div>
</div>

@endsection