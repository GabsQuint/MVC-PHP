<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de produto</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        form {
            background-color: #fff;
            padding: 50px;
            margin: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input, button {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: 1px solid #ddd;
        }
        button {
            background-color: #007BFF;
            color: #fff;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <form method="post" action = "/produto/form/save">
        <h1>Cadastro de produto</h1>

        <input type="hidden" name="id_prod" value="<?= $model->id_prod ?>">

        <label for="nm_prod">Nome do produto</label>
        <input type="text" name="nm_prod" value="<?= $model->nm_prod ?>" id="nm_prod">

        <label for="price">Preço</label>
        <input type="text" name="price" value="<?= $model->price ?>" id="price">

        <label for="id_forn">Fornecedor</label>
        <input type="number" name="id_forn" value="<?= $model->id_forn ?>" id="id_forn">

        <button type="submit">Salvar</button>
    </form>
</body>
</html>