<?php
namespace Malik\Mywebsite\Domain\Repository;

use TYPO3\CMS\Extbase\Persistence\Repository;

final class ProductsRepository extends Repository
{
 public function initializeObject():void {

    $query = $this->createQuery()->getQuerySettings();
    $query ->setRespectStoragePage(false);
    $this->setDefaultQuerySettings($query);
 }

 
}