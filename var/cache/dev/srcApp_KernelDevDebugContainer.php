<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerKJ5UgxG\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerKJ5UgxG/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerKJ5UgxG.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerKJ5UgxG\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerKJ5UgxG\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'KJ5UgxG',
    'container.build_id' => '273159c8',
    'container.build_time' => 1591751931,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerKJ5UgxG');
