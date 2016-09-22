<?php
return [
    'imgman_mongodb' => [
        'Mongo\Db\Image' => [
            'database' => 'strapieno-image',
        ],
    ],
    'imgman_adapter_mongo' => [
        'ImgMan\Mongo\PlaceGallery' => [
            'collection' => 'place-gallery',
            'database' => 'Mongo\Db\Image',
            'identifier' => 'identifier'
        ],
    ],
    'imgman_services' => [
        'ImgMan\Service\PlaceGallery' => [
            'adapter' => 'ImgMan\Adapter\Imagick',
            'storage' => 'ImgMan\Mongo\PlaceGallery',
            'helper_manager' => 'ImgMan\PluginManager',
            'renditions' => [
                'thumb' => [
                    'fitOut' => [
                        'width' => 800,
                        'height' => 300
                    ],
                    'format' => [
                        'format' => 'jpeg'
                    ],
                ],
                'normal' => [
                    'fitOut' => [
                        'width' => 80,
                        'height' => 30,
                        'allowUpsample' => true
                    ],
                    'format' => [
                        'format' => 'jpeg'
                    ]
                ]
            ]
        ]
    ],
];
