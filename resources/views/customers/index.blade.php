<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Codecasts - Laravel - Básico</title>
    <link rel='stylesheet' href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1>Bem vindo</h1>

        @foreach($customers as $customer)
            <p>{{ $customer->name }}</p>
        @endforeach
    </div>
</body>

</html>