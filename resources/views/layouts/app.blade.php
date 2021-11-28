<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Dawid Focht">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Simple ECG app</title>


    <!-- Bootstrap core CSS -->
    <link href="/css/app.css" rel="stylesheet">
    @livewireStyles
    @livewireScripts
    <script src="/js/app.js"></script>
</head>

<body class="text-center">

<!-- This is an example component -->
<div>

    <section class="h-screen flex text-gray-200 bg-gray-900">
        {{ $slot }}
    </section>

</div>
</body>
</html>
