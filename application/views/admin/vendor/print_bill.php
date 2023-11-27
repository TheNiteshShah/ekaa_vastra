<!DOCTYPE html>
<html>
<html lang="en">
<input type="hidden" value="<?php if (!empty($bill_data)) {
                              echo round($bill_data->total_amount);
                            } ?>" id="tot_amnt">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/x-icon" href="<?= base_url() ?>assets/frontend/images/theme/favicon.png">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Css file include -->
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <title>RK Fashions Bill</title>
  <style>
    .table thead th {
      border-bottom: none;
    }

    .table td,
    .table th {
      border-top: none;
      padding: 0px 5px !important;
    }

    .head {
      border-top: 2px solid black;
      border-bottom: 2px solid black;
      border-collapse: collapse;
    }

    .row {
      margin-right: 0px;
      margin-left: 0px;
    }

    .container {
      padding-right: 0px;
      padding-left: 0px;
    }

    table td,
    .table th {
      padding: 1px;
    }
  </style>
</head>

<body style="padding-top:75px;">
  <div class="container main_container" style="border:2px solid black">
    <div class="col-sm-12 content_part">
      <p class="text-right">Original for Buyer</p>
    </div>
    <div class="row" style="border-bottom:2px solid black">
      <div class="col-sm-4 col-md-4" style="padding-bottom:50px">
        <img src="<?= base_url() ?>assets/frontend/images/theme/rk_logo.png" class="img-fluid" style="width:150px;">
      </div>
      <div class="col-sm-8 col-md-8 ">
        <div style=" position: relative;">
          <div class="text-center" style=" position: absolute;
  top: 50%;
  left: 3%;
  margin: -25px 0 0 -25px; ">
            <p class="mb-0">GST INVOICE</p>
            <h5 class="mb-0">R K FASHIONS</h5>
            <span class="seller_details">
              C-275, VAISHALI NAGAR, BEHIND TPS SCHOOL
              <br>
              JAIPUR</span>
            <p class="mb-0"><b>GST :</b> 08AJGPK2857A1ZF</p>
            <p class="mb-0"><b>Tel. : </b> 9829579161</p>
            <p><b>Email :</b> rkfashionsjaipur@gmail.com</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row" style="border-bottom:2px solid black">
      <div class="col-sm-6">Invoice No.: &nbsp; <?= $bill_data ? $bill_data->invoice_no : '' ?><br>
        <p> Date of Invoice &nbsp;
          <?php if (!empty($bill_data)) {
            $source = $bill_data->invoice_date;
            $date = new DateTime($source);
            echo $date->format('d-m-Y');
          } ?>
          <br>
          Place of Supply: <?= $vendor ? $vendor->city : '' ?><br>
          Reverse Charge : N
        </p>
      </div>
      <div class="col-sm-6" style="border-left:2px solid black">
        <p>GR/RR No. :
          <br>
          Transport : Self
          <br>
          Vehicle No. : <br>
          Station : <br>
        </p>
      </div>
    </div>
    <div class="row" style="border-bottom:2px solid black">
      <div class="col-sm-6 billing_content"><span class="font-weight-bold ">Billed to :</span><br>
        Business Name: <?= $vendor ? $vendor->business_name : ''; ?>
        <br>Address: <?= $vendor ? $vendor->address . ', ' . $vendor->city . ', ' . $vendor->state . '-' . $vendor->pincode : ''; ?>
        <br>Contact: <?= $vendor ? $vendor->phone : ''; ?>
        <br>GSTIN/UIN: <?= $vendor ? $vendor->gst : ''; ?><br>
      </div>
      <div class="col-sm-6 shipping_content" style="border-left:2px solid black"><span class="font-weight-bold ">Shipped to:</span> <br>
        Business Name: <?= $vendor ? $vendor->business_name : ''; ?>
        <br>Address: <?= $vendor ? $vendor->address . ', ' . $vendor->city . ', ' . $vendor->state . '-' . $vendor->pincode : ''; ?>
        <br>Contact: <?= $vendor ? $vendor->phone : ''; ?>
        <br>GSTIN/UIN: <?= $vendor ? $vendor->gst : ''; ?><br>
      </div>
    </div>
    <br>
    <table class="table table-black">
      <thead class="head">
        <tr>
          <th style="border-right: 2px solid black">SNo.</th>
          <th style="border-right: 2px solid black">Description of Goods</th>
          <th style="border-right: 2px solid black">Qty</th>
          <th style="border-right: 2px solid black">Unit</th>
          <th style="border-right: 2px solid black">Price</th>
          <th style="border-right: 2px solid black">Amt.</th>
          <!-- <th>Tax Rate(%)</th>
            <th>Tax Type</th>
            <th>Tax Amount(₹)</th> -->
          <th>Total Amount(₹)</th>
        </tr>
      </thead>
      <tbody>
        <?php
        if (!empty($bill_details)) {
          $i = 1;
          foreach ($bill_details->result() as $data) { ?>
            <tr class="product_table2">
              <td style="border-right: 2px solid black"><?php echo $i; ?></td>
              <td style="border-right: 2px solid black"><?= $data->name ?></td>
              <td style="border-right: 2px solid black"><?php echo $data->quantity; ?></td>
              <td style="border-right: 2px solid black"><?php echo $data->unit; ?></td>
              <td style="border-right: 2px solid black">₹<?php echo $data->rate; ?></td>
              <td style="border-right: 2px solid black">₹<?php echo $data->sub_total; ?></td>
              <td>₹<?php echo $data->sub_total; ?></td>
            </tr>
        <?php $i++;
          }
        } ?>

        <tr style="border-top: 2px solid black">
          <th colspan="4"></th>
          <th class="product_table"></th>
          <th class="product_table"></th>
          <th class="product_table" style="border-left: 2px solid black">₹<?php if (!empty($bill_data)) {
                                                                            echo $bill_data->sub_total;
                                                                          } ?></th>
        </tr>
        <?php if ($vendor->state == 'Rajasthan [RJ]') { ?>
          <tr>
            <th colspan="1"></th>
            <td class="product_table">Add : CGST</td>
            <th class="product_table">@</td>
            <th class="product_table">
              </td>
            <th class="product_table"><?php $half = $data->gst / 2;
                                      echo $half . "%"; ?></td>
            <th class="product_table" colspan="1">
              </td>
            <td class="product_table" style="border-left: 2px solid black">₹<?php
                                                                            $half_P = $data->total_gst / 2;
                                                                            echo $half_P; ?></td>
          </tr>
          <tr>
            <th colspan="1"></th>
            <td class="product_table">Add : SGST</td>
            <th class="product_table">@</td>
            <th class="product_table">
              </td>
            <th class="product_table"><?php $half = $data->gst / 2;
                                      echo $half . "%"; ?></td>
            <th class="product_table" colspan="1">
              </td>
            <td class="product_table" style="border-left: 2px solid black">₹<?php
                                                                            $half_P = $data->total_gst / 2;
                                                                            echo $half_P; ?></td>
          </tr>
        <?php } else { ?>
          <tr>
            <th colspan="1"></th>
            <td class="product_table">Add : IGST</td>
            <th class="product_table">@</td>
            <th class="product_table">
              </td>
            <th class="product_table"><?php echo $data->gst . "%"; ?></td>
            <th class="product_table" colspan="1">
              </td>
            <td class="product_table" style="border-left: 2px solid black">₹<?php echo $data->total_gst; ?></td>
          </tr>
        <? } ?>
        <tr>
          <th colspan="1"></th>
          <td class="product_table">Round Off(+/-)</td>
          <td class="product_table"></td>
          <td class="product_table"></td>
          <td class="product_table"></td>
          <td class="product_table"></td>
          <td class="product_table" style="border-left: 2px solid black">₹<?php if (!empty($bill_data)) {
                                                                            echo abs($bill_data->total_amount - round($bill_data->total_amount));
                                                                          } ?></td>
        </tr>
        <tr style="border-top: 2px solid black">
          <th colspan="1"></th>
          <th class="product_table">Grand Total</th>
          <td class="product_table"></td>
          <td class="product_table"></td>
          <td class="product_table">Pcs</td>
          <td class="product_table"></td>
          <th class="product_table" style="border-left: 2px solid black;border-bottom: 2px solid black">₹<?php if (!empty($bill_data)) {
                                                                                                            echo round($bill_data->total_amount);
                                                                                                          } ?></th>
        </tr>
        <br>
        <tr>
          <th colspan="1"></th>
          <td class="product_table" style="">Tax Rate</td>
          <td class="product_table">Taxable Amt.</td>
          <?php if ($vendor->state == 'Rajasthan [RJ]') { ?>
            <td class="product_table">CGST Amt.</td>
            <td class="product_table">SGST Amt.</td>
          <?php } else { ?>
            <td class="product_table">IGST Amt.</td>
          <? } ?>
          <td class="product_table">Total Tax</td>
        </tr>
        <tr>
          <th colspan="1"></th>
          <td class="product_table"><?php if (!empty($bill_data)) {
                                      echo $bill_data->gst_percentage;
                                    } ?>%</td>
          <td class="product_table">₹<?php if (!empty($bill_data)) {
                                        echo round($bill_data->sub_total);
                                      } ?></td>
          <?php if ($vendor->state == 'Rajasthan [RJ]') { ?>
            <td class="product_table">₹<?php
                                        $half_P = $data->total_gst / 2;
                                        echo $half_P; ?></td>
            <td class="product_table">₹<?php
                                        $half_P = $data->total_gst / 2;
                                        echo $half_P; ?></td>
          <?php } else { ?>
            <td class="product_table">₹<?php
                                        echo $data->total_gst; ?></td>
          <? } ?>
          <td class="product_table">₹<?php if (!empty($bill_data)) {
                                        echo round($bill_data->gst_amount);
                                      } ?></td>
        </tr>
      </tbody>
    </table>
    <div class="row align-items-center">
      <div class="col-sm-6">
        <h6 class="amount_content" style="padding: 0 0.75rem">Amount in Words:<br>
          <span id="checks123" style="text-transform: capitalize;font-style: revert;font-weight: 400;"></span>
        </h6>
      </div>
      <div class="col-sm-6 text-right">
        <h6 style="padding: 0 0.75rem">JOBWORK ONLY</h6>
      </div>
    </div>

    <div style="border-top: 2px solid black;border-bottom: 2px solid black">
      <h5 class="text-center mt-2">Bank Details</h5>
      <div class="row text-center mb-2">
        <div class="col-sm-4">BANK : IDBI BANK LTD.</div>
        <div class="col-sm-4">CURRENT ACCOUNT NO. 0273102000028945</div>
        <div class="col-sm-4">IFSC : IBKL0000273</div>
      </div>
    </div>
    <div class="row ">
      <div class="col-sm-5 pt-2">
        <h5>
          Terms & Condition:
        </h5>
        <p>E.& O.E.</p>
        <span>1) Goods once sold will not be taken back. <br>2) Interest @18% p.a. will be charged if the paymemnt is
          not made within the stipulated time.<br>3) Subject to 'Rajasthan' Jurisdiction only.</span>
      </div>
      <div class="col-sm-7 pt-2 pl-0 pr-0" style="border-left: 2px solid black">
        <div style="border-bottom: 2px solid black">
          <p>Receiver's Signature</p>
          <br>
          <br>
          <br>
        </div>
        <h6 class="text-right p-2">For R K FASHIONS</h6>
        <br>
        <br>
        <br>
        <h6 class="text-right p-2">Authorized Signatory</h6>
      </div>
    </div>
  </div>
  </div>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
  window.onload = function() {

    var unit_mrp = $(".unit_mrp").text();
    var unit_qty = $(".qty").text();
    //var gst_percentage = $("#gst_percentage").val();$(this).val

    var total_unit_mrp = parseInt(unit_mrp) * parseInt(unit_qty);
    //alert(total_gst_price);
    $('.net_unit_mrp').text(total_unit_mrp);

    var total_amount = document.getElementById("tot_amnt").value;
    //alert(total_amount);
    inWords(total_amount);
    window.print();
  };



  var a = ['', 'one ', 'two ', 'three ', 'four ', 'five ', 'six ', 'seven ', 'eight ', 'nine ', 'ten ', 'eleven ', 'twelve ', 'thirteen ', 'fourteen ', 'fifteen ', 'sixteen ', 'seventeen ', 'eighteen ', 'nineteen '];
  var b = ['', '', 'twenty', 'thirty', 'forty', 'fifty', 'sixty', 'seventy', 'eighty', 'ninety'];

  function inWords(num) {
    if ((num = num.toString()).length > 9) return 'overflow';
    n = ('000000000' + num).substr(-9).match(/^(\d{2})(\d{2})(\d{2})(\d{1})(\d{2})$/);
    if (!n) return;
    var str = '';
    str += (n[1] != 0) ? (a[Number(n[1])] || b[n[1][0]] + ' ' + a[n[1][1]]) + 'crore ' : '';
    str += (n[2] != 0) ? (a[Number(n[2])] || b[n[2][0]] + ' ' + a[n[2][1]]) + 'lakh ' : '';
    str += (n[3] != 0) ? (a[Number(n[3])] || b[n[3][0]] + ' ' + a[n[3][1]]) + 'thousand ' : '';
    str += (n[4] != 0) ? (a[Number(n[4])] || b[n[4][0]] + ' ' + a[n[4][1]]) + 'hundred ' : '';
    str += (n[5] != 0) ? ((str != '') ? 'and ' : '') + (a[Number(n[5])] || b[n[5][0]] + ' ' + a[n[5][1]]) + 'only ' : '';
    //return str;
    // alert(str);
    $("#checks123").text(str);

  }
</script>

</html>