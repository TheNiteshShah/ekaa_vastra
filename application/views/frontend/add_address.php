<style>
    .over {
        position: relative;
        /* z-index: -9; */
    }

    .stkey {
        position: sticky;
        top: 120px;
        background: white;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-wrap: wrap;
        z-index: 999;
    }

    .bgh {
        padding: 6px 25px;
        outline: none;
        border: none;
        background-color: #FF324D;
        color: white;
        font-weight: 300;
        border-radius: 6px;
    }

    .bgh:hover {
        background-color: transparent;
        color: #FF324D;
        border: 2px solid #FF324D;
    }
</style>
<section class="mt-5">
    <div class="container-fluid pl-5 pr-5 pt-3 pb-5">
        <div class="row register_row">
            <div class="col-md-6">
                <form action="<?= base_url() ?>Order/change_address" method="post" enctype="multipart/form-data">
                    <div class="row">

                        <div class="col-md-12 text-center stkey" style="justify-content:space-around;">
                            <div>
                                <h2>Select Address</h2>
                            </div>
                            <div class=" mt-3 mb-2 sxcds" style="margin-left: 37px;">
                                <button class="btn btn-fill-out btn-block" type="submit">Continue</button>
                            </div>
                        </div>
                        <? if (!empty($address_data)) {
                        ?>
                            <div class="col-md-12 ">
                                <? foreach ($address_data as $address) { ?>
                                    <div class="bottom-11 p-3 over">
                                        <div class=" row add_sel">
                                            <div class="col-1 col-md-1 p-0  " style="text-align: end;">
                                                <input type="radio" class="form-check-input" name="address_id" value="<?= $address->id ?>" <? if ($address->is_default == 1) {
                                                                                                                        echo "checked";
                                                                                                                    } ?> required="">
                                            </div>
                                            <div class="col-10 col-md-11 ">

                                                <p class="bottom-m"><b>First Name:</b> <a><?= $address->f_name ?></a></p>
                                                <p class="bottom-m"><b>Last Name:</b> <a><?= $address->l_name ?></a></p>
                                                <p class="bottom-m"><b> Email Address:</b> <a><?= $address->email ?></a></p>
                                                <p class="bottom-m"><b>Phone Number:</b> <a><?= $address->phone ?></a></p>
                                                <p class="bottom-m"><b>State:</b> <a><?= $address->state ?></a></p>
                                                <p class="bottom-m"><b>city:</b> <a><?= $address->city ?></a></p>
                                                <p class="bottom-m"><b>Address:</b> <a><?= $address->address ?></a></p>
                                                <p class="bottom-m"><b>Pincode:</b> <a><?= $address->pincode ?></a></p>

                                            </div>
                                        </div>
                                        <div style=" display: flex;
                                        justify-content: end;">
                                            <a href="<?= base_url() ?>Home/edit_address/<?= base64_encode($address->id) ?>/1" class="mr-2"><button type="button" class="btn btn-fill-out"> <i class="fi-rs-pencil"></i></button></a>

                                        </div>
                                    </div>

                                <? } ?>

                            </div>
                        <?
                        } else { ?>
                            <div class="w-100 text-center mt-5">
                                <h5 class="text-center" style="color:#FF324D">Please add address for checkout</h5>
                            </div>
                        <? } ?>
                    </div>
                </form>
            </div>

            <div class="col-md-6 ">
                <div style="position: sticky;top: 120px;">
                    <div class="row">
                        <div class="col-md-12 text-center" style="    margin: 16px 0px 9px 0px !important ; border-bottom: 1px solid #dbdbdb
">
                            <h2 style="margin-bottom: 22px;">Add New Address</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <form method="POST" action="<?= base_url() ?>Order/add_address_data" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="form-group col-lg-6">
                                        <input type="text" required class="form-control" id="fname" onkeyup='saveValue(this);' name="fname" placeholder="First name *">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <input type="text" required class="form-control" id="lname" onkeyup='saveValue(this);' name="lname" placeholder="Last name *">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="email" id="email" onkeyup='saveValue(this);' name="email" placeholder="Email Address ">
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-6">
                                        <input class="form-control" onkeypress="return isNumberKey(event)" maxlength="10" minlength="10" required type="text" id="phonenumber" onkeyup='saveValue(this);' name="phonenumber" placeholder="Phone Number *">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <input class="form-control" maxlength="6" minlength="6" required type="text" id="pincode" name="pincode" placeholder="Pincode *">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-6">
                                        <div class="custom_select">
                                            <select class="form-control" id="state" name="state" required>
                                                <option value="">---- Select State ----</option>
                                                <? foreach ($state_data->result() as $state) { ?>
                                                    <option value="<?= $state->state_name ?>"><?= $state->state_name ?></option>
                                                <? } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <input class="form-control" id="city" onkeyup='saveValue(this);' required type="text" name="city" placeholder="City *">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" required type="text" id="address" onkeyup='saveValue(this);' name="address" placeholder="Address *">
                                </div>

                                <div class="row detailborder">

                                    <div class="col-sm-8 col-12 mt-2">
                                        <button class="btn btn-fill-out btn-block col-sm-8 mb-3" id="loader" disabled style="display:none">
                                            <i class="fa fa-spinner fa-spin"></i>Loading
                                        </button>
                                        <button type="submit" class="btn btn-fill-out btn-block col-sm-8 mb-3 gt" id="places">Add Address</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>