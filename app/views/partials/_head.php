<?php
function head($meta = [], $additionalHeadTags = ''): void
{ ?>

    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta name="description"
              content="<?= htmlspecialchars($meta['desc'] ?? ''); ?>"/>
        <meta name="robots"
              content="<?= htmlspecialchars($meta['robots'] ?? ''); ?>"/>
        <meta name="theme-color" content="#ffffff">

        <title><?= htmlspecialchars($meta['title'] ?? ''); ?></title>

        <link rel="shortcut icon" href="/assets/images/favicon.ico"/>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300..700&display=swap"
              rel="stylesheet">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
              rel="stylesheet">
        <link rel="stylesheet" href="/assets/inc/custom-framework.css"/>
        <link rel="stylesheet" href="/assets/inc/style.css"/>

      <?= $additionalHeadTags ?? ''; ?>

    </head>

<?php } ?>