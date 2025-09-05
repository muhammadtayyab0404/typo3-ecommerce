<?php
namespace Malik\Mywebsite\Domain\Repository;

use TYPO3\CMS\Extbase\Persistence\Repository;

class FrontendUserRepository extends Repository
{
    
    public function initializeObject(): void
    {
        $querySettings = $this->createQuery()->getQuerySettings();
        $querySettings->setRespectStoragePage(false); // 🔑 ignore PID
        $this->defaultQuerySettings = $querySettings;
    }
}

