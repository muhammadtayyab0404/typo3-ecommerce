<?php
namespace  Malik\Mywebsite\Controller;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use Psr\Http\Message\ResponseInterface;
use Malik\Mywebsite\Domain\Repository\CommentRepository;
use Malik\Mywebsite\Domain\Model\Comment;
use \TYPO3\CMS\Extbase\Utility\DebuggerUtility;

class CommentsectionController extends ActionController{

    protected $commentRepository;
  

    public function injectCommentRepository(CommentRepository $commentRepository){
        $this->commentRepository = $commentRepository;
    }

    public function commentAction(){
      
    $abc = $this->commentRepository->findAll();
   

     $this->view->assign('record', $abc);
      return $this->htmlResponse();
      
}

  public function commentFormAction(Comment $newcomment = null){
 
    if ($newcomment === null){
        $newcomment = new Comment();
   
    }
     $productid = (int)($this->request->getArgument('Products')? $this->request->getArgument('Products') : 0);

    $this->view->assignMultiple([
    'newcomment'=> $newcomment,
    'productid'=>$productid]);



    
    return $this->htmlResponse();
  }

  public function createAction(Comment $def){
  var_dump($def);
    $this->commentRepository->add($def);
    $this->addFlashMessage('Comment is saved');
    return $this->htmlResponse();

  }
 
}