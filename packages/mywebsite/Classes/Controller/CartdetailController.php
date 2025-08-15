<?php

namespace  Malik\Mywebsite\Controller;

use TYPO3\CMS\Extbase\Persistence;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use Psr\Http\Message\ResponseInterface;
use Malik\Mywebsite\Domain\Repository\ProductsRepository;
use Malik\Mywebsite\Domain\Model\Products;
use TYPO3\CMS\Core\Context\Context;
use TYPO3\CMS\Core\Utility\GeneralUtility;


class CartdetailController extends ActionController{

  protected $productsRepository;

public function injectProductsRepository(ProductsRepository $productsRepository){
  $this->productsRepository = $productsRepository;
}


    public function cartdetailAction(){

      $totalprice= 0;
      $totalitems= 0;
    $cartitem=[];
      if(isset($_COOKIE['cart'])){
       
         $aa=$_COOKIE['cart'];
          $cartcookie=json_decode($aa, true);

          
          foreach ($cartcookie as $item){
            $uid=(int)$item['uid'];
            $qty=(int)$item['qty'];   
            
            $totalitems ++;

       $product = $this->productsRepository->findByUid($uid);
       
       

       if(isset($product)){
          $price= $product->getPrice();
      
         $totalprice = $totalprice + ($qty*$price);
          
          $cartitem[]=
        [
          'product'=>$product,
          'qty'=>(int)$qty,
        ];   

       }
       else{
        $cartitem=[];
       }
  
       
     
      }
      session_start();
      $_SESSION['value'] = $totalprice;



      $this->view->assign("cart",[$cartitem]);
      $this->view->assign("totalprice",$totalprice);


    }
      else
        {
          $this->view->assign("cart",[]);
        }
      return $this->htmlResponse();
    }
}