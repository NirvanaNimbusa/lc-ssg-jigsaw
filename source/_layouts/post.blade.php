<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="referrer" content="always">
        <link rel="canonical" href="{{ $page->getUrl() }}">
        <meta name="description" content="{{ $page->description }}">
        <title>{{ $page->title }}</title>
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/github-markdown-css/4.0.0/github-markdown.css"
            integrity="sha512-j84w/URwwK++Im1eDnefcHbtMSYWbwaLmJqcj58tDiZtjfPFPHEzxcnyOpqfGhTgxd/6xL2J9rmF987W64S8Tw=="
            crossorigin="anonymous" />
    </head>
    <body>
        @include('_partials.nav')
        <div class="markdown-body">
            <h2>{{ $page->title }}</h2>
            <div>{{ date('F j, Y', $page->date) }}</div>
            <div>{{ $page->author }}</div>
            <p>
                @yield('body')
            </p>
        </div>
    </body>
</html>
