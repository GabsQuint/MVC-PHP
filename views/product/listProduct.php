<!DOCTYPE html>
<html>

<head>
    <title>Products</title>
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
        <h1>List of Products</h1>
        <a href="/produto/form" class="button">Adicionar produto</a>
        <a href="/" class="button">Pagina inicial</a>
        <table>
            <tr>
                <th></th>
                <th>Nome produto</th>
                <th>Preço</th>
                <th>Fornecedor</th>
            </tr>
            <?php foreach ($model->rows as $row) : ?>
                <tr>
                    <td>
                        <a href="/produto/delete?id=<?= $row->id_prod ?>">Deletar</a>
                    </td>
                    <td>
                        <a href="/produto/form?id=<?= $row->id_prod ?>"><?= $row->nm_prod ?></a>
                    </td>
                    <td><?= $row->price ?></td>
                    <td><?= $row->nm_forn ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>

</html>