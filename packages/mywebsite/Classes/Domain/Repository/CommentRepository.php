<?php
namespace Malik\Mywebsite\Domain\Repository;

use TYPO3\CMS\Extbase\Persistence\Repository;

class CommentRepository extends Repository{
 
    public function initializeObject(){
    $query = $this->createQuery()->getQuerySettings();
    $query ->setRespectStoragePage(false);
    $this->setDefaultQuerySettings($query);
    }   
}