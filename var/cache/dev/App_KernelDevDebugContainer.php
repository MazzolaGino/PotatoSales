<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerZsKnEPJ\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerZsKnEPJ/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerZsKnEPJ.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerZsKnEPJ\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerZsKnEPJ\App_KernelDevDebugContainer([
    'container.build_hash' => 'ZsKnEPJ',
    'container.build_id' => 'd5df0788',
    'container.build_time' => 1607385930,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerZsKnEPJ');
