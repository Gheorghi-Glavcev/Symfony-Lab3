<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerAC37xEr\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerAC37xEr/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerAC37xEr.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerAC37xEr\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerAC37xEr\App_KernelDevDebugContainer([
    'container.build_hash' => 'AC37xEr',
    'container.build_id' => 'd3716b22',
    'container.build_time' => 1604611280,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerAC37xEr');
