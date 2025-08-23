<?php
namespace  Malik\Mywebsite\Controller;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use Psr\Http\Message\ResponseInterface;
use Malik\Mywebsite\Domain\Repository\CommentRepository;

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
}