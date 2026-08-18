<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Livewire</title>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    
    <x-navbar></x-navbar>
    
    <header class="header-custom">
        <div class="container h-100 d-flex align-items-center justify-content-center">
            <h1>Livewire</h1>
        </div>
    </header>
    
    <section class="section-1">
        <div class="container">
            {{ $slot }}
        </div>
    </section>
    
</body>

</html>