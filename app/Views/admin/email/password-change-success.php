<?php $this->extend('admin/email/main'); ?>

<?php $this->section('content'); ?>

    <!-- START CENTERED WHITE CONTAINER -->
    <table role="presentation" class="main">

        <!-- START MAIN CONTENT AREA -->
        <tr>
            <td class="wrapper">
                <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                        <td>
                            <p>
                                <?=lang('EmailTemplate.forgot.success.hello')?> <strong>Emin Arif Pirinç</strong>,
                            </p>
                            <p>
                                <?=lang('EmailTemplate.forgot.success.content')?>
                            </p>
                            <table role="presentation" border="0" cellpadding="0" cellspacing="0" class="btn btn-primary">
                                <tbody>
                                    <tr>
                                        <td align="left">
                                            <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <a href="#" target="_blank">
                                                                <?=lang('EmailTemplate.forgot.success.button')?>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <p>
                                <?=lang('EmailTemplate.forgot.success.thanks')?>
                            </p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <!-- END MAIN CONTENT AREA -->

    </table>
    <!-- END CENTERED WHITE CONTAINER -->

<?php $this->endSection(); ?>
