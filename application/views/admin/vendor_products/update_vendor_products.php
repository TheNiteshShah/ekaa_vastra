<div class="content-wrapper">
  <section class="content-header">
    <h1>
    <?= $name ?> >  Update Product
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url() ?>evadmin/home"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="<?php echo base_url() ?>evadmin/VendorProducts/view_vendor_products"><i class="fa fa-dashboard"></i> All Vendor Products </a></li>

    </ol>
  </section>
  <section class="content">
    <div class="row">
      <div class="col-lg-12">

        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-money fa-fw"></i>Update Vendor Products</h3>
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
              <form action="<?php echo base_url() ?>evadmin/VendorProducts/add_vendor_products_data/<?php echo base64_encode(2); ?>/<?= $id ?>" method="POST" id="slide_frm" enctype="multipart/form-data">
                <div class="table-responsive">
                  <table class="table table-hover">
                  <input type="hidden" name="vendor_id" value="<?=base64_encode($vendor_products_data->vendor_id)?>">

                    <tr>
                      <td> <strong>Name</strong> <span style="color:red;">*</span></strong> </td>
                      <td>
                        <input type="text" name="name" class="form-control" placeholder="" required value="<?= $vendor_products_data->name ?>" />
                      </td>
                    </tr>
                    <tr>
                      <td> <strong>Unit</strong> <span style="color:red;">*</span></strong> </td>
                      <td>
                        <input type="text" name="unit" class="form-control" placeholder="" required value="<?= $vendor_products_data->name ?>" />
                      </td>
                    </tr>
                    <tr>
                      <td> <strong>SKU</strong> <span style="color:red;"></span></strong> </td>
                      <td>
                        <input type="text" name="sku" class="form-control" placeholder="" value="<?= $vendor_products_data->sku ?>" />
                      </td>
                    </tr>
                    <tr>
                      <td> <strong>Rate(Without GST)</strong> <span style="color:red;">*</span></strong> </td>
                      <td>
                        <input type="text" name="rate" id="rate" class="form-control" placeholder="" required value="<?= $vendor_products_data->rate ?>" />
                      </td>
                    </tr>
                    <tr>
                      <td> <strong>GST%</strong> <span style="color:red;">*</span></strong> </td>
                      <td>
                        <input type="text" name="gst" id="gst" class="form-control" placeholder="" required value="<?= $vendor_products_data->gst ?>" />
                      </td>
                    </tr>
                    <tr>
                      <td> <strong>Rate(With GST)</strong> <span style="color:red;">*</span></strong> </td>
                      <td><input type="text" name="rgst" id="rgst" readonly class="form-control" placeholder="" required value="<?= $vendor_products_data->rgst ?>" /></td>
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
  $(document).ready(function() {
    $('#gst,#rate').keyup(function(ev) {
      // var mrp = $('#mrp').val() * 1;
      var sp = $('#rate').val() * 1;
      var gst = $('#gst').val() * 1;
      var gst_price = (gst / 100) * sp;
      var spgst = sp + gst_price;
      $("#rgst").val(spgst)
    });
  });

  function isNumberKey(evt) {
    var charCode = (evt.which) ? evt.which : evt.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
      return false;
    return true;
  }
</script>