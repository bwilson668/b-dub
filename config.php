<?php

return [
    'production' => false,
    'baseUrl' => '',
    'siteName' => 'Benjamin Andrew Wilson',
    'siteAuthor' => 'Ben Wilson',

    // collections
    'collections' => [
        'articles' => [
            'author' => 'Ben Wilson', // Default author, if not provided in frontmatter
            'sort' => '-date',
            'path' => 'articles/{filename}',
        ],
        'models' => [
            'author' => 'Ben Wilson', // Default author, if not provided in frontmatter
            'sort' => '-date',
            'path' => 'models/{filename}',
        ],
        'references' => [
            'author' => 'Ben Wilson', // Default author, if not provided in frontmatter
            'sort' => '-date',
            'path' => 'references/{filename}',
        ],
        'units' => [
            'author' => 'Ben Wilson', // Default author, if not provided in frontmatter
            'sort' => '-date',
            'path' => 'units/{filename}',
        ],
    ],

    // helpers
    'getDate' => function ($page) {
        return Datetime::createFromFormat('U', $page->date);
    },
    'getExcerpt' => function ($page, $length = 255) {
        $content = $page->excerpt ?? $page->getContent();
        $cleaned = strip_tags(
            preg_replace(['/<pre>[\w\W]*?<\/pre>/', '/<h\d>[\w\W]*?<\/h\d>/'], '', $content),
            '<code>'
        );

        $truncated = substr($cleaned, 0, $length);

        if (substr_count($truncated, '<code>') > substr_count($truncated, '</code>')) {
            $truncated .= '</code>';
        }

        return strlen($cleaned) > $length
            ? preg_replace('/\s+?(\S+)?$/', '', $truncated) . '...'
            : $cleaned;
    },
    'getTags' => function ($page) {
        return [
            'references' => [
                'saas',
                'neural networks',
                'model metrics'
            ],
        ];
    },
];
