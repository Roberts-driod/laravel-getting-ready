<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title ?? 'Todo Manager' }}</title>
    <style>
        body { font-family: 'Times New Roman', Times, serif, sans-serif; margin: 20px; }
        header { margin-bottom: 20px; }
        .alert {
            padding: 10px;
            background-color: #d4edda;
            border: 1px solid #c3e6cb;
            color: #155724;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <header>
        <h1></h1>
        <hr/>
    </header>

    @if(session('message'))
        <div class="alert">
            {{ session('message') }}
        </div>
    @endif

    <main>
        {{ $slot }}
    </main>
</body>
</html>
