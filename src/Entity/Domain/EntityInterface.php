<?php

namespace Xver\PhpAppCoreBundle\Entity\Domain;

interface EntityInterface
{
    public function sameId(EntityInterface $otherEntity): bool;
}
