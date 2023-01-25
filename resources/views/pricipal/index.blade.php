@extends('basico.basico')

@section('titulo', $titulo)

@section('conteudo')


    <div style="text-align: center; margin-top: 25px"  >
        <a href="{{ route('receita.create') }}">Nova receita</a>
        <br>
        <a href="{{ route('receita.index') }}" style="margin-top: 35px">Consulta recita</a>
    </div>

@endsection
