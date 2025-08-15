<?php
namespace Malik\Mywebsite\Domain\Model;

use Symfony\Component\Config\Resource\FileResource;
use TYPO3\CMS\Backend\Backend\Avatar\Image;
use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;
use TYPO3\CMS\Extbase\Domain\Model\FileReference;

class Boxcontentelemt extends AbstractEntity{

    protected string $boxtext ='';
    protected ?FileReference $boximg = null;
    protected string $boxtitle= '';
  protected string  $specifications;
    protected string  $description;
 public function getBoxText() :string
 {
    return $this->boxtext;
 }

 public function setBoxText(string $text ) {
    $this->boxtext = $text;

 }

public function getBoxImg(): ?FileReference{
    return $this->boximg;
}

public function setBoxImg(?FileReference $image1): void {
    $this->boximg = $image1;
}
public function getBoxTitle(){
    return $this->boxtitle;
}
public function setBoxTitle(string $title ){
    $this->boxtitle = $title;
}

public function getDescription(){
    return $this->description;
}
public function setDescription(string $description){
    $this->description = $description;
}
public function getSpecifications(){
    return $this->specifications;
}
public function setSpecifications(string $specifications){
    $this->specifications = $specifications;

}}