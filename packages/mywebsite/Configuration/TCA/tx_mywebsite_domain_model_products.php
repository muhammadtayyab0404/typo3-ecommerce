<?php
return[
'ctrl' =>[
    'title' => 'name',
    'label' => 'name',
        'security' => [
            'ignorePageTypeRestriction' => true,
        ],

    ],

    'types'=>[
        "1" =>[
            "showitem" => 'name,image, price,description,Avaliable,category,specifications'
        ],

    ],


    'columns'=>[

                'name'=>[
            'label'=>'Name of the product',
            'exclude' =>0,
            'config'=>[
                'type' =>'input',
           ],
        ],
        'specifications'=> [
            'label' => 'Enter the Specification',
            'exclude' => 0,
            'config'=>[
            'type' => 'text',
            'enableRichtext' => true,
            'richtextConfiguration' => 'default',
        ],
    ],


                'price'=>[
            'label'=>'Enter the price',
            'exclude' =>0,
            'config'=>[
                'type' =>'input',
           ],
        ],
        'description'=>[
            'label'=>'Enter the description',
            'exclude' =>0,
            'config'=>[
                'type' =>'input',
           ],
        ],

                'Avaliable'=>[
            'label'=>'how many items are avaliable',
            'exclude' =>0,
            'config' => [
                'type' => 'input',
                        
                    ],
                    
           ],
        

                   'category'=>[
            'label'=>'Select the Category',
            'exclude' =>0,
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    [
                        'label' => 'Clothes',
                        'value' => 'Clothes',
                    ],
                    [
                        'label' => 'Watches',
                        'value' => 'Watches',
                    ],
                                        [
                        'label' => 'Shoes',
                        'value' => 'Shoes',
                    ],
                                        [
                        'label' => 'Others',
                        'value' => 'Others',
                    ],
           ],
        ],
        ],
        

        'image' => [
        'title' =>'My image',
        'label'=> 'images',
            'config' => [
                'type' => 'file',
                'maxitems' => 10,
                'allowed' => 'common-image-types',
            ],
        ],



    

],
];


