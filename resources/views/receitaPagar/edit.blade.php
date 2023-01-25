@extends('basico.basico')

@section('titulo', $titulo)

@section('conteudo')

    <div style="text-align: center">
        <h3> BEM VINDO A TELA DE CADASTRO EDIÇÃO DE RECEITA </h3>
    </div>

    <!-- form de cadastro de receita -->
    <div>
        <form action="{{ route('receita.update') }}" method="post">
            @csrf
            @method('PUT')

            <label for="">Description :</label>
            <input type="text" name="description" value="{{ $receitaPagar->description ?? old('description') }}">
            {{ $errors->has('description') ? $errors->first('description') : '' }}

            <br>
            <br>

            <label for="">clientName :</label>
            <input type="text" name="clientName" value="{{ $receitaPagar->clientName ?? old('clientName') }}">
            {{ $errors->has('clientName') ? $errors->first('clientName') : '' }}

            <br>
            <br>

            <label for="">CNPJ</label>
            <input type="text" name="cnpj" value="{{ $receitaPagar->cnpj ?? old('cnpj') }}">
            {{ $errors->has('cnpj') ? $errors->first('cnpj') : '' }}

            <br>
            <br>

            <label for="">valor</label>
            <input type="text" name="value" value="{{ $receitaPagar->value ?? old('value') }}">
            {{ $errors->has('value') ? $errors->first('value') : '' }}


            <label for="">Data de vencimento</label>
            <input type="datetime-local" name="dueDate" value="{{ $receitaPagar->dueDate ?? old('dueDate') }}">
            {{ $errors->has('dueDate') ? $errors->first('dueDate') : '' }}

            <label for="">Data de pagamento</label>
            <input type="datetime-local" name="payDate" value="{{ $receitaPagar->payDate ?? old('payDate') }}">
            {{ $errors->has('payDate') ? $errors->first('payDate') : '' }}

            <br>
            <br>

            <label for="">status</label>
            <section>
                <option value="">{{ $receitaPagar->status }}</option>
                <option value="pago"></option>
                <option value="pendente"></option>
            </section>
            {{ $errors->has('status') ? $errors->first('status') : '' }}
            <button>Enviar</button>
        </form>
    </div>

@endsection
