<div class="content-wrapper">
        <section class="content-header">
                <h1>
                        Add New Vendor
                </h1>
                <ol class="breadcrumb">
                        <li><a href="<?php echo base_url() ?>evadmin/home"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="<?php echo base_url() ?>evadmin/Vendor/view_vendor"><i class="fa fa-dashboard"></i> All Vendor </a></li>

                </ol>
        </section>
        <section class="content">
                <div class="row">
                        <div class="col-lg-12">

                                <div class="panel panel-default">
                                        <div class="panel-heading">
                                                <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Add New Vendor</h3>
                                        </div>

                                        <?php if (!empty($this->session->flashdata('smessage'))) { ?>
                                                <div class="alert alert-success alert-dismissible">
                                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                        <h4><i class="icon fa fa-check"></i> Alert!</h4>
                                                        <?php echo $this->session->flashdata('smessage'); ?>
                                                </div>
                                        <?php }
                                        if (!empty($this->session->flashdata('emessage'))) { ?>
                                                <div class="alert alert-danger alert-dismissible">
                                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                        <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                                                        <?php echo $this->session->flashdata('emessage'); ?>
                                                </div>
                                        <?php } ?>


                                        <div class="panel-body">
                                                <div class="col-lg-10">
                                                        <form action="<?php echo base_url() ?>evadmin/Vendor/add_Vendor_data/<?php echo base64_encode(1); ?>" method="POST" id="slide_frm" enctype="multipart/form-data">
                                                                <div class="table-responsive">
                                                                        <table class="table table-hover">

                                                                                <tr>
                                                                                        <td> <strong>Name</strong> <span style="color:red;">*</span></strong> </td>
                                                                                        <td>
                                                                                                <input type="text" name="name" class="form-control" placeholder="" required value="" />
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td> <strong>Business Name</strong> <span style="color:red;">*</span></strong> </td>
                                                                                        <td>
                                                                                                <input type="text" name="business_name" class="form-control" placeholder="" required value="" />
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td> <strong>GST Number</strong> <span style="color:red;">*</span></strong> </td>
                                                                                        <td>
                                                                                                <input type="text" name="gst" class="form-control" placeholder="" required value="" />
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td> <strong>Address</strong> <span style="color:red;">*</span></strong> </td>
                                                                                        <td>
                                                                                                <input type="text" name="address" class="form-control" placeholder="" required value="" />
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td> <strong>State</strong> <span style="color:red;"></span></strong> </td>
                                                                                        <td><select class="form-control" name="state" required>
                                                                                                        <option value="">---- Select State</option>
                                                                                                        <? foreach ($state_data as $state) { ?>
                                                                                                                <option value="<?= $state->state_name ?>"><?= $state->state_name ?></option>
                                                                                                        <? } ?>
                                                                                                </select>
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td> <strong>City</strong> <span style="color:red;"></span></strong> </td>
                                                                                        <td>
                                                                                                <input type="text" name="city" class="form-control" placeholder="" value="" />
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td> <strong>Pin Code</strong> <span style="color:red;"></span></strong> </td>
                                                                                        <td>
                                                                                                <input type="text" name="pincode" class="form-control" placeholder="" value="" onkeypress="return isNumberKey(event)" maxlength="6" minlength="6" />
                                                                                        </td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td> <strong>Contact Number</strong> <span style="color:red;">*</span></strong> </td>
                                                                                        <td>
                                                                                                <input type="text" name="phone" class="form-control" onkeypress="return isNumberKey(event)" maxlength="10" minlength="10" placeholder="" required value="" />
                                                                                        </td>
                                                                                </tr>

                                                                                <tr>
                                                                                        <td colspan="2">
                                                                                                <input type="submit" class="btn btn-success" value="save">
                                                                                        </td>
                                                                                </tr>
                                                                        </table>
                                                                </div>

                                                        </form>

                                                </div>



                                        </div>

                                </div>

                        </div>
                </div>
        </section>
</div>


<script type="text/javascript" src="<?php echo base_url() ?>assets/slider/ajaxupload.3.5.js"></script>
<link href="<?php echo base_url() ?>assets/cowadmin/css/jqvmap.css" rel='stylesheet' type='text/css' />

<script>
        function isNumberKey(evt) {
                var charCode = (evt.which) ? evt.which : evt.keyCode
                if (charCode > 31 && (charCode < 48 || charCode > 57))
                        return false;
                return true;
        }
</script>