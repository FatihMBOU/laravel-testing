<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Overzicht</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Overzicht</h1>
        <div class="bg-white shadow-md rounded-lg p-6">
            <table class="min-w-full bg-white">
                <thead>
                    <tr>
                        <th class="py-2 px-4 border-b border-gray-200">ID</th>
                        <th class="py-2 px-4 border-b border-gray-200">Naam</th>
                        <th class="py-2 px-4 border-b border-gray-200">Email</th>
                        <th class="py-2 px-4 border-b border-gray-200">Aangemaakt op</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td class="py-2 px-4 border-b border-gray-200">{{ $user->id }}</td>
                            <td class="py-2 px-4 border-b border-gray-200">{{ $user->name }}</td>
                            <td class="py-2 px-4 border-b border-gray-200">{{ $user->email }}</td>
                            <td class="py-2 px-4 border-b border-gray-200">{{ $user->created_at }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>