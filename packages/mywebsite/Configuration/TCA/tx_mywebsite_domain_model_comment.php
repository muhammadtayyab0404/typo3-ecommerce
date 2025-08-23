<?php
return[
 'ctrl'=>[
    'title'=> 'Comments of the record',
    'label '=> 'Comments of the record',
    'security' => [
            'ignorePageTypeRestriction' => true,
        ],

    ],
        'types'=>[
        "1" =>[
            "showitem" => 'prodid,userid, rating,comments,crdate'
        ],

    ],
   
    'columns'=>[
        
        'prodid'=>[
        'label'=>'Name of the product',
        'exclude' =>0,
        'config'=>[
        'type' =>'none',
           ],
        ],
        'userid'=>[
        'label'=>'Name of the product',
        'exclude' =>0,
        'config'=>[
        'type' =>'none',
           ],
        ],
        'rating'=>[
        'label'=>'Name of the product',
        'exclude' =>0,
        'config'=>[
        'type' =>'input',
           ],
        ],
        'comments'=>[
        'label'=>'Name of the product',
        'exclude' =>0,
        'config'=>[
        'type' =>'input',
           ],
        ],
        'crdate' => [
    'exclude' => 1,
    'label' => 'Creation date',
    'config' => [
        'type' => 'none',
        'renderType' => 'inputDateTime',
        'format' => 'datetime',
        
    ],
],


    ]

    ];




