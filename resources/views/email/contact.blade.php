<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo contacto - Chana RENT-A-CAR</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, sans-serif;
            background-color: #f6f8fa;
            margin: 0;
            padding: 0;
        }
        .container {
            background: #fff;
            max-width: 600px;
            margin: 30px auto;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 3px 8px rgba(0,0,0,0.1);
        }
        .header {
            background: #001B77;
            color: white;
            text-align: center;
            padding: 24px;
        }
        .header h1 {
            margin: 0;
            font-size: 22px;
            letter-spacing: 1px;
        }
        .content {
            padding: 30px;
            color: #333;
        }
        .content p {
            margin-bottom: 10px;
            line-height: 1.6;
        }
        .content strong {
            color: #001B77;
        }
        .footer {
            text-align: center;
            background: #f2f2f2;
            padding: 16px;
            font-size: 12px;
            color: #777;
        }
        .footer a {
            color: #001B77;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1> Novo contacto recebido</h1>
        </div>

        <div class="content">
            <p><strong>Assunto:</strong> {{ $dados['topic'] }}</p>
            <p><strong>Nome:</strong> {{ $dados['nome'] }}</p>
            <p><strong>Email:</strong> {{ $dados['email'] }}</p>
            <p><strong>Contacto:</strong> {{ $dados['contacto'] }}</p>
            <p><strong>Mensagem:</strong><br> {{ $dados['mensagem'] }}</p>
        </div>

        <div class="footer">
            © {{ date('Y') }} <strong>Chana RENT-A-CAR</strong>.<br>
            <a href="https://chanarentacar.ao">www.chanarentacar.ao</a>
        </div>
    </div>
</body>
</html>
