<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">

    <title>nTicaret</title>
    <meta name="description" content="Açıklama.">

    <link rel="shortcut icon" type="image/x-icon" href="<?=base_url('public/admin/img/favicon.png')?>">

    <!-- General CSS Files -->
    <?=link_tag('https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css')?>
    <?=link_tag('https://use.fontawesome.com/releases/v5.7.2/css/all.css')?>

    <!-- CSS Libraries -->
    <?=link_tag('public/admin/css/selectric.css')?>

    <!-- Template CSS -->
    <?=link_tag('public/admin/css/style.css')?>
    <?=link_tag('public/admin/css/components.css')?>

    <?php $this->renderSection('styles'); ?>
</head>
<body>
    <div id="app">

        <?php $this->renderSection('content'); ?>

    </div>

    <!-- General JS Scripts -->
    <?=script_tag('https://code.jquery.com/jquery-3.3.1.min.js')?>
    <?=script_tag('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js')?>
    <?=script_tag('https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js')?>
    <?=script_tag('https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js')?>
    <?=script_tag('https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js')?>
    <?=script_tag('public/admin/js/stisla.js')?>

    <!-- JS Libraries -->
    <?=script_tag('public/admin/js/jquery.pwstrength.min.js')?>
    <?=script_tag('public/admin/js/jquery.selectric.min.js')?>

    <!-- Template JS File -->
    <?=script_tag('public/admin/js/scripts.js')?>
    <?=script_tag('public/admin/js/custom.js')?>

    <!-- Page Specific JS File -->
    <?=script_tag('public/admin/js/page/auth-register.js')?>

    <?php $this->renderSection('scripts'); ?>

</body>
</html>
