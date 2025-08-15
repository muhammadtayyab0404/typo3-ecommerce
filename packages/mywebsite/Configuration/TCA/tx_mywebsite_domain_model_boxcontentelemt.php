<?php 
return [
    'ctrl'=>[
        'title' => 'Slide',
        'label' => 'boxtitle',
        

        'security' => [
            'ignorePageTypeRestriction' => true,
        ],

    ],


     

    'types'=>[
       '1'=>[
        'showitem' => ' boximg, boxtitle, boxtext'
       ],
       
    ],

    'columns'=>[
        'boxtext'=>[
            'label'=>'BOX 1 TEXT',
            'exclude' =>0,
            'config'=>[
                'type' =>'input',
           ],
        ],
    'boximg' => [
            'label' => 'My image',
            'config' => [
                'type' => 'file',
                'maxitems' => 1,
                'allowed' => 'common-image-types',
            ],
        ],

    'boxtitle' =>[
        'label' =>'Title of their job',
        'config' =>[
            'type' => 'input',
        ],
    ],


    'link'=>[
        'config'=>[
            'type' =>'passthrough',
        ]
    ]


        ],
];