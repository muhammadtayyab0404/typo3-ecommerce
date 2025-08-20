<?php
declare(strict_types=1);


 namespace Malik\Mywebsite\EventListener;
 use TYPO3\CMS\Core\Utility\DebugUtility;
 use TYPO3\CMS\Core\Database\ConnectionPool;
 use TYPO3\CMS\Core\Utility\GeneralUtility;

 use TYPO3\CMS\FrontendLogin\Event\LogoutConfirmedEvent;

 


class Userlogoutlistener{

 public function __invoke(LogoutConfirmedEvent $event){
 
   if(isset($_COOKIE['cart']) && ($_COOKIE['feuser'])){
    
    $json = $_COOKIE['cart'];

    $cookieuid = $_COOKIE['feuser'];    


    $connection = GeneralUtility::makeInstance(ConnectionPool::class)->getConnectionForTable('fe_users');
    $connection-> update(
        'fe_users',
        [
            'shop'=>$json,
        ],[
          'uid'=>$cookieuid,
        ]
        );

  setcookie('cart' ,'',time()-5,"/");
  setcookie('feuser' ,'',time()- 5,"/");      
   
  unset($_COOKIE['cart']);
  unset($_COOKIE['feuser']);

}
}
}