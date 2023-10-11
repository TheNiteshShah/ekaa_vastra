<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Update New Vendor
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url() ?>evadmin/home"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="<?php echo base_url() ?>evadmin/Vendor/view_vendor"><i class="fa fa-dashboard"></i> Update Vendor </a></li>

    </ol>
  </section>
  <section class="content">
    <div class="row">
      <div class="col-lg-12">

        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Update Vendor</h3>
          </div>

          <? if (!empty($this->session->flashdata('smessage'))) { ?>
            <div class="alert alert-success alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h4><i class="icon fa fa-check"></i> Alert!</h4>
              <? echo $this->session->flashdata('smessage'); ?>
            </div>
          <? }
          if (!empty($this->session->flashdata('emessage'))) { ?>
            <div class="alert alert-danger alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h4><i class="icon fa fa-ban"></i> Alert!</h4>
              <? echo $this->session->flashdata('emessage'); ?>
            </div>
          <? } ?>


          <div class="panel-body">
            <div class="col-lg-10">
              <form action="<?php echo base_url() ?>evadmin/Vendor/add_Vendor_data/<? echo base64_encode(2); ?>/<?= $id ?>" method="POST" id="slide_frm" enctype="multipart/form-data">
                <div class="table-responsive">
                  <table class="table table-hover">

                    <tr>
                      <td> <strong>Name</strong> <span style="color:red;">*</span></strong> </td>
                      <td>
                        <input type="text" name="name" class="form-control" placeholder="" value="<?= $vendor_data->name ?>" />
                      </td>
                    </tr>
                    <tr>
                      <td> <strong>Business Name</strong> <span style="color:red;">*</span></strong> </td>
                      <td>
                        <input type="text" name="business_name" class="form-control" placeholder="" required value="<?= $vendor_data->business_name ?>" />
                      </td>
                    </tr>
                    <tr>
                      <td> <strong>GST Number</strong> <span style="color:red;">*</span></strong> </td>
                      <td>
                        <input type="text" name="gst" class="form-control" placeholder="" required value="<?= $vendor_data->gst ?>" />
                      </td>
                    </tr>
                    <tr>
                      <td> <strong>Address</strong> <span style="color:red;">*</span></strong> </td>
                      <td>
                        <input type="text" name="address" class="form-control" placeholder="" required value="<?= $vendor_data->address ?>" />
                      </td>
                    </tr>
                    <tr>
                      <td> <strong>State</strong> <span style="color:red;"></span></strong> </td>
                      <td><select class="form-control" name="state" required>
                          <option value="">---- Select State</option>
                          <? foreach ($state_data as $state) { ?>
                            <option value="<?= $state->state_name ?>" <? if ($state->state_name == $vendor_data->state) {
                                                                        echo 'selected';
                                                                      } ?>><?= $state->state_name ?></option>
                          <? } ?>
                        </select>
                      </td>
                    </tr>
                    <tr>
                      <td> <strong>City</strong> <span style="color:red;"></span></strong> </td>
                      <td>
                        <input type="text" name="city" class="form-control" placeholder="" value="<?= $vendor_data->city ?>" />
                      </td>
                    </tr>
                    <tr>
                      <td> <strong>Pin Code</strong> <span style="color:red;"></span></strong> </td>
                      <td>
                        <input type="text" name="pincode" class="form-control" onkeypress="return isNumberKey(event)" maxlength="6" minlength="6" placeholder="" value="<?= $vendor_data->pincode ?>" />
                      </td>
                    </tr>
                    <tr>
                      <td> <strong>Contact Number</strong> <span style="color:red;">*</span></strong> </td>
                      <td>
                        <input type="text" name="phone" class="form-control" onkeypress="return isNumberKey(event)" maxlength="10" minlength="10" placeholder="" required value="<?= $vendor_data->phone ?>" />
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
<link href="<? echo base_url() ?>assets/cowadmin/css/jqvmap.css" rel='stylesheet' type='text/css' />
<script>
  //--type change -------
  function calculate_selling(id) {
    // var type_id = $(obj).val();
    // var id = $(obj).data('id');
    var rate = parseFloat($('#rate-' + id).val());
    var qty = parseFloat($('#qty-' + id).val());
    if (isNaN(rate) || isNaN(qty)) {
      return false;
    } else {
      var gst = parseFloat(rate * 5 / 100);
      $('#rgst-' + id).val(rate + gst);
      $('#total-' + id).val((rate + gst) * qty);
    }
    // })
  }
  // });
  //===================Get vendor  End===================
  function addMore() {
    var count = parseInt($("#count").val());
    var index = count + 1;
    var table = '<table class="table table-hover" id="tb-' + index + '"><tr> <td> <strong>Product Name</strong> <span style="color:red;">*</span></strong> </td><td style="display:flex;align-items:center"> <input type="text" name="name[]" id="name-' + index + '" class="form-control" placeholder="" required value="" /><button style="margin-left:5px;height:25px" type="button" onclick="addMore()"><i class="fa fa-plus" style="color:green"></i></button><button style="margin-left:5px;height:25px" type="button" onclick="remove(' + index + ')"><i class="fa fa-times" style="color:red"></i></button></td></tr><tr><td> <strong>Unit</strong> <span style="color:red;">*</span></strong> </td> <td><input type="text" name="unit[]" class="form-control" placeholder="" required value="" /></td></tr><tr><td> <strong>Rate(Without GST)</strong> <span style="color:red;">*</span></strong> </td><td><input type="text" name="rate[]" onkeypress="return isNumberKey(event)" onkeyup="calculate_selling(' + index + ')"  id="rate-' + index + '" class="form-control" placeholder="" required value="" /></td></tr><tr><td> <strong>Quantity</strong> <span style="color:red;">*</span></strong> </td><td><input type="text" name="quantity[]" onkeypress="return isNumberKey(event)" onkeyup="calculate_selling(' + index + ')"  id="qty-' + index + '" class="form-control" placeholder="" required value="" /></td></tr> <tr><td> <strong>Rate(With GST)</strong> <span style="color:red;">*</span></strong> </td><td><input type="text" name="rgst[]" id="rgst-' + index + '" readonly class="form-control" placeholder="" required value="" /></td></tr><tr><td> <strong>Total</strong> <span style="color:red;">*</span></strong> </td><td><input type="text" name="total[]" id="total-' + index + '" readonly class="form-control" placeholder="" required value="" /></td></tr></table>'
    $('#more').append(table);
    $("#count").val(index);
  }

  function remove(id) {
    document.getElementById("tb-" + id).remove();
    var count = parseInt($("#count").val()) - 1;
    $("#count").val(count);
  }
</script>