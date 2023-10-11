<div class="content-wrapper">
  <section class="content-header">
    <h1>
      <?= $name ?> > Update Bill
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url() ?>evadmin/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="<?php echo base_url() ?>evadmin/Vendor/view_vendor"><i class="fa fa-dashboard"></i> Back </a></li>

    </ol>
  </section>
  <section class="content">
    <div class="row">
      <div class="col-lg-12">

        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Update New Bill</h3>
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
              <form action="<?php echo base_url() ?>evadmin/Vendor/add_bill_data/<? echo base64_encode(2); ?>/<?= $id ?>" method="POST" id="slide_frm" enctype="multipart/form-data">
                <div class="table-responsive">
                  <table class="table table-hover">
                    <input type="hidden" id="count" value="<?= count($bill_details->result()) ?>" name="count">
                    <input type="hidden" name="vendor_id" value="<?= base64_encode($bill_data->vendor_id) ?>" />
                    <? $detail = $bill_details->row(); ?>
                    <tr>
                      <td> <strong>Date of Invoice </strong><span style="color:red;">*</span></td>
                      <td>
                        <input type="date" name="invoice_date" class="form-control" placeholder="" value="<?= $bill_data->invoice_date ?>" required />
                      </td>
                    </tr>

                    <tr>
                      <td> <strong>Invoice No.</strong><span style="color:red;">*</span></td>
                      <td>
                        <input type="text" name="invoice_no" class="form-control" placeholder="" value="<?= $bill_data->invoice_no ?>" required />
                      </td>
                    </tr>
                    <tr>
                      <td> <strong>Product Name</strong> <span style="color:red;">*</span></strong> </td>
                      <td style="display:flex;align-items:center">
                      <select class="form-control product" name="name[]" id="name-1" data-id="1" onchange="change(this)">
                          <option value="">-----Select Product----</option>
                          <?
                          foreach ($products as $p) {
                          ?>
                            <option value="<?= $p->id ?>" data-price="<?= $p->rgst ?>" <?if($p->name == $detail->name){echo "selected";} ?>><?= $p->name ?></option>
                          <?
                          }
                          ?>
                        </select>
                        <button style="margin-left:10px;height:25px" type="button" onclick="addMore()"><i class="fa fa-plus" style="color:green"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td> <strong>Quantity</strong> <span style="color:red;">*</span></strong> </td>
                      <td>
                        <input type="text" name="quantity[]" onkeypress="return isNumberKey(event)" id="qty-1" class="form-control" placeholder="" required value="<?= $detail->quantity ?>" />
                      </td>
                    </tr>
                    <tr>
                      <td> <strong>Total</strong> <span style="color:red;">*</span></strong> </td>
                      <td><input type="text" name="total[]" id="total-1" readonly class="form-control" placeholder="" required value="<?= $detail->total ?>" /></td>
                    </tr>
                    <table class="table table-hover" id="more">
                      <?
                      foreach ($bill_details->result() as $index => $dd) {
                        if ($index != 0) {
                      ?>
                          <table class="table table-hover" id="tb-<?= $index + 1 ?>">
                            <tr>
                              <td> <strong>Product Name</strong> <span style="color:red;">*</span></strong> </td>
                              <td style="display:flex;align-items:center">
                                <select class="form-control product" name="name[]" id="name-1" data-id="1" onchange="change(this)">
                                  <option value="">-----Select Product----</option>
                                  <?
                                  foreach ($products as $p) {
                                  ?>
                                    <option value="<?= $p->id ?>" data-price="<?= $p->rgst ?>" <?if($p->name == $dd->name){echo "selected";} ?>><?= $p->name ?></option>
                                  <?
                                  }
                                  ?>
                                </select>
                                <button style="margin-left:10px;height:25px" type="button" onclick="addMore()"><i class="fa fa-plus" style="color:green"></i></button>
                              </td>
                            </tr>
                            <tr>
                              <td> <strong>Quantity</strong> <span style="color:red;">*</span></strong> </td>
                              <td>
                                <input type="text" name="quantity[]" onkeypress="return isNumberKey(event)" id="qty-<?= $index + 1 ?>" onkeyup="calculate_selling('<?= $index + 1 ?>')" class="form-control" placeholder="" required value="<?= $dd->quantity ?>" />
                              </td>
                            </tr>
                            <tr>
                              <td> <strong>Total</strong> <span style="color:red;">*</span></strong> </td>
                              <td><input type="text" name="total[]" id="total-<?= $index + 1 ?>" readonly class="form-control" placeholder="" required value="<?= $dd->total ?>" /></td>
                            </tr>
                          </table>
                      <? }
                      } ?>
                    </table>
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
  function change(obj) {
    var vf = $(obj).val();
    var id = $(obj).data('id');
    var price = $('#name-' + id + ' option:selected').data('price');

    var qty = parseFloat($('#qty-' + id).val());
    if (isNaN(vf) || isNaN(qty)) {
      return false;
    } else {
      $('#total-' + id).val(price * qty);
    }
  }
  //--type change -------
  function calculate_selling(id) {
    var price = $('#name-' + id + ' option:selected').data('price');
    var qty = parseFloat($('#qty-' + id).val());
    if (isNaN(price) || isNaN(qty)) {
      return false;
    } else {
      $('#total-' + id).val(price * qty);
    }
    // })
  }
  // });
  //===================Get vendor  End===================
  function addMore() {
    var count = parseInt($("#count").val());
    var index = count + 1;
    var table = '<table class="table table-hover" id="tb-' + index + '"><tr> <td> <strong>Product</strong> <span style="color:red;">*</span></strong> </td><td style="display:flex;align-items:center"> <select class="form-control product" name="name[]" id="name-' + index + '" data-id="' + index + '" onchange="change(this)"><option value="">-----Select Product----</option><? foreach ($products as $p) { ?><option value="<?= $p->id ?>" data-price="<?= $p->rgst ?>"><?= $p->name ?></option><? } ?></select><button style="margin-left:5px;height:25px" type="button" onclick="addMore()"><i class="fa fa-plus" style="color:green"></i></button><button style="margin-left:5px;height:25px" type="button" onclick="remove(' + index + ')"><i class="fa fa-times" style="color:red"></i></button></td></tr><tr><td> <strong>Quantity</strong> <span style="color:red;">*</span></strong> </td><td><input type="text" name="quantity[]" onkeypress="return isNumberKey(event)" onkeyup="calculate_selling(' + index + ')"  id="qty-' + index + '" class="form-control" placeholder="" required value="" /></td></tr><tr><td> <strong>Total</strong> <span style="color:red;">*</span></strong> </td><td><input type="text" name="total[]" id="total-' + index + '" readonly class="form-control" placeholder="" required value="" /></td></tr></table>'
    $('#more').append(table);
    $("#count").val(index);
  }

  function remove(id) {
    document.getElementById("tb-" + id).remove();
    var count = parseInt($("#count").val()) - 1;
    $("#count").val(count);
  }
</script>