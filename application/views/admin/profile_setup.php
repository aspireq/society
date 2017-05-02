<!DOCTYPE html>
<html lang="en">
    <head>
        <?php echo $common; ?>
    </head>
    <body>
        <?php echo $header ; ?>
        <div class="container-fluid">
            <?php echo $sidebar; ?>
            <div class="dashboard-wrapper">
                <?php echo $top_menu; ?>
                <div class="top-bar clearfix">
                    <div class="container-fluid">
                        <div class="row gutter">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <h3 class="page-title">Manage User</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-container">
                    <div class="row gutter">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="tabbable tabs-left clearfix">
                                <ul class="nav nav-tabs">
                                    <li class=""><a href="#tabOne" data-toggle="tab" aria-expanded="false">Home</a></li>
                                    <li class="active"><a href="#tabTwo" data-toggle="tab" aria-expanded="true">Images</a></li>
                                    <li class=""><a href="#tabThree" data-toggle="tab" aria-expanded="false">Location</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane" id="tabOne">
                                        <h4>Welcome Message</h4>
                                        <p>Here you can enter a greeting message for outsiders, instructions for owners/tenants to join your ADDA, status of your Project ( if it is under construction) etc.</p>
                                        <form>
                                            <div class="form-group">
                                                <textarea id="txtEditor"></textarea>
                                            </div>
                                            <button class="btn btn-info">Save</button>
                                        </form>
                                    </div>
                                    <!-- tab one -->
                                    <div class="tab-pane active" id="tabTwo">
                                        <form>
                                            <div class="form-group">
                                                <label class="control-label">Select File</label>
                                                <input id="input-44" name="input44[]" type="file" multiple class="file-loading form-control">
                                                <div id="errorBlock" class="help-block"></div>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- tab two -->
                                    <div class="tab-pane" id="tabThree">
                                        <div class="row">
                                            <h4>Apartment Complex Address</h4>
                                            <form class="form-horizontal">
                                                <div class="form-group col-md-8">
                                                    <label for="1" class="col-sm-2 control-label">Address</label>
                                                    <div class="col-sm-10">
                                                        <textarea type="text" class="form-control"></textarea> 
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-8">
                                                    <label for="1" class="col-sm-2 control-label">City</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="1" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-8">
                                                    <label for="1" class="col-sm-2 control-label">State</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="1" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-8">
                                                    <label for="1" class="col-sm-2 control-label">Pin Code</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="1" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-8">
                                                    <label for="1" class="col-sm-2 control-label">Phone</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="1" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-8">
                                                    <label for="1" class="col-sm-2 control-label">Building Url</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="1" placeholder="Should begin with http://">
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-8">
                                                    <label for="1" class="col-sm-2 control-label">Association Name</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="1" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-8">
                                                    <label for="1" class="col-sm-2 control-label">Amenities</label>
                                                    <div class="col-sm-10">
                                                        <textarea type="text" class="form-control"></textarea> 
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <button class="btn btn-info">Save</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php echo $footer; ?>
            </div>
        </div>

        <script src="<?php echo base_url(); ?>include_files/admin/js/jquery.js"></script>
        <script src="<?php echo base_url(); ?>include_files/admin/plugin/imageupload/js/plugins/sortable.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>include_files/admin/plugin/imageupload/js/fileinput.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>include_files/admin/plugin/imageupload/themes/explorer/theme.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>include_files/admin/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>include_files/admin/js/jquery-ui.min.js"></script>
        <script src="<?php echo base_url(); ?>include_files/admin/js/scrollup.min.js"></script>
        <script src="<?php echo base_url(); ?>include_files/admin/js/flot/jquery.flot.min.js"></script>
        <script src="<?php echo base_url(); ?>include_files/admin/js/flot/jquery.flot.tooltip.min.js"></script>
        <script src="<?php echo base_url(); ?>include_files/admin/js/flot/jquery.flot.time.min.js"></script>
        <script src="<?php echo base_url(); ?>include_files/admin/js/flot/jquery.flot.resize.min.js"></script>
        <script src="<?php echo base_url(); ?>include_files/admin/js/flot/custom/multi-bar-chart.js"></script>
        <script src="<?php echo base_url(); ?>include_files/admin/js/flot/custom/profile-area.js"></script>
        <script src="<?php echo base_url(); ?>include_files/admin/js/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
        <script src="<?php echo base_url(); ?>include_files/admin/js/jvectormap/gdp-data.js"></script>
        <script src="<?php echo base_url(); ?>include_files/admin/js/jvectormap/usa.js"></script>
        <script src="<?php echo base_url(); ?>include_files/admin/js/jvectormap/custom/usa-profile.js"></script>
        <script src="<?php echo base_url(); ?>include_files/admin/js/d3.min.js"></script>
        <script src="<?php echo base_url(); ?>include_files/admin/js/c3/c3.min.js"></script>
        <script src="<?php echo base_url(); ?>include_files/admin/js/c3/c3.custom.js"></script>
        <script src="<?php echo base_url(); ?>include_files/admin/js/themeSwitcher.js"></script>

        <!-- datatable -->
        <script src="<?php echo base_url(); ?>include_files/admin/js/datatables/dataTables.min.js"></script>
        <script src="<?php echo base_url(); ?>include_files/admin/js/datatables/dataTables.bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>include_files/admin/js/datatables/dataTables.tableTools.js"></script>
        <script src="<?php echo base_url(); ?>include_files/admin/js/datatables/autoFill.min.js"></script>
        <script src="<?php echo base_url(); ?>include_files/admin/js/datatables/autoFill.bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>include_files/admin/js/datatables/fixedHeader.min.js"></script>
        <script src="<?php echo base_url(); ?>include_files/admin/js/datatables/custom-datatables.js"></script>
        <script src="<?php echo base_url(); ?>include_files/admin/js/common.js"></script>
        <script src="<?php echo base_url(); ?>include_files/admin/js/wysiwyg-editor/editor.js"></script>
        <script type="text/javascript">$(function () {
                $("#txtEditor").Editor();
            });
        </script>

        <script>
            $(document).ready(function () {
                $("#input-44").fileinput({
                    uploadUrl: '/file-upload-batch/2',
                    maxFilePreviewSize: 800
                });
            });
        </script>
    </body>
</html>

