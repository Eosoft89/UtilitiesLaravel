<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <ul>
        @foreach ($users as $user)
            <li>{{ $user->name }}</li>
        @endforeach
    </ul>

    {{ $users->links() }} {{--Para paginar con un control predefinido se puede hacer con links('component'), pudiendo también pasarle un array con valores liks('component', [$data]) --}}

</body>
</html>