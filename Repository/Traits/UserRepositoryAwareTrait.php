<?php

namespace Jul6art\AuthBundle\Repository\Traits;

use Jul6art\AuthBundle\Repository\UserRepository;

/**
 * Trait UserRepositoryAwareTrait
 */
trait UserRepositoryAwareTrait
{
    /**
     * @var UserRepository
     */
    protected $userRepository;

    /**
     * @required
     * @param UserRepository $userRepository
     */
    public function setUserRepository(UserRepository $userRepository): void
    {
        $this->userRepository = $userRepository;
    }
}
