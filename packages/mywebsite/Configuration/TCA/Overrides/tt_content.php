<?php 
declare(strict_types=1);

use PhpParser\Node\Stmt\Global_;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Extensionmanager\Exception\ExtensionManagerException;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

use function PHPSTORM_META\map;
use function PHPSTORM_META\type;

defined('TYPO3') or die();

call_user_func(function () {

// ExtensionManagementUtility::addTcaSelectItem('tt_content', 'CType',[
//     'label' => '4 boxes',
//     'icon' =>'content-text',
//     'description'=> 'For making the 4 custom frame',
//     'value' => 'Malik_contentelement',                      // The internal value stored in DB
//     'group' => 'custom content element',                 // Category group in the dropdown
// ],
// 'textmedia',
// 'before'
// );

// @$GLOBALS['TCA']['tt_content']['types']['Malik_contentelement']=[
//     'showitem'=> '
//     --div--;1st box,
//     malik_separator'
// ];



// ExtensionManagementUtility::addToAllTCAtypes(
//     'tt_content',
//     'bodytext',
//     'Malik_contentelement',
// );

// $GLOBALS['TCA']['tt_content']['types']['Malik_contentelement'] = [
//     'showitem' => ''
// ];

$field= [
    'malik_separator'=>[
    'exclude' =>0,
    'label' => 'slides',
    'config' => [
    'type' => 'inline',
    'foreign_table' => 'tx_mywebsite_domain_model_boxcontentelemt',
    'foreign_field'=> 'link',
    'appearance' => [
            'collapseAll' => 1,
            
    ],
 
   ],

    ],
    

];



$field01 =[
    'malik_reference' =>[
    'exclude => 0',
    'label' => 'products',
    'config' =>[
        'type' => 'inline',
        'foreign_table' => 'tx_mywebsite_domain_model_products',
        'foreign_field' => 'link',
        'appearance' => [
            'collapseAll' =>1,
        ],




    ],
],
];

ExtensionManagementUtility::addTCAcolumns("tt_content" , $field01);


ExtensionManagementUtility::addTCAcolumns("tt_content", $field);




    // ExtensionManagementUtility::addToAllTCAtypes(
    //     'tt_content',
    //     'image',
    //     'mywebsite_boxplugin'
    // );

ExtensionUtility::registerPlugin(
    'Mywebsite',
    'BoxPlugin',
    'Content Box'
);

ExtensionUtility::registerPlugin(
'Mywebsite',
'Products',
'Products Listing'

);

ExtensionUtility::registerPlugin(
    'Mywebsite',
    'Detail',
    'Deatail of the products'

);

ExtensionUtility::registerPlugin(
    'Mywebsite',
    'CartDetail',
    'Cart Detail'
);

ExtensionUtility::registerPlugin(
    'Mywebsite',
    'Payment',
    'Payment Detail'

);
ExtensionUtility::registerPlugin(
    'Mywebsite',
    'Commentsection',
    'Comment Section '

);



@$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['mywebsite_boxplugin']=
    'malik_separator';

@$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['mywebsite_products']=
'malik_reference';

@$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['mywebsite_detail']=
'header';

@$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['mywebsite_cartdetail'];


@$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['mywebsite_payment'];
 
@$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['mywebsite_commentsection'];







});






