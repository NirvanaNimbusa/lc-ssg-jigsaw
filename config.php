<?php

use Illuminate\Support\Str;

return [
    'production' => false,
    'contact_email' => 'andre@andre.com',
    'selected' => function ($page, $section) {
        return Str::contains($page->getPath(), $section) ? 'selected' : '';
    },
    'baseUrl' => '',
    'title' => 'Jigsaw',
    'description' => 'Website description.',
    'collections' => [
        'posts' => [
            'path' => 'posts/{filename}',
        ],
    ],
];
