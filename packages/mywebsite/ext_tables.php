<?php
use \TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
defined('TYPO3') or die('Access denied.');



ExtensionManagementUtility::addPlugin([
    'label' => '4 boxes',
    'icon' =>'content-text',
    'description'=> 'For making the 4 custom frame',
    'value' => 'Malik_contentelement',                      // The internal value stored in DB
    'group' => 'custom content element', 
],
'Ctype',
'mywebsite',
);

