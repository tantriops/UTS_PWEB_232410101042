<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ColorMatch</title>
    {{-- memanggil tailwindcss (eksternal) --}}
    <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Open+Sans&display=swap" rel="stylesheet" />
</head>
<body class="min-h-screen bg-gradient-to-br from-rose-50 via-amber-50 to-indigo-50 text-gray-800">
    {{-- nvbar --}}
    @include('components.navbar')
    {{-- conten --}}
    @yield('content')
    {{-- footer --}}
    @include('components.footer')
</body>
</html>