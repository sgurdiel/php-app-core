<?php

namespace Xver\PhpAppCoreBundle;

use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;
use Xver\PhpAppCoreBundle\SymfonyFramework\DependencyInjection\PhpAppCoreBundleExtension;

final class PhpAppCoreBundle extends AbstractBundle
{
    #[\Override]
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }

    #[\Override]
    public function getContainerExtension(): ?ExtensionInterface
    {
        if (null === $this->extension) {
            $this->extension = new PhpAppCoreBundleExtension();
        }

        return $this->extension ?: null;
    }
}
