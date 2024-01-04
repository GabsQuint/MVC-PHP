<!DOCTYPE html>
<html>

<head>
    <title>Fornecedores</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

        .container {
            width: 80%;
            margin: auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
            vertical-align: middle;
        }

        tr {
        transition: background-color 0.3s ease;
        }
        tr:hover {
            background-color: #f5f5f5;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            color: #fff;
            background-color: #007BFF;
            text-decoration: none;
            border-radius: 5px;
            margin: 10px 0;
        }

        a {
        color: #007BFF;
        text-decoration: none;
        }
        a:hover {
            color: #0056b3;
        }
        .delete-link {
            color: #dc3545;
        }
        .delete-link:hover {
            color: #c82333;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Lista de fornecedores</h1>
        <a href="/fornecedor/form" class="button">Adicionar fornecedor</a>
        <a href="/" class="button">Pagina inicial</a>
        <table>
            <tr>
                <th></th>
                <th>Nome fornecedor</th>
                <th>CNPJ</th>
                <th>UF</th>
            </tr>
            <?php foreach ($model->rows as $row) : ?>
                <tr>
                    <td>
                        <a href="/fornecedor/delete?id=<?= $row->id_forn ?>">Deletar</a>
                    </td>
                    <td>
                        <a href="/fornecedor/form?id=<?= $row->id_forn ?>"><?= $row->nm_forn ?></a>
                    </td>
                    <td><?= $row->cnpj ?></td>
                    <td><?= $row->UF ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>

</html>