<?php

namespace Jul6art\AuthBundle\Manager\Traits;

use Jul6art\AuthBundle\Manager\UserManager;

/**
 * Trait UserManagerAwareTrait
 */
trait UserManagerAwareTrait
{
    /**
     * @var UserManager
     */
    protected $userManager;

    /**
     * @required
     * @param UserManager $userManager
     */
    public function setUserManager(UserManager $userManager): void
    {
        $this->userManager = $userManager;
    }
}
