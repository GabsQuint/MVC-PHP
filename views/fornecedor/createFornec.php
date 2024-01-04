<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de fornecedor</title>
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
    <form method="post" action = "/fornecedor/form/save">
        <h1>Cadastro de fornecedor</h1>

        <input type="hidden" name="id_forn" value="<?= $model->id_forn ?>">

        <label for="nm_forn">Nome do fornecedor</label>
        <input type="text" name="nm_forn" value="<?= $model->nm_forn ?>" id="nm_forn">

        <label for="cnpj">CNPJ</label>
        <input type="text" name="cnpj" value="<?= $model->cnpj ?>" id="cnpj" maxlength="14">

        <label for="UF">UF</label>
        <input type="text" name="UF" value="<?= $model->UF ?>" id="UF" >

        <button type="submit">Salvar</button>
    </form>
</body>
</html>