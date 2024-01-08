<?php

declare(strict_types=1);

namespace Pbaszak\SdkBundle;

use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class SdkBundleBundle extends Bundle
{
    public const ALIAS = 'pbaszak.sdk_bundle';

    public function getContainerExtension(): ExtensionInterface
    {
        return $this->extension ??= new DependencyInjection\SdkBundleExtension();
    }
}
