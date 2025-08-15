<?php
namespace Malik\Mywebsite\Controller;
use Psr\Http\Message\ResponseInterface;
use Malik\Mywebsite\Domain\Repository\ProductsRepository;

use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class PaymentController extends ActionController{
 protected $productsRepository;

 public function __construct(ProductsRepository $productsRepository){
    $this->productsRepository = $productsRepository;
 }
public function payAction(){
 $cartitem=[];
  $totalprice= 0;
    if(isset($_COOKIE['cart'])){
       
         $aa=$_COOKIE['cart'];
          $cartcookie=json_decode($aa, true);

         
          foreach ($cartcookie as $item){
            $uid=(int)$item['uid'];
            $qty=(int)$item['qty'];   
          

            $product=$this->productsRepository->findByUid($uid);
          


          if (isset($product)){
        $price = $product->getPrice();
        $totalprice = $totalprice +($qty* $price);


    }     
}
} 
 
    $aa=5;

    session_start();
$value = $_SESSION['value'] ?? null;


    $this->view->assign("totalprice", $totalprice);
return $this->htmlResponse();
}
}