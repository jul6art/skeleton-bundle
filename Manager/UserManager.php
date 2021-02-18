<?php

namespace Jul6art\AuthBundle\Manager;

use Jul6art\AuthBundle\Repository\Traits\UserRepositoryAwareTrait;
use Jul6Art\CoreBundle\Manager\AbstractManager;

/**
 * Class AbstractManager
 */
class UserManager extends AbstractManager
{
    use UserRepositoryAwareTrait;
}
