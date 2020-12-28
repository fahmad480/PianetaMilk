<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('/assets/css/font-awesome.css') ?>">
    <link rel="stylesheet" href="<?= base_url('/assets/css/style.css') ?>">
    <link rel="icon" href="<?= base_url('/favicon.ico'); ?>" type="image/png">
    <?= @$additional_css; ?>

    <title><?= $title . " | " . getenv('app.name') ?></title>

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <link href="<?= base_url('/assets/css/style-payment.css'); ?>" rel="stylesheet">
</head>

<body class="text-center">
    <form class="centered-screen">
        <?= $payment_content; ?>
    </form>
</body>

</html>