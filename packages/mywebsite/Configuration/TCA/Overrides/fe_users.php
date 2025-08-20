<?php 
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

call_user_func(static function () {
 $newcoll =[
 'shop' =>[
    'label' => 'Array items of the shops',
    'exclude' => 0,
    'config'=>[
         'type'=>'json',
    ],
],    
];

ExtensionManagementUtility::addTCAcolumns('fe_users', $newcoll);
ExtensionManagementUtility::addToAllTCAtypes('fe_users', 'shop','', 'after:password');
});