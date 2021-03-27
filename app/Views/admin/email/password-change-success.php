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
                                <?=lang('EmailTemplate.text.password_change_hello')?> <strong><?=$user->getFullName()?></strong>,
                            </p>
                            <p>
                                <?=lang('EmailTemplate.text.password_change_content')?>
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
                                                                <?=lang('EmailTemplate.text.password_change_button')?>
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
                                <?=lang('EmailTemplate.text.password_change_content_bottom')?>
                            </p>
                            <p>
                                <?=lang('EmailTemplate.text.password_change_thanks')?>
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
