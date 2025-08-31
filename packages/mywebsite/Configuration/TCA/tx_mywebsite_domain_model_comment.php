<?php
return[
 'ctrl'=>[
    'title'=> 'Comments of the record',
    'label'=> 'Comments of the record',
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
        'label'=>'Product Id',
        'exclude' =>0,
        'config'=>[
        'type' =>'input',
           ],
        ],
        'userid'=>[
        'label'=>'User Id',
        'exclude' =>0,
        'config'=>[
        'type' =>'input',
           ],
        ],
        'rating'=>[
        'label'=>'Enter the Rating',
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




