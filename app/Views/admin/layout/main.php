<!DOCTYPE html>
<html lang="<?=service('request')->getLocale()?>">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">

    <title>nTicaret</title>
    <meta name="description" content="Açıklama.">

    <?=csrf_meta()?>

    <link rel="shortcut icon" type="image/x-icon" href="<?=base_url('public/admin/img/favicon.png')?>">

    <!-- General CSS Files -->
    <?=link_tag('https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css')?>
    <?=link_tag('https://use.fontawesome.com/releases/v5.7.2/css/all.css')?>

    <!-- CSS Libraries -->
    <?=link_tag('public/admin/css/selectric.css')?>
    <?=link_tag('public/admin/css/daterangepicker.css')?>
    <?=link_tag('public/admin/css/bootstrap-colorpicker.min.css')?>
    <?=link_tag('public/admin/css/select2.min.css')?>
    <?=link_tag('public/admin/css/bootstrap-timepicker.min.css')?>
    <?=link_tag('public/admin/css/bootstrap-tagsinput.css')?>
    <?=link_tag('public/admin/css/iziToast.min.css')?>

    <!-- Template CSS -->
    <?=link_tag('public/admin/css/style.css')?>
    <?=link_tag('public/admin/css/components.css')?>
    <?=link_tag('public/admin/css/custom.css')?>

    <?php $this->renderSection('styles'); ?>

</head>
<body>
    <div id="app">

        <?php

            if (session()->isLogin)
            {
                echo $this->include('admin/layout/partials/navbar');
                echo $this->include('admin/layout/partials/sidebar');
            }

        ?>

        <?php $this->renderSection('content'); ?>

        <?php

            if (session()->isLogin)
            {
                echo $this->include('admin/layout/partials/footer');
            }

        ?>

    </div>

    <!-- General JS Scripts -->
    <?=script_tag('https://code.jquery.com/jquery-3.3.1.min.js')?>
    <?=script_tag('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js')?>
    <?=script_tag('https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js')?>
    <?=script_tag('https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js')?>
    <?=script_tag('https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js')?>
    <?=script_tag('public/admin/js/stisla.js')?>

    <script>
        let hardDelete = {
            title: '<?=lang('General.text.are_you_sure')?>',
            text: '<?=lang('General.text.hard_delete_text')?>',
            buttons: ['<?=lang('General.text.cancel')?>', '<?=lang('General.text.yes')?>']
        }
    </script>

    <!-- JS Libraries -->
    <?=script_tag('public/admin/js/jquery.pwstrength.min.js')?>
    <?=script_tag('public/admin/js/jquery.selectric.min.js')?>
    <?=script_tag('public/admin/js/jquery-ui.min.js')?>
    <?=script_tag('public/admin/js/cleave.min.js')?>
    <?=script_tag('public/admin/js/cleave-phone.us.js')?>
    <?=script_tag('public/admin/js/daterangepicker.js')?>
    <?=script_tag('public/admin/js/bootstrap-colorpicker.min.js')?>
    <?=script_tag('public/admin/js/bootstrap-timepicker.min.js')?>
    <?=script_tag('public/admin/js/bootstrap-tagsinput.min.js')?>
    <?=script_tag('public/admin/js/select2.full.min.js')?>
    <?=script_tag('public/admin/js/iziToast.min.js')?>
    <?=script_tag('public/admin/js/sweetalert.min.js')?>

    <!-- Template JS File -->
    <?=script_tag('public/admin/js/scripts.js')?>
    <?=script_tag('public/admin/js/custom.js')?>
    <?=script_tag('public/admin/js/request.js')?>

    <!-- Extra JS File -->
    <?=script_tag('public/admin/js/extra/list.js')?>

    <!-- Page Specific JS File -->
    <?=script_tag('public/admin/js/page/auth-register.js')?>
    <?=script_tag('public/admin/js/page/components-table.js')?>

    <!-- Google reCAPTCHA -->
    <?=script_tag('https://www.google.com/recaptcha/api.js')?>

    <?php $this->renderSection('scripts'); ?>

</body>
</html>
