<?php
declare(strict_types=1);


 namespace Malik\Mywebsite\EventListener;
 use TYPO3\CMS\Core\Utility\DebugUtility;
 use TYPO3\CMS\Core\Database\ConnectionPool;
 use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\FrontendLogin\Event\LoginConfirmedEvent;



class Userloginlistner{

    public function __invoke(LoginConfirmedEvent $event): void{
     $reqq = $event->getRequest();
     $arr= $reqq->getAttribute("frontend.user");
     $abbc = $arr ->user["uid"];
     $uidd = (int)$abbc;

     $conn = GeneralUtility::makeInstance(ConnectionPool::class)->getConnectionForTable("fe_users");
     
     $row = $conn ->select(
        ['shop'],
        'fe_users',
        ['uid' => $uidd]

     )->fetchAssociative();
     if ($row ){
     $finalcookie=$row['shop'] ?? '[]';
     setcookie('cart' , $finalcookie, time() + 60*60*24+0,'/');
     }
     
    }

}