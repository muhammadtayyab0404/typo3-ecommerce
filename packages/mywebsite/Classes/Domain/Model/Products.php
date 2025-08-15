<?php
namespace Malik\Mywebsite\Domain\Model;
use TYPO3\CMS\Extbase\Domain\Model\FileReference;
use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

use \TYPO3\CMS\Extbase\Persistence\ObjectStorage;

class Products extends AbstractEntity{


    protected string $name ='';
    protected string $price ='';
    protected string $description ='';
    protected string $category = '';
      protected string $avaliable ='';
         protected string  $specifications='';

    /**
     * A collection of files.
     * @var ObjectStorage<FileReference>
     */         
    protected ObjectStorage $image ;

    
    public function getName(){

        return $this->name;
    }
    public function setName(string $namee){
        $this->name = $namee;
    } 

   public function getCategory(){

        return $this->category;
    }
    public function setCategory(string $namee){
        $this->category = $namee;
    } 

        public function getPrice(){

        return $this->price;
    }
    public function setPrice(string $pricee){

        $this->price = $pricee;
    }


    public function getDescription(){

        return $this->description;
    }
    public function setDescription(string $des){
        $this->description = $des;
    } 


    public function getAvaliable(){

        return $this->avaliable;
    }
    public function setAvaliable(string $ava){
        $this->avaliable = $ava;
    } 

    public function getImage(): ObjectStorage{
        return $this->image;
    }
    public function setImage(?ObjectStorage $imgg):void {
        $this->image= $imgg;
    }   

    public function getSpecifications(){
    return $this->specifications;
}
public function setSpecifications(string $specifications){
    $this->specifications = $specifications;
}
    
public function __construct(){
    $this-> image = new ObjectStorage();
}
    public function initializeObject(): void
    {
        $this->image = $this->image ?? new ObjectStorage();
    }

    }






