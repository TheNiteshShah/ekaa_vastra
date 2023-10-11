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
</head>

<body style="padding-top:75px;">
  <div class="container main_container">
    <div class="row">
      <div class="col-sm-6 oswal_logo">
        <h1>RK FASHIONS<sup>®</sup></h1>
      </div>
      <div class="col-sm-6 content_part">GST INVOICE
        <p>(Buyer)</p>
      </div>
    </div><br>

    <div class="container">
      <div class="row">
        <div class="col-sm-6"><span class="font-weight-bold ">Sold By</span><br>
          <span class="seller_details">R K FASHIONS<br>
            C-275, VAISHALI NAGAR, BEHIND TPS SCHOOL
            <br>
            JAIPUR</span>
        </div>

        <div class="col-sm-6 billing_content"><span class="font-weight-bold ">Billed to :</span><br>
          Business Name: <?= $vendor ? $vendor->business_name : ''; ?>
          <br>Address: <?= $vendor ? $vendor->address . ', ' . $vendor->city . ', ' . $vendor->state . '-' . $vendor->pincode : ''; ?>
          <br>Contact: <?= $vendor ? $vendor->phone : ''; ?>
          <br>GSTIN/UIN: <?= $vendor ? $vendor->gst : ''; ?><br>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-sm-6">
          <br />
          <i class="fa fa-calculator"></i> GST Number : 08AJGPK2857A1ZF<br />
          <i class="fa fa-phone" style="font-size:20px" aria-hidden="true"></i>&nbspContact Number: 9829579161<br />
          <i class="fa fa-envelope" style="font-size:20px" aria-hidden="true"></i>&nbspEmail : rkfashionsjaipur@gmail.com
        </div>
        <div class="col-sm-6 shipping_content"><span class="font-weight-bold ">Shipped to:</span> <br>
          Business Name: <?= $vendor ? $vendor->business_name : ''; ?>
          <br>Address: <?= $vendor ? $vendor->address . ', ' . $vendor->city . ', ' . $vendor->state . '-' . $vendor->pincode : ''; ?>
          <br>Contact: <?= $vendor ? $vendor->phone : ''; ?>
          <br>GSTIN/UIN: <?= $vendor ? $vendor->gst : ''; ?><br>
        </div>
      </div>
      <br>
      <div class="row">

        <div class="col-sm-6">Invoice No.: &nbsp; <?= $bill_data ? $bill_data->invoice_no : '' ?><br>
          <p> Date of Invoice &nbsp;
            <?php if (!empty($bill_data)) {
              $source = $bill_data->invoice_date;
              $date = new DateTime($source);
              echo $date->format('d-m-Y');
            } ?>
            <br>
            Place of Supply: <?= $vendor ? $vendor->city : '' ?><br>
            Reverse Charge : N <br>
            Transport : Self
          </p>
        </div>
        <div class="col-sm-6">
          <p>GR/RR No. :
            <br>
            Transport : Self
            <br>
            Vehicle No. : <br>
            Station : <br>
          </p>
        </div>
      </div>
    </div>

    <div class="container">
      <table class="table table-black">
        <thead class="product_table">
          <tr>
            <th>SNo.</th>
            <th>Description of Goods</th>
            <th>Qty</th>
            <th>Unit</th>
            <th>Unit Price(₹)</th>
            <th>Net Amount(₹)</th>
            <th>Tax Rate(%)</th>
            <th>Tax Type</th>
            <th>Tax Amount(₹)</th>
            <th>Total Amount(₹)</th>
          </tr>
        </thead>
        <tbody>
          <?php
          if (!empty($bill_details)) {
            $i = 1;
            foreach ($bill_details->result() as $data) { ?>
              <tr class="product_table2">
                <td><?php echo $i; ?></td>
                <td><?= $data->name ?></td>
                <td><?php echo $data->quantity; ?></td>
                <td><?php echo $data->unit; ?></td>
                <td><?php echo $data->rate; ?></td>
                <td><?php echo $data->sub_total; ?></td>
                <?php if ($vendor->state == 'Rajasthan [RJ]') { ?>
                  <td><span> <?php $half = $data->gst / 2;
                              echo $half . "%"; ?> </span> <br> <span> <?php $half = $data->gst / 2;
                                                                        echo $half . "%"; ?> </span></td>

                <?php } else { ?>
                  <td><?php echo $data->gst . "%"; ?></td>
                <?php } ?>
                <?php if ($vendor->state == 'Rajasthan [RJ]') { ?>
                  <td><span> CGST </span> <br> <span> SGST </span></td>
                <?php } else { ?>
                  <td>IGST</td>
                <?php } ?>
                <?php if ($vendor->state == 'Rajasthan [RJ]') { ?>
                  <td>
                    <span> <?php
                            $half_P = $data->total_gst / 2;
                            echo "Rs. " . $half_P; ?>
                    </span>
                    <br>
                    <span> <?php
                            $half_P = $data->total_gst / 2;
                            echo "Rs. " . $half_P; ?>
                    </span>
                  </td>
                <?php } else { ?>

                  <td><?php echo "Rs. " . $data->total_gst; ?></td>

                <?php } ?>
                <td><?php echo $data->total; ?></td>
              </tr>
          <?php $i++;
            }
          } ?>

          <tr>
            <th colspan="7">Total</th>
            <th class="product_table"><?php if (!empty($bill_data)) {
                                                    echo "";
                                                  } ?></th>
            <th class="product_table"><?php if (!empty($bill_data)) {
                                        echo $bill_data->gst_amount;
                                      } ?></th>

            <th class="product_table"><?php if (!empty($bill_data)) {
                                        echo $bill_data->total_amount;
                                      } ?></th>
          </tr>
          <tr>
            <th colspan="7">Round Off()</th>
            <th class="product_table" ><?php if (!empty($bill_data)) {
                                                    echo "";
                                                  } ?></th>
            <th class="product_table"><?php if (!empty($bill_data)) {
                                        echo '';
                                      } ?></th>

            <th class="product_table"><?php if (!empty($bill_data)) {
                                        echo $bill_data->total_amount-round($bill_data->total_amount);
                                      } ?></th>
          </tr>
          <tr>
            <th colspan="7">Grand Total</th>
            <th class="product_table" ><?php if (!empty($bill_data)) {
                                                    echo "";
                                                  } ?></th>
            <th class="product_table"><?php if (!empty($bill_data)) {
                                        echo '';
                                      } ?></th>

            <th class="product_table"><?php if (!empty($bill_data)) {
                                        echo round($bill_data->total_amount);
                                      } ?></th>
          </tr>





        </tbody>
      </table>

      <h6 class="amount_content">Amount in Words:<br>
        <span id="checks123" style="text-transform: capitalize;font-style: revert;"></span>
      </h6><br>

      <h4 class="text-center">Bank Details</h4>
      <br>
      <div class="row text-center">
        <div class="col-sm-4">BANK : IDBI BANK LTD.</div>
        <div class="col-sm-4">CURRENT ACCOUNT NO. 0273102000028945</div>
        <div class="col-sm-4">IFSC : IBKL0000273</div>
      </div>
      <br>
      <br>
      <br>
      <div>
        <h5>
          Terms & Condition:
        </h5>
        <p>E.& O.E.</p>
        <span>1) Goods once sold will not be taken back. <br>2) Interest @18% p.a. will be charged if the paymemnt is
not made within the stipulated time.<br>3) Subject to 'Rajasthan' Jurisdiction only.</span>
      </div>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <div class="row justify-content-between">
        <div class="col-sm-6">
          <h4>Authorized Signatory<br>
            <h6>For R K FASHIONS</h6>
          </h4>
        </div>
        <div class="col-sm-6 text-right">
          <h4>Receiver's Signature </h4>
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