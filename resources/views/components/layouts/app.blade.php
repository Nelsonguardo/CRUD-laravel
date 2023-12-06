<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprendiendo Laravel - {{ $title ?? ''}}</title>
    <meta name="description" content="{{ $metaDescription ?? 'Default Meta Description'}}">
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>

<body class="antialiased bg-slate-100 dark:bg-slate-900">
    <x-layouts.navigation />
    @if (session('message'))
    <div class="max-w-screen-xl px-3 py-2 mx-auto font-bold text-white sm:px-6 lg:px-8 bg-emerald-500 dark:bg-emerald-700">
        {{ session('message') }}
    </div>
    @endif
    {{ $slot }}
</body>

</html>