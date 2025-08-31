<?php
namespace Malik\Mywebsite\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class Comment extends AbstractEntity{

  /**
 * @var int
 */
   protected  $prodid=0;
  protected $userid =0;
  protected $rating =0;
   protected string $comments='';

    /**
     * @var \DateTime
     */
    protected $crdate;


   public function getProdid(){
    return $this->prodid;
   }
   public function setProdid(int $prodid){
    $this->prodid=$prodid;
}
   public function getUserid(){
    return $this->userid;
   }
   public function setUserid(int $userid){
    $this->userid=$userid;
   }
   public function getRating(){
    return $this->rating;
   }
   public function setRating(int $rating){
    $this->rating=$rating;
   }
   public function getComments(){
    return $this->comments;
   }
   public function setComments(string $comments){
    $this->comments=$comments;
   }

   public function getCrdate() :?\DateTime
   {
    return $this->crdate;
   }

}