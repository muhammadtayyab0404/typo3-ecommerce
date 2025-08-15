<?php 

namespace Malik\Mywebsite\Controller;

use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use Malik\Mywebsite\Domain\Repository\BoxcontentelemtRepository;
use TYPO3\CMS\Extbase\Configuration\ConfigurationManager;
use TYPO3\CMS\Extbase\Persistence\Repository;
use TYPO3\CMS\Extbase\Configuration\ConfigurationManagerInterface;
use TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;





class ContentController extends ActionController{


protected BoxcontentelemtRepository $boxcontent;
protected ConfigurationManagerInterface $configurationManager;
    
public function injectBoxcontentelemtRepository ( BoxcontentelemtRepository $boxcontent01):void {
        $this->boxcontent = $boxcontent01;
    }

    public function __construct(ConfigurationManagerInterface $configurationManager)
    {
        $this->configurationManager = $configurationManager;
    }

    // public function listAction(): ServerRequestInterface{

        //  $uid = 0;
        //  debug($this->configurationManager);
        //  exit();
        // $contentObject = $this->configurationManager;
        // if ($contentObject->getCurrentTable() === 'tt_content') {
        //     $uid = $contentObject->data['uid'] ?? 0;
        // }

        // debug($uid);
        // exit();

        // /**
        //  * @var \TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer $currentContentObject
        //  */
        // debug($GLOBALS['TSFE']->cObj->data['uid']);
        // // debug($this->configurationManager->getContentObject());
        // exit();
        // $currentContentObject = $this->request->getAttribute('currentContentObject');
        // var_dump($currentContentObject);
        // exit();

        // $contentObject = $this->configurationManager->getContentObject();


        // ID of current tt_content record
        // $uid = $currentContentObject->data['uid'];



// /**
//  * @var \TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer $currentContentObject
//  */
// $currentContentObject = $request->getAttribute('currentContentObject');
// // ID of current tt_content record
// $uid = $currentContentObject->data['uid'];

//         $boxes = $this->boxcontent->findAll();
//         $this->view->assign('msg', $boxes);
//         return $this->htmlResponse();
//     }
// }

public function listAction()
{
        $boxes = $this->boxcontent->findAll();
         $this->view->assign('msg', $boxes);
         return $this->htmlResponse();



}

}