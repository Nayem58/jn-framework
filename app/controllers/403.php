<?php

$meta = [
    'title' => '403 Forbidden',
    'desc' => 'You are not authorized to view this page.',
    'robots' => 'noindex nofollow',
];

require VIEWS.'/inc.view.php';

ob_start();

require VIEWS.'/403.view.php';

$mainContent = ob_get_clean();

template($meta, '', $mainContent);
