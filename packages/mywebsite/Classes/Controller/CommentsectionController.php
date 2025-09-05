<?php
namespace  Malik\Mywebsite\Controller;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use Psr\Http\Message\ResponseInterface;
use Malik\Mywebsite\Domain\Repository\CommentRepository;
use Malik\Mywebsite\Domain\Model\Comment;
use \TYPO3\CMS\Extbase\Utility\DebuggerUtility;
use Malik\Mywebsite\Domain\Repository\FrontendUserRepository;
use TYPO3\CMS\Core\Context\Context;
use TYPO3\CMS\Core\Utility\GeneralUtility;


class CommentsectionController extends ActionController{

    protected $commentRepository;

    protected $frontendUserRepository;
  


    public function injectFrontendUserRepository(FrontendUserRepository $frontendUserRepository){
      $this->frontendUserRepository = $frontendUserRepository;
    }
    public function injectCommentRepository(CommentRepository $commentRepository){
        $this->commentRepository = $commentRepository;
    }

    public function commentAction(Comment $newcomment = null){
      
    
     $abc = $this->request->getQueryParams();
     $productttId=(int)( $abc['Products'] ?? 0);

    $commentrepo = $this->commentRepository->findByProdId( $productttId);
    $def= $this->frontendUserRepository->findAll();
     $commentsWithUser = [];

    if($commentrepo){

      foreach($commentrepo as $comment){

        $productid= $comment->getUserid();
        $def = $this->frontendUserRepository->findByUid($productid);
        $firstname = $def->getFirstName();  
       $commentsWithUser[]=[
        'comment' =>$comment,
        'firstName'=> $firstname ??'' ]; 

     
    }
      $this->view->assign('commentsWithUser', $commentsWithUser);
    
     $this->view->assign('record', $commentrepo);
  }



     $this->view->assign('productId', $productttId);

      if ($newcomment === null){
        $newcomment = new Comment();
   
    }

         $context = GeneralUtility::makeInstance(Context::class);
        $isLoggedIn = $context->getAspect('frontend.user');
        $userId = $context->getAspect('frontend.user')->get('id'); // fe_users.uid

        // Request attribute → full FE user array
        $userData = $this->request->getAttribute('frontend.user')->user ?? null;
         if($userData){
          $firstnname = $userData['first_name'];

         }

        $feUserAuth = $this->request->getAttribute('frontend.user');
        // debug($uuid);

        // debug($userId);
        // debug($userData);
        
        // debug($firstnname);   // ['uid' => 3, 'username' => ..., 'email' => ...]


    // $feUser = $GLOBALS['TSFE']->fe_user->user ?? null;
    // $feUserId = $GLOBALS['TSFE']->fe_user->user ?? 0;

      $this->view->assign('userId',$userId);


      return $this->htmlResponse();
      
}

  public function createAction(Comment $def){
 
    
    $commentText = $def->getComments();
    $productId   = $def->getProdid();

    $this->commentRepository->add($def);
    $this->addFlashMessage('Comment is saved');
    
    
     return $this->redirect('list','Products','Mywebsite',[],13);
   

  }
 
}