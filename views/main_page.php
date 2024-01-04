<!DOCTYPE html>
<html>
<head>
    <title>MVC PHP</title>
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
        h1 {
            margin-bottom: 20px;
        }
        button {
            padding: 10px 20px;
            margin: 10px;
            font-size: 16px;
            border: none;
            color: #fff;
            background-color: #007BFF;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div>
        <h1>Main Page</h1>
        <button onclick="window.location.href='produto'">Produtos</button>
        <button onclick="window.location.href='fornecedor'">Fornecedores</button>
    </div>
</body>
</html>