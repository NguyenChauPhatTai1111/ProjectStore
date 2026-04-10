<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>My App</title>
</head>
<body>

@include('layouts.header')

<main>
    @yield('content')
</main>

@include('layouts.footer')

</body>
</html>