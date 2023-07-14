<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<div id="header" style='margin:0'>
    

    <nav>
        <div class="tw-flex tw-justify-between">
            <div class="tw-flex tw-flex-1 sm:tw-flex-initial">
                

                

                
               

                
            </div>

            <div class="mobile-menu tw-shrink-0 ltr:tw-ml-4 rtl:tw-mr-4">
                <button type="button"
                    class="navbar-toggle visible-md visible-sm visible-xs mobile-menu-toggle collapsed tw-ml-1.5"
                    data-toggle="collapse" data-target="#mobile-collapse" aria-expanded="false">
                    <i class="fa fa-chevron-down fa-lg"></i>
                </button>
                <ul class="mobile-icon-menu tw-inline-flex tw-mt-5">
                    <?php
               // To prevent not loading the timers twice
            if (is_mobile()) { ?>
                    <li
                        class="dropdown notifications-wrapper header-notifications tw-block ltr:tw-mr-1.5 rtl:tw-ml-1.5">
                        <?php $this->load->view('admin/includes/notifications'); ?>
                    </li>
                    <li class="header-timers ltr:tw-mr-1.5 rtl:tw-ml-1.5">
                        <a href="#" id="top-timers" class="dropdown-toggle top-timers tw-block tw-h-5 tw-w-5"
                            data-toggle="dropdown">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="tw-w-5 tw-h-5 tw-shrink-0">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span
                                class="tw-leading-none tw-px-1 tw-py-0.5 tw-text-xs bg-success tw-z-10 tw-absolute tw-rounded-full -tw-right-3 -tw-top-2 tw-min-w-[18px] tw-min-h-[18px] tw-inline-flex tw-items-center tw-justify-center icon-started-timers<?php echo $totalTimers = count($startedTimers) == 0 ? ' hide' : ''; ?>"><?php echo count($startedTimers); ?></span>
                        </a>
                        <ul class="dropdown-menu animated fadeIn started-timers-top width300" id="started-timers-top">
                            <?php $this->load->view('admin/tasks/started_timers', ['startedTimers' => $startedTimers]); ?>
                        </ul>
                    </li>
                    <?php } ?>
                </ul>

                <div class="mobile-navbar collapse" id="mobile-collapse" aria-expanded="false" style="height: 0px;"
                    role="navigation">
                    <ul class="nav navbar-nav">
                        <li class="header-my-profile"><a href="<?php echo admin_url('profile'); ?>">
                                <?php echo _l('nav_my_profile'); ?>
                            </a>
                        </li>
                        <li class="header-my-timesheets"><a href="<?php echo admin_url('staff/timesheets'); ?>">
                                <?php echo _l('my_timesheets'); ?>
                            </a>
                        </li>
                        <li class="header-edit-profile"><a href="<?php echo admin_url('staff/edit_profile'); ?>">
                                <?php echo _l('nav_edit_profile'); ?>
                            </a>
                        </li>
                        <?php if (is_staff_member()) { ?>
                        <li class="header-newsfeed">
                            <a href="#" class="open_newsfeed mobile">
                                <?php echo _l('whats_on_your_mind'); ?>
                            </a>
                        </li>
                        <?php } ?>
                        <li class="header-logout">
                            <a href="#" onclick="logout(); return false;">
                                <?php echo _l('nav_logout'); ?>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            

            <div><button class='btn btn-primary' onclick=logout()>Logout</button></div>
        </div>
    </nav>
</div>