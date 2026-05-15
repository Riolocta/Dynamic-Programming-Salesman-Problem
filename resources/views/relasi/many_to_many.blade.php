<!DOCTYPE html>
<html>
<head>
    <title>Many To Many</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #667eea, #764ba2);
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            text-align: center;
        }

        .user-name {
            font-size: 28px;
            font-weight: bold;
            color: white;
            margin-bottom: 30px;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
        }

        .card {
            background: white;
            padding: 20px;
            border-radius: 15px;
            font-size: 18px;
            font-weight: bold;
            box-shadow: 0 8px 15px rgba(0,0,0,0.2);
            transition: 0.3s;
        }

        .card:hover {
            transform: translateY(-10px);
            background: linear-gradient(135deg, #4facfe, #00f2fe);
            color: white;
        }
    </style>
</head>

<body>

<div class="container">

    @foreach($data as $user)
        <div class="user-name">👤 {{ $user->name }}</div>

        <div class="grid">
            @foreach($user->komunitas_user as $komunitas)
                <div class="card">
                    👥 {{ $komunitas->nama }}
                </div>
            @endforeach
        </div>
    @endforeach

</div>

</body>
</html>