<?php
require VIEWS.'/partials/_head.php';
require VIEWS.'/partials/_header.php';
require VIEWS.'/partials/_aside.php';
function template(
    $meta = [],
    $additionalHeadTags = '',
    $mainContent = '',
    $additionalScripts = ''
): void { ?>

    <!DOCTYPE html>
    <html lang="en">

    <?= head($meta, $additionalHeadTags); ?>

    <body>
    <?= htmlHeader(); ?>
    <main>
      <?= $mainContent; ?>
    </main>
    <?= aside(); ?>

    <?= $additionalScripts; ?>

    <script src="/assets/inc/main.js"></script>
    </body>

    </html>

<?php } ?>