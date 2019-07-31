<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/dashboards/dark/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-dark">
    <div class="bg-black-25">
        <div class="content content-full">
            <div class="row">
                <div class="col-md-6 d-md-flex align-items-md-center">
                    <div class="py-4 py-md-0 text-center text-md-left invisible" data-toggle="appear">
                        <h1 class="font-size-h2 text-white mb-2">Dashboard</h1>
                        <h2 class="font-size-lg font-w400 text-white-75 mb-0">Today is a great one!</h2>
                    </div>
                </div>
                <div class="col-md-6 d-md-flex align-items-md-center">
                    <div class="row w-100 text-center">
                        <div class="col-6 col-xl-4 offset-xl-4 invisible" data-toggle="appear" data-timeout="300">
                            <p class="font-size-h3 font-w600 text-body-color-light mb-0">
                                67
                            </p>
                            <p class="font-size-sm font-w700 text-white-75 text-uppercase mb-0">
                                <i class="far fa-chart-bar text-muted mr-1"></i> Sales
                            </p>
                        </div>
                        <div class="col-6 col-xl-4 invisible" data-toggle="appear" data-timeout="600">
                            <p class="font-size-h3 font-w600 text-body-color-light mb-0">
                                $980
                            </p>
                            <p class="font-size-sm font-w700 text-white-75 text-uppercase mb-0">
                                <i class="far fa-chart-bar text-muted mr-1"></i> Earnings
                            </p>
                        </div>
                    </div>
                </div>
            </div>
       </div>
    </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="bg-dark">
    <div class="content">
        <!-- Quick Stats -->
        <!-- jQuery Sparkline (.js-sparkline class is initialized in Helpers.sparkline() -->
        <!-- For more info and examples you can check out http://omnipotent.net/jquery.sparkline/#s-about -->
        <div class="row">
            <div class="col-md-6 col-xl-3 invisible" data-toggle="appear">
                <a class="block block-rounded block-transparent bg-black-25" href="javascript:void(0)">
                    <div class="block-content block-content-full d-flex align-items-center justify-content-between">
                        <div>
                            <!-- Sparkline Dashboard Users Container -->
                            <span class="js-sparkline" data-type="line"
                                                        data-points="[340,330,360,340,360,350,370,360]"
                                                        data-width="90px"
                                                        data-height="40px"
                                                        data-line-color="#82b54b"
                                                        data-fill-color="transparent"
                                                        data-spot-color="transparent"
                                                        data-min-spot-color="transparent"
                                                        data-max-spot-color="transparent"
                                                        data-highlight-spot-color="#82b54b"
                                                        data-highlight-line-color="#82b54b"
                                                        data-tooltip-suffix="Users"></span>
                        </div>
                        <div class="ml-3 text-right">
                            <p class="text-white-75 mb-0">
                                Users
                            </p>
                            <p class="font-size-h3 font-w300 text-body-color-light mb-0">
                                +350
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-xl-3 invisible" data-toggle="appear" data-timeout="200">
                <a class="block block-rounded block-transparent bg-black-25" href="javascript:void(0)">
                    <div class="block-content block-content-full d-flex align-items-center justify-content-between">
                        <div>
                            <!-- Sparkline Dashboard Tickets Container -->
                            <span class="js-sparkline" data-type="line"
                                                        data-points="[21,17,19,25,24,25,18,27]"
                                                        data-width="90px"
                                                        data-height="40px"
                                                        data-line-color="#e04f1a"
                                                        data-fill-color="transparent"
                                                        data-spot-color="transparent"
                                                        data-min-spot-color="transparent"
                                                        data-max-spot-color="transparent"
                                                        data-highlight-spot-color="#e04f1a"
                                                        data-highlight-line-color="#e04f1a"
                                                        data-tooltip-suffix="Tickets"></span>
                        </div>
                        <div class="ml-3 text-right">
                            <p class="text-white-75 mb-0">
                                Tickets
                            </p>
                            <p class="font-size-h3 font-w300 text-body-color-light mb-0">
                                28
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-xl-3 invisible" data-toggle="appear" data-timeout="400">
                <a class="block block-rounded block-transparent bg-black-25" href="javascript:void(0)">
                    <div class="block-content block-content-full d-flex align-items-center justify-content-between">
                        <div>
                            <!-- Sparkline Dashboard Projects Container -->
                            <span class="js-sparkline" data-type="line"
                                                        data-points="[7,9,5,2,3,4,8,3]"
                                                        data-width="90px"
                                                        data-height="40px"
                                                        data-line-color="#3c90df"
                                                        data-fill-color="transparent"
                                                        data-spot-color="transparent"
                                                        data-min-spot-color="transparent"
                                                        data-max-spot-color="transparent"
                                                        data-highlight-spot-color="#3c90df"
                                                        data-highlight-line-color="#3c90df"
                                                        data-tooltip-suffix="Projects"></span>
                        </div>
                        <div class="ml-3 text-right">
                            <p class="text-white-75 mb-0">
                                Projects
                            </p>
                            <p class="font-size-h3 font-w300 text-body-color-light mb-0">
                                6
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-xl-3 invisible" data-toggle="appear" data-timeout="600">
                <a class="block block-rounded block-transparent bg-black-25" href="javascript:void(0)">
                    <div class="block-content block-content-full d-flex align-items-center justify-content-between">
                        <div>
                            <!-- Sparkline Dashboard Sales Container -->
                            <span class="js-sparkline" data-type="line"
                                                        data-points="[68,25,36,62,59,80,75,89]"
                                                        data-width="90px"
                                                        data-height="40px"
                                                        data-line-color="#fff"
                                                        data-fill-color="transparent"
                                                        data-spot-color="transparent"
                                                        data-min-spot-color="transparent"
                                                        data-max-spot-color="transparent"
                                                        data-highlight-spot-color="#343a40"
                                                        data-highlight-line-color="#343a40"
                                                        data-tooltip-suffix="Sales"></span>
                        </div>
                        <div class="ml-3 text-right">
                            <p class="text-white-75 mb-0">
                                Sales
                            </p>
                            <p class="font-size-h3 font-w300 text-body-color-light mb-0">
                                +89
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <!-- END Quick Stats -->

        <!-- Main Chart -->
        <div class="block block-rounded block-themed block-transparent bg-black-25 block-mode-loading-dark block-mode-loading-refresh invisible" data-toggle="appear">
            <div class="block-header bg-black-25">
                <h3 class="block-title">Earnings</h3>
                <div class="block-options">
                    <div class="btn-group btn-group-sm btn-group-toggle mr-2" data-toggle="buttons" role="group" aria-label="Earnings Select Date Group">
                        <label class="btn btn-secondary" data-toggle="dashboard-chart-set-week">
                            <input type="radio" name="dashboard-chart-options" id="dashboard-chart-options-week"> Week
                        </label>
                        <label class="btn btn-secondary" data-toggle="dashboard-chart-set-month">
                            <input type="radio" name="dashboard-chart-options" id="dashboard-chart-options-month"> Month
                        </label>
                        <label class="btn btn-secondary active" data-toggle="dashboard-chart-set-year">
                            <input type="radio" name="dashboard-chart-options" id="dashboard-chart-options-year" checked> Year
                        </label>
                    </div>
                    <button type="button" class="btn-block-option align-middle" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                        <i class="si si-refresh"></i>
                    </button>
                </div>
            </div>
            <div class="block-content block-content-full overflow-hidden">
                <div class="pull-x pull-b">
                    <!-- Chart.js Dashboard Earnings Container -->
                    <canvas class="js-chartjs-dashboard-earnings" style="height: 340px;"></canvas>
                </div>
            </div>
        </div>
        <!-- END Main Chart -->

        <!-- Users and Purchases -->
        <div class="row row-deck">
            <div class="col-xl-6 invisible" data-toggle="appear">
                <!-- Users -->
                <div class="block block-rounded block-themed block-transparent bg-black-25 block-mode-loading-dark block-mode-loading-refresh">
                    <div class="block-header bg-black-25">
                        <h3 class="block-title">Users</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                <i class="si si-refresh"></i>
                            </button>
                            <button type="button" class="btn-block-option">
                                <i class="si si-cloud-download"></i>
                            </button>
                            <div class="dropdown">
                                <button type="button" class="btn-block-option" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="si si-wrench"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="javascript:void(0)">
                                        <i class="far fa-fw fa-user mr-1"></i> New Users
                                    </a>
                                    <a class="dropdown-item" href="javascript:void(0)">
                                        <i class="far fa-fw fa-bookmark mr-1"></i> VIP Users
                                    </a>
                                    <div role="separator" class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="javascript:void(0)">
                                        <i class="fa fa-fw fa-pencil-alt"></i> Manage
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="block-content">
                        <table class="table table-borderless table-dark table-hover table-vcenter bg-transparent font-size-sm text-body-color-light">
                            <thead>
                                <tr class="text-uppercase">
                                    <th class="font-w700" style="width: 120px;">Avatar</th>
                                    <th class="font-w700">Name</th>
                                    <th class="d-none d-sm-table-cell font-w700">Access</th>
                                    <th class="font-w700 text-center" style="width: 60px;"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <?php $dm->get_avatar(0, 'female', 32, true); ?>
                                    </td>
                                    <td>
                                        <div class="font-w600 font-size-base"><?php $dm->get_name('female'); ?></div>
                                        <div class="text-white-75">carol@example.com</div>
                                    </td>
                                    <td class="d-none d-sm-table-cell font-size-base">
                                        <span class="badge badge-dark">VIP</span>
                                    </td>
                                    <td class="text-right">
                                        <a class="text-primary-lighter" href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="Edit User">
                                            <i class="fa fa-fw fa-pencil-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php $dm->get_avatar(0, 'male', 32, true); ?>
                                    </td>
                                    <td>
                                        <div class="font-w600 font-size-base"><?php $dm->get_name('male'); ?></div>
                                        <div class="text-white-75">smith@example.com</div>
                                    </td>
                                    <td class="d-none d-sm-table-cell font-size-base">
                                        <span class="badge badge-secondary">Pro</span>
                                    </td>
                                    <td class="text-right">
                                        <a class="text-primary-lighter" href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="Edit User">
                                            <i class="fa fa-fw fa-pencil-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php $dm->get_avatar(0, 'male', 32, true); ?>
                                    </td>
                                    <td>
                                        <div class="font-w600 font-size-base"><?php $dm->get_name('male'); ?></div>
                                        <div class="text-white-75">john@example.com</div>
                                    </td>
                                    <td class="d-none d-sm-table-cell font-size-base">
                                        <span class="badge badge-dark">VIP</span>
                                    </td>
                                    <td class="text-right">
                                        <a class="text-primary-lighter" href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="Edit User">
                                            <i class="fa fa-fw fa-pencil-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php $dm->get_avatar(0, 'female', 32, true); ?>
                                    </td>
                                    <td>
                                        <div class="font-w600 font-size-base"><?php $dm->get_name('female'); ?></div>
                                        <div class="text-white-75">lori@example.com</div>
                                    </td>
                                    <td class="d-none d-sm-table-cell font-size-base">
                                        <span class="badge badge-secondary">Pro</span>
                                    </td>
                                    <td class="text-right">
                                        <a class="text-primary-lighter" href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="Edit User">
                                            <i class="fa fa-fw fa-pencil-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php $dm->get_avatar(0, 'male', 32, true); ?>
                                    </td>
                                    <td>
                                        <div class="font-w600 font-size-base"><?php $dm->get_name('male'); ?></div>
                                        <div class="text-white-75">jack@example.com</div>
                                    </td>
                                    <td class="d-none d-sm-table-cell font-size-base">
                                        <span class="badge badge-success">Free</span>
                                    </td>
                                    <td class="text-right">
                                        <a class="text-primary-lighter" href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="Edit User">
                                            <i class="fa fa-fw fa-pencil-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- END Users -->
            </div>
            <div class="col-xl-6 invisible" data-toggle="appear" data-timeout="200">
                <!-- Purchases -->
                <div class="block block-rounded block-themed block-transparent bg-black-25 block-mode-loading-dark block-mode-loading-refresh">
                    <div class="block-header bg-black-25">
                        <h3 class="block-title">Purchases</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                <i class="si si-refresh"></i>
                            </button>
                            <button type="button" class="btn-block-option">
                                <i class="si si-cloud-download"></i>
                            </button>
                            <div class="dropdown">
                                <button type="button" class="btn-block-option" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="si si-wrench"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="javascript:void(0)">
                                        <i class="fa fa-fw fa-sync fa-spin text-warning mr-1"></i> Pending
                                    </a>
                                    <a class="dropdown-item" href="javascript:void(0)">
                                        <i class="far fa-fw fa-times-circle text-danger mr-1"></i> Cancelled
                                    </a>
                                    <a class="dropdown-item" href="javascript:void(0)">
                                        <i class="far fa-fw fa-check-circle text-success mr-1"></i> Cancelled
                                    </a>
                                    <div role="separator" class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="javascript:void(0)">
                                        <i class="fa fa-fw fa-eye mr-1"></i> View All
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="block-content">
                        <table class="table table-borderless table-dark table-hover table-vcenter bg-transparent font-size-sm text-body-color-light">
                            <thead>
                                <tr class="text-uppercase">
                                    <th class="font-w700">Product</th>
                                    <th class="d-none d-sm-table-cell font-w700">Date</th>
                                    <th class="font-w700">State</th>
                                    <th class="d-none d-sm-table-cell font-w700 text-right" style="width: 120px;">Price</th>
                                    <th class="font-w700 text-center" style="width: 60px;"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <span class="font-w600">iPhone X</span>
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        <span class="font-size-sm text-white-75">today</span>
                                    </td>
                                    <td>
                                        <span class="font-w600 text-warning">Pending..</span>
                                    </td>
                                    <td class="d-none d-sm-table-cell text-right">
                                        $999,99
                                    </td>
                                    <td class="text-right">
                                        <a class="text-primary-lighter" href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="Manage">
                                            <i class="fa fa-fw fa-pencil-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="font-w600">MacBook Pro 15"</span>
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        <span class="font-size-sm text-white-75">today</span>
                                    </td>
                                    <td>
                                        <span class="font-w600 text-warning">Pending..</span>
                                    </td>
                                    <td class="d-none d-sm-table-cell text-right">
                                        $2.299,00
                                    </td>
                                    <td class="text-right">
                                        <a class="text-primary-lighter" href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="Manage">
                                            <i class="fa fa-fw fa-pencil-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="font-w600">Nvidia GTX 1080 Ti</span>
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        <span class="font-size-sm text-white-75">today</span>
                                    </td>
                                    <td>
                                        <span class="font-w600 text-warning">Pending..</span>
                                    </td>
                                    <td class="d-none d-sm-table-cell text-right">
                                        $1200,00
                                    </td>
                                    <td class="text-right">
                                        <a class="text-primary-lighter" href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="Manage">
                                            <i class="fa fa-fw fa-pencil-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="font-w600">Playstation 4 Pro</span>
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        <span class="font-size-sm text-white-75">today</span>
                                    </td>
                                    <td>
                                        <span class="font-w600 text-danger">Cancelled</span>
                                    </td>
                                    <td class="d-none d-sm-table-cell text-right">
                                        $399,00
                                    </td>
                                    <td class="text-right">
                                        <a class="text-primary-lighter" href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="Manage">
                                            <i class="fa fa-fw fa-pencil-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="font-w600">Nintendo Switch</span>
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        <span class="font-size-sm text-white-75">yesterday</span>
                                    </td>
                                    <td>
                                        <span class="font-w600 text-success">Completed</span>
                                    </td>
                                    <td class="d-none d-sm-table-cell text-right">
                                        $349,00
                                    </td>
                                    <td class="text-right">
                                        <a class="text-primary-lighter" href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="Manage">
                                            <i class="fa fa-fw fa-pencil-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="font-w600">iPhone X</span>
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        <span class="font-size-sm text-white-75">yesterday</span>
                                    </td>
                                    <td>
                                        <span class="font-w600 text-success">Completed</span>
                                    </td>
                                    <td class="d-none d-sm-table-cell text-right">
                                        $999,00
                                    </td>
                                    <td class="text-right">
                                        <a class="text-primary-lighter" href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="Manage">
                                            <i class="fa fa-fw fa-pencil-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="font-w600">Echo Dot</span>
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        <span class="font-size-sm text-white-75">yesterday</span>
                                    </td>
                                    <td>
                                        <span class="font-w600 text-success">Completed</span>
                                    </td>
                                    <td class="d-none d-sm-table-cell text-right">
                                        $39,99
                                    </td>
                                    <td class="text-right">
                                        <a class="text-primary-lighter" href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="Manage">
                                            <i class="fa fa-fw fa-pencil-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="font-w600">Xbox One X</span>
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        <span class="font-size-sm text-white-75">yesterday</span>
                                    </td>
                                    <td>
                                        <span class="font-w600 text-success">Completed</span>
                                    </td>
                                    <td class="d-none d-sm-table-cell text-right">
                                        $499,00
                                    </td>
                                    <td class="text-right">
                                        <a class="text-primary-lighter" href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="Manage">
                                            <i class="fa fa-fw fa-pencil-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- END Purchases -->
            </div>
        </div>
        <!-- END Users and Purchases -->
    </div>
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Plugins -->
<?php $dm->get_js('js/plugins/jquery-sparkline/jquery.sparkline.min.js'); ?>
<?php $dm->get_js('js/plugins/chart.js/Chart.bundle.min.js'); ?>

<!-- Page JS Code -->
<?php $dm->get_js('js/pages/db_dark.min.js'); ?>

<!-- Page JS Helpers (jQuery Sparkline plugin) -->
<script>jQuery(function(){ Dashmix.helpers('sparkline'); });</script>

<?php require 'inc/_global/views/footer_end.php'; ?>