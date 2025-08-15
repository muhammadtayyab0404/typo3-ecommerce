<?php 

namespace Malik\Mywebsite\Controller;

use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use Psr\Http\Message\ResponseInterface;
use Malik\Mywebsite\Domain\Repository\ProductsRepository;
use \TYPO3\CMS\Core\Utility\GeneralUtility;

class DetailController extends ActionController{

    protected $productsRepository;
    
    public function injectProductsRepository(ProductsRepository $productsRepository)
    {
        $this->productsRepository = $productsRepository;
    }
public function listAction(){

      $productIdd = $this->request->getQueryParams();
      $productId= $productIdd['Products'] ?? null;


      $product = $this->productsRepository->findByUid($productId);
    
    $this->view->assign("product",$product);
    return $this->htmlResponse();
   
}

}