<?php
return [
    'grabber' => [
        '%.*%' => [
            'test_url' => 'http://www.origo.hu/itthon/20171019-hamisan-tanuskodott-az-ugyved-ezert-nem-praktizalhat.html',
            'body' => [
                '//header[@id="article-head"]/h1',
                '//article[@id="article-center"]'
            ],
            'strip' => [
            ]
        ],
    ],
];
