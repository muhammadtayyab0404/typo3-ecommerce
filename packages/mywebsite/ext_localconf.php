<?php
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;
use GeorgRinger\News\Controller\NewsController;

use Malik\Mywebsite\Controller\ContentController;
use Malik\Mywebsite\Controller\ProductsController;
use Malik\Mywebsite\Controller\DetailController;
use Malik\Mywebsite\Controller\CartdetailController;
use Malik\Mywebsite\Controller\PaymentController;




defined('TYPO3') or die('Access denied.');


ExtensionUtility::configurePlugin(
    'Mywebsite',
    'BoxPlugin',
    [
        ContentController::class => 'list' 
    ],
    [
        ContentController::class=> 'list',
    ]

);

ExtensionUtility::configurePlugin(
  'Mywebsite',
  'Products',
  [
    ProductsController::class => 'list'

  ],
  [
    ProductsController::class =>'list'
  ]

  );

    ExtensionUtility::configurePlugin(
      'Mywebsite',
      'Detail',
      [
      DetailController::class =>'list'],
      [

      DetailController::class => 'list'

      ]

    );

 ExtensionUtility::configurePlugin(
  'Mywebsite',
  'CartDetail',
  [
   CartdetailController::class=>'cartdetail',
   ProductsController::class => 'list',
   PaymentController::class => 'pay',
  ],

  [
    CartdetailController::class=>'cartdetail',
    ProductsController::class => 'list',
    PaymentController::class => 'pay',
  ],

  ExtensionUtility::configurePlugin(
    'myWebsite',
    'Payment',
    [
      PaymentController::class => 'pay',
      CartdetailController::class => 'cartdetail'
    ],
    [
    PaymentController::class=>'pay',
    CartdetailController::class => 'cartdetail'
    ],
  )

);   
