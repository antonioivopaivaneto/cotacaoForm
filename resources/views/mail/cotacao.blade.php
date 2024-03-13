<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email de Contato</title>
    <style>
        body {
            background-color: #f2f2f2; /* Fundo cinza claro */
            padding: 20px; /* Espaçamento interno */
            font-family: Arial, sans-serif; /* Fonte */
        }
        h1 {
            color: #333; /* Cor do texto */
            border-bottom: 2px solid #333; /* Linha inferior */
            padding-bottom: 5px; /* Espaçamento abaixo do título */
        }
        table {
            width: 50%;
            border-collapse: collapse;
            margin-top: 20px; /* Espaçamento acima da tabela */
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ccc; /* Linha entre as células */
        }
        th {
            background-color: #f0f0f0; /* Cor de fundo do cabeçalho */
        }
        tr:hover {
            background-color: #f9f9f9; /* Cor de fundo ao passar o mouse sobre a linha */
        }
        strong {
            font-weight: bold; /* Texto em negrito */
        }
    </style>
</head>
<body>
    <h1>Orçamento de Serviços</h1>

    <table>
        <tr>
            <th>Item</th>
            <th>Quantidade</th>
            <th>Período</th>
        </tr>
        @foreach ($dados['servicos'] as $servico)
        <tr>
            <td>{{ $servico['title'] }}</td>
            <td>{{ $servico['quantity'] }}</td>
            <td>{{ $servico['period'] }}</td>
        </tr>
        @endforeach
    </table>

    <h2>Dados do Cliente</h2>
    <table>
        <tr>
            <td><strong>Nome:</strong></td>
            <td>{{ $dados['nome'] }}</td>
        </tr>
        <tr>
            <td><strong>Email:</strong></td>
            <td>{{ $dados['email'] }}</td>
        </tr>
        <tr>
            <td><strong>Telefone:</strong></td>
            <td>{{ $dados['telefone'] }}</td>
        </tr>
        <tr>
            <td><strong>Endereço:</strong></td>
            <td>{{ $dados['endereco'] }}</td>
        </tr>
        <tr>
            <td><strong>CNPJ/CPF:</strong></td>
            <td>{{ $dados['cnpj_cpf'] }}</td>
        </tr>
        <tr>
            <td><strong>Escritorio:</strong></td>
            <td>{{ $dados['escritorio'] }}</td>
        </tr>
        <tr>
            <td><strong>Condominio:</strong></td>
            <td>{{ $dados['condominio'] }}</td>
        </tr>
        <tr>
            <td><strong>Escola:</strong></td>
            <td>{{ $dados['escola'] }}</td>
        </tr>
        <tr>
            <td><strong>Observação:</strong></td>
            <td>{{ $dados['observacao'] }}</td>
        </tr>
    </table>

    <p>Por favor, entre em contato com o cliente o mais rápido possível.</p>
</body>
</html>
