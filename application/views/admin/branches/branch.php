<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php init_superadminhead(); ?> 
<div id="wrapper" style='margin:0'>
    <div class="content">
        <div class="row">
            <div class="col-md-7">
                
                <?php echo form_open($this->uri->uri_string(), ['id' => 'add_branch', 'autocomplete' => 'off']); ?>

                <div class="panel_s">
                    <div class="panel-body">
                        <?php $value = (isset($branch) ? $branch[0]->branch_name : ''); ?> 
                        <div class="form-group">
                            <?php echo render_input('branch_name', 'branch_name', $value, 'text');?>
                        </div>
                        <div class="form-group">
                           
                        <?php $value = (isset($branch) ? $branch[0]->branch_location : ''); ?> 
                        <?php echo render_input('branch_location', 'branch_location', $value, 'text');?>
                        </div>
                        <div class="form-group">
                        <?php $value = (isset($branch) ? $branch[0]->language : ''); ?> 
                        <?php echo render_input('language', 'language', $value, 'text');?>
                            
                        </div>
                        <div class="form-group">
                        <?php $value = (isset($branch) ? $branch[0]->currency : ''); ?> 
                        <?php echo render_input('currency', 'currency', $value, 'text');?>
                            
                        </div>      
                    <div class="panel-footer text-right">
                        <button type="submit" class="btn btn-primary"><?php echo _l('submit'); ?></button>
                    </div>
                </div>
                <?php echo form_close(); ?>
            </div>
            
        </div>
    </div>
    <?php init_tail(); ?>
    <script>
    $(function() {
        var qr_loaded = 0;
        var is_g2fa_enabled = "<?php echo $current_user->two_factor_auth_enabled ?>"
        $('input[type=radio][name="two_factor_auth"]').change(function() {
            if (this.value == 'google') {
                if (is_g2fa_enabled == 2) {
                    return;
                }

                if (qr_loaded == 0) {
                    $('#qr_image').load(admin_url + 'authentication/get_qr', {}, function(response,
                        status) {
                        qr_loaded = 1;
                        $('#qr_image').show();
                    });
                } else {
                    $('#qr_image').show();
                }
                $('#submit_2fa').prop("disabled", true);
            } else {
                $('#qr_image').hide();
                $('#submit_2fa').prop("disabled", false);
            }
        });
        appValidateForm($('#staff_profile_table'), {
            firstname: 'required',
            lastname: 'required',
            email: 'required'
        });
        appValidateForm($('#staff_password_change_form'), {
            oldpassword: 'required',
            newpassword: 'required',
            newpasswordr: {
                equalTo: "#newpassword"
            }
        });
        appValidateForm($('#two_factor_auth_form'), {
            two_factor_auth: 'required'
        });
    });
    </script>
    </body>

    </html>
