<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php init_superadminhead(); ?> 

<div id="wrapper" style='margin:0'>
    <div class="content">

        <div class="row">
            <div class="col-md-12">
            <div class="tw-mb-2 sm:tw-mb-4">
                    <a href="<?php echo admin_url('branches/branch'); ?>"
                        class="btn btn-primary">
                        <i class="fa-regular fa-plus tw-mr-1"></i>
                        <?php echo _l('new_branch'); ?></a>
            </div>
            <div class="panel_s">
                    <div class="panel-body panel-table-full">
                    <table class="table table-striped-columns">
                    <thead><th>Branch ID</th><th>Branch Name</th></thead>
                    <tbody>
                        <?php
                        foreach($branches as $item) {
                            ?>
                           <tr>
                           <td><?php echo $item->branch_id; ?></td>
                           <td><?php echo $item->branch_name; ?></td>
                            <td><a href=<?php echo admin_url('branches/branch_home/'.$item->branch_id); ?>
                                class="btn btn-primary">
                                Go</a></td>
                            </tr>
                           <?php
                        }
                        ?>
                    </tbody>
                    </table>
                    </div>
                </div>
            
            </div>
        </div>
</div>
</div>
      

<?php init_tail(); ?>
<script>
</script>
</body>

</html>

