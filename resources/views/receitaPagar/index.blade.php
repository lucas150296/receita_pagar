@extends('basico.basico')

@section('titulo', $titulo)

@section('conteudo')

    <div style="width: 90%; margin-left: auto; margin-right: auto;">
        <table border="1" width="100%">
            <thead>
                <tr>
                    <th>clientName</th>
                    <th>Descrição</th>
                    <th>Valor</th>
                    <th>status</th>
                    <th>dueDate</th>
                    <th>payDate</th>
                    <td>Editar</td>
                    <td>Excluir</td>

                </tr>
                </head>
                @foreach ($apiArrey as $key => $apiArrey)
                    <tr>
                        <td>{{ $apiArrey['clientName'] }}</td>
                        <td>{{ $apiArrey['description'] }}</td>
                        <td>{{ $apiArrey['value'] }}</td>
                        <td>{{ $apiArrey['status'] }}</td>
                        <td>{{ $apiArrey['dueDate'] }}</td>
                        <td>{{ $apiArrey['payDate'] }}</td>
                        <td><a href="{{ route('receita.edit', ['apiArrey' => $apiArrey]) }}"></a></td>
                        <td>
                            <form id="form_{{ $apiArrey->id }}" method="post"
                                action="{{ route('receita.destroy', ['receitum' => $apiArrey['id']]) }}">
                                @method('DELETE')
                                @csrf
                                <a href="#"
                                    onclick="document.getElementById('form_{{ $apiArrey['id'] }}').submit()">Excluir</a>
                            </form>
                        </td>
                @endforeach

                @foreach ($receitaPagar as $key => $receitaPagar)
                    <tr>
                        <td>{{ $receitaPagar->clientName }}</td>
                        <td>{{ $receitaPagar->description }}</td>
                        <td>{{ $receitaPagar->value }}</td>
                        <td>{{ $receitaPagar->status }}</td>
                        <td>{{ $receitaPagar->dueDate }}</td>
                        <td>{{ $receitaPagar->payDate }}</td>
                        <td><a href="{{ route('receita.edit', ['receitaPagar' => $receitaPagar]) }}"></a></td>
                        <form id="form_{{ $pedido->id }}" method="post"
                            action="{{ route('receita.destroy', ['ReceitaPagar' => $ReceitaPagar->id]) }}">
                            @method('DELETE')
                            @csrf
                            <a href="#"
                                onclick="document.getElementById('form_{{ $ReceitaPagar->id }}').submit()">Excluir</a>
                        </form>
                @endforeach



        </table>
    </div>

@endsection
