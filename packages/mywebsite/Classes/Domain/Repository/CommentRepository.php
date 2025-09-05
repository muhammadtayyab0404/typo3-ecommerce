<?php
namespace Malik\Mywebsite\Domain\Repository;

use TYPO3\CMS\Extbase\Persistence\Repository;

class CommentRepository extends Repository{
 
    public function initializeObject(){
    $query = $this->createQuery()->getQuerySettings();

    
    $query ->setRespectStoragePage(false);
    $this->setDefaultQuerySettings($query);
    }   

    public function findByUserid(int $userId)
{
    $query = $this->createQuery();
    $query->matching(
        $query->equals('userid', $userId)
    );
    return $query->execute();
}

 public function findByProdId(int $prodId) {
    $query = $this->createQuery();
    $query->matching(
        $query->equals('prodid', $prodId)
    );

        return $query->execute(); // <-- must return result

 }

}