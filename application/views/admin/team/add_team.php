<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Add New Team
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url() ?>evadmin/Home"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li><a href="<?php echo base_url() ?>evadmin/System/view_team"><i class="fa fa-undo" aria-hidden="true"></i> View Team </a></li>
    </ol>
  </section>
  <section class="content">
    <div class="row">
      <div class="col-lg-12">

        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Add New Team</h3>
          </div>
          <div class="panel-body">
            <?php if (!empty($this->session->flashdata('smessage'))) { ?>
            <div class="alert alert-success alert-dismissible fade in">
              <strong><?php echo $this->session->flashdata('smessage'); ?></strong>
            </div>
            <?php }
                       if (!empty($this->session->flashdata('emessage'))) { ?>
            <div class="alert alert-danger alert-dismissible fade in">
              <strong><?php echo $this->session->flashdata('emessage'); ?></strong>
            </div>
            <?php } ?>
            <div class="col-lg-10">
              <form action="<?php echo base_url() ?>evadmin/System/add_team_data/<? echo base64_encode(1); ?>" method="POST" id="slide_frm" enctype="multipart/form-data">
                <div class="table-responsive">
                  <table class="table table-hover">

                    <tr>
                      <td> <strong>Name</strong> <span style="color:red;">*</span></strong> </td>
                      <td>
                        <input type="text" name="name" class="form-control" placeholder="" required value="" />
                      </td>
                    </tr>
                    <tr>
                      <td> <strong>Email</strong> <span style="color:red;">*</span></strong> </td>
                      <td>

                        <input type="email" name="email" class="form-control" placeholder="" required value="" />
                      </td>
                    </tr>
                    <tr>
                      <td> <strong>Phone (optional)</strong> </strong> </td>
                      <td>
                        <input type="text" min="0" onkeydown="if(event.key==='.'){event.preventDefault();}"  oninput="event.target.value = event.target.value.replace(/[^0-9]*/g,'');" maxlength="10" name="phone" class="form-control" placeholder="" value="" />
                      </td>
                    </tr>
                    <tr>
                      <td> <strong>Address (optional)</strong> </strong> </td>
                      <td>

                        <input type="text" name="address" class="form-control" placeholder="" value="" />
                      </td>
                    </tr>
                    <tr>
                      <td> <strong>Password</strong> <span style="color:red;">*</span></strong> </td>
                      <td>
                        <input type="password" name="password" class="form-control" placeholder="" required value="" />
                      </td>
                    </tr>
                    <tr>
                      <td> <strong>Permission Level</strong> <span style="color:red;">*</span></strong> </td>
                      <td>
                        <div class="form-group">

                          <select class="form-control" name="power" required>
                            <option value="1">Please select Type</option>
                            <option value="1">Super Admin</option>
                            <option value="2">Admin</option>
                            <option value="3">Manager</option>

                          </select>
                        </div>
                      </td>
                    </tr>

                    <tr>
                      <td> <strong>services</strong> <span style="color:red;">*</span></strong> </td>
                      <td>
                        <div class="form-group">
                          <div class="checkbox">
                            <label><input type="checkbox" name="service" value="999">All</label>
                          </div>
                          <?php foreach ($side->result() as $s) {
                           ?>
                          <div class="checkbox">
                            <label><input type="checkbox" name="services[]" value="<?php echo $s->id; ?>"><?php echo $s->name; ?></label>
                          </div>
                          <?php
                       } ?>

                        </div>
                      </td>
                    </tr>


                    <tr>
                      <td> <strong>Image</strong> </td>
                      <td>


                        <input type="file" name="fileToUpload1"></input>

                </div>
                </td>
                </tr>


                <tr>
                  <td colspan="2">
                    <input type="submit" class="btn custom_btn" value="save">
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



<style>

</style>
<!-- <script type="text/javascript" src="<?php echo base_url() ?>assets/slider/ajaxupload.3.5.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/slider/rs.js"></script>	  -->
