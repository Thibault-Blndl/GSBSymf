<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerE0Xxdba\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerE0Xxdba/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerE0Xxdba.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerE0Xxdba\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerE0Xxdba\App_KernelDevDebugContainer([
    'container.build_hash' => 'E0Xxdba',
    'container.build_id' => 'cc965368',
    'container.build_time' => 1619699293,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerE0Xxdba');
