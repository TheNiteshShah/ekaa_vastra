<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Update banner
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url() ?>evadmin/Home"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li><a href="<?php echo base_url() ?>evadmin/banner/view_banner"><i class="fa fa-undo" aria-hidden="true"></i> view banner </a></li>

    </ol>
  </section>
  <section class="content">
    <div class="row">
      <div class="col-lg-12">

        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Add New banner</h3>
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
              <form action="<?php echo base_url() ?>evadmin/banner/add_banner_data/<?php echo base64_encode(2); ?>/<?=$id?>" method="POST" id="slide_frm" enctype="multipart/form-data">
                <div class="table-responsive">
                  <table class="table table-hover">


                    <tr>
                      <td> <strong>Image</strong> <span style="color:red;"><br />Big: 2220px X 1000px<br />Small: 540px X 812px</span></strong> </td>
                      <td>
                        <input type="file" name="image" class="form-control" placeholder="" value="<?=$banner->image?>" />
                        <?php if ($banner->image!="") {  ?>
                        <img id="slide_img_path" height=50 width=100 src="<?php echo base_url().$banner->image ?>">
                        <?php } else {  ?>
                        Sorry No image Found
                        <?php } ?>
                      </td>
                    </tr>
                    <!-- <tr>
                      <td> <strong>Image2</strong> <span style="color:red;"><br />1665X400px</span></strong> </td>
                      <td>
                        <input type="file" name="image2" class="form-control" placeholder="" value="<?=$banner->image2?>" />
                        <?php if ($banner->image2!="") {  ?>
                        <img id="slide_img_path" height=50 width=100 src="<?php echo base_url().$banner->image2 ?>">
                        <?php } else {  ?>
                        Sorry No image Found
                        <?php } ?>
                      </td>
                    </tr> -->
                    <tr>
                      <td> <strong>Link</strong> <span style="color:red;"></span></ strong>
                      </td>
                      <td>
                        <input type="url" name="link" class="form-control" placeholder="" value="<?=$banner->link?>" />
                      </td>
                    </tr>
                    <!-- <tr>
                      <td> <strong>Link-2</strong> <span style="color:red;">*</span></ strong>
                      </td>
                      <td>
                        <input type="url" name="link2" class="form-control" placeholder=""required value="<?=$banner->link2?>" />
                      </td>
                    </tr> -->
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


<script type="text/javascript" src="<?php echo base_url() ?>assets/banner/ajaxupload.3.5.js"></script>
<link href="<?php echo base_url() ?>assets/cowadmin/css/jqvmap.css" rel='stylesheet' type='text/css' />
