<?php

namespace Xver\PhpAppCoreBundle\Entity\Domain;

interface EntityPersistenceInterface
{
    public function getRepository(): EntityRepositoryInterface;
}
