<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerCKx3F1O\App_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerCKx3F1O/App_KernelProdContainer.php') {
    touch(__DIR__.'/ContainerCKx3F1O.legacy');

    return;
}

if (!\class_exists(App_KernelProdContainer::class, false)) {
    \class_alias(\ContainerCKx3F1O\App_KernelProdContainer::class, App_KernelProdContainer::class, false);
}

return new \ContainerCKx3F1O\App_KernelProdContainer([
    'container.build_hash' => 'CKx3F1O',
    'container.build_id' => '970c6567',
    'container.build_time' => 1681370685,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerCKx3F1O');