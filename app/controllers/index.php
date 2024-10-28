<?php

$meta = [
    'title' => 'Home',
    'desc' => 'Desc',
    'robots' => 'noindex nofollow',
];

require VIEWS.'/inc.view.php';

ob_start();

require VIEWS.'/index.view.php';

$mainContent = ob_get_clean();

template($meta, '', $mainContent);
