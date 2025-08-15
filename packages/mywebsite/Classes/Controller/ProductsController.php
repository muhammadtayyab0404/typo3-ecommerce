<?php 

namespace Malik\Mywebsite\Controller;

use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use TYPO3\CMS\Extbase\Utility\DebuggerUtility;
use Malik\Mywebsite\Domain\Repository\ProductsRepository;




class ProductsController extends ActionController{
   
   
   protected ProductsRepository $productsrepo;
   public function injectProductsRepository(ProductsRepository $repo){
      $this->productsrepo =$repo;
    }




    public function listAction(){
         $boxess = $this->productsrepo->findAll();

         $this->view->assign("msg", $boxess);

         return $this->htmlResponse();
    
    }
 }