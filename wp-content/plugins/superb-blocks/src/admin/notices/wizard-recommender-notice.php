<?php

use SuperbAddons\Admin\Controllers\DashboardController;

defined('ABSPATH') || exit;

$url = add_query_arg(
    array(
        'page' => DashboardController::PAGE_WIZARD,
    ),
    admin_url("admin.php")
);
?>
<div class="notice notice-info superb-addons-wizard-notification is-dismissible <?php echo esc_attr($notice['unique_id']); ?>" style="background-image:url(<?php echo esc_url(SUPERBADDONS_ASSETS_PATH . '/img/illustration-cards-medium.jpg'); ?>);">
    <div class="superbthemes-module-purple-badge"><?php echo esc_html__("Superb Addons", "superb-blocks"); ?></div>
    <br>
    <h2 class="notice-title"><?php echo esc_html__("Start Designing", "superb-blocks"); ?> <br><?php echo esc_html__("Your Website", "superb-blocks"); ?></h2>
    <p><?php echo esc_html__("Quickly customize your website’s design. Choose layouts for your menu, footer, homepage, blog, and more. Launch the Theme Designer now to easily create a website that looks just the way you want!", "superb-blocks"); ?></p>

    <a class='button button-large button-secondary' href='<?php echo esc_url($url); ?>'><?php echo esc_html__("Read More", "superb-blocks"); ?></a>
    <a class='button button-large button-primary' href='<?php echo esc_url($url); ?>'><?php echo esc_html__("Launch Theme Designer", "superb-blocks"); ?></a>

    <style>
        .superb-addons-wizard-notification {
            background-repeat: no-repeat !important;
            background-position: bottom right !important;
            background-size: 530px !important;
            padding: 30px !important;
        }

        .superb-addons-wizard-notification h2 {
            font-size: 36px !important;
            line-height: 125% !important;
            margin: 0 !important;
        }

        .superb-addons-wizard-notification p {
            color: #546E7A !important;
            font-size: 17px !important;
            margin: 15px 0 25px !important;
            max-width: 550px !important;
        }

        .superbthemes-module-purple-badge {
            color: #6448E7 !important;
            padding: 12px 15px !important;
            background: #EDE7F6 !important;
            border-radius: 30px !important;
            margin-bottom: 10px !important;
            font-weight: 500 !important;
            display: inline-block !important;
            font-size: 13px !important;
            line-height: 1 !important;
        }

        @media only screen and (max-width: 1280px) {
            .superb-addons-wizard-notification p {
                max-width: 430px !important;
            }
        }

        @media only screen and (max-width: 1160px) {
            .superb-addons-wizard-notification {
                background-position: bottom -10px right -210px !important;
            }
        }

        @media only screen and (max-width: 960px) {
            .superb-addons-wizard-notification {
                background-image: none !important;
            }

            .superb-addons-wizard-notification p {
                max-width: 100% !important;
            }

            .superb-addons-wizard-notification h2 br {
                display: none !important;
            }
        }

        @media only screen and (max-width: 800px) {
            .superb-addons-wizard-notification p {
                font-size: 15px !important;
            }

            .superb-addons-wizard-notification h2 {
                font-size: 28px !important;
            }
        }
    </style>
</div>