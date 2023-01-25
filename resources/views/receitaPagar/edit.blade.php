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
            <input type="text" name="description">

            <br>
            <br>

            <label for="">clientName :</label>
            <input type="text" name="clientName">

            <br>
            <br>

            <label for="">CNPJ</label>
            <input type="text" name="cnpj">

            <br>
            <br>

            <label for="">valor</label>
            <input type="text" name="value">

            <label for="">Data de vencimento</label>
            <input type="datetime-local" name="dueDate">

            <label for="">Data de pagamento</label>
            <input type="datetime-local" name="payDate">

            <br>
            <br>

            <label for="">status</label>
            <section>
                <option value="pago"></option>
                <option value="pendente"></option>
            </section>
            <button>Enviar</button>
        </form>
    </div>

@endsection
