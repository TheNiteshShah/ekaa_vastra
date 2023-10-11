<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
require_once(APPPATH . 'core/CI_finecontrol.php');
class Vendor extends CI_finecontrol
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("login_model");
        $this->load->model("admin/base_model");
        $this->load->library('user_agent');
    }
    public function view_vendor()
    {
        if (!empty($this->session->userdata('admin_data'))) {
            $data['user_name'] = $this->load->get_var('user_name');

            // echo SITE_NAME;
            // echo $this->session->userdata('image');
            // echo $this->session->userdata('position');
            // exit;
            $this->db->select('*');
            $this->db->from('tbl_vendor');
            //$this->db->where('id',$usr);
            $data['vendor_data'] = $this->db->get();


            $this->load->view('admin/common/header_view', $data);
            $this->load->view('admin/vendor/view_vendor');
            $this->load->view('admin/common/footer_view');
        } else {
            redirect("login/admin_login", "refresh");
        }
    }
    public function add_vendor()
    {
        if (!empty($this->session->userdata('admin_data'))) {
            $data['user_name'] = $this->load->get_var('user_name');
            $data['state_data'] = $this->db->get_where('all_states', array())->result();



            $this->load->view('admin/common/header_view', $data);
            $this->load->view('admin/vendor/add_vendor');
            $this->load->view('admin/common/footer_view');
        } else {
            redirect("login/admin_login", "refresh");
        }
    }
    public function add_vendor_data($t, $iw = "")
    {
        if (!empty($this->session->userdata('admin_data'))) {
            $this->load->helper(array('form', 'url'));
            $this->load->library('form_validation');
            $this->load->helper('security');
            if ($this->input->post()) {
                // print_r($this->input->post());
                // exit;
                $this->form_validation->set_rules('name', 'name', 'required|xss_clean|trim');
                $this->form_validation->set_rules('business_name', 'business_name', 'required|xss_clean|trim');
                $this->form_validation->set_rules('gst', 'gst', 'required|xss_clean|trim');
                $this->form_validation->set_rules('address', 'address', 'required|xss_clean|trim');
                $this->form_validation->set_rules('phone', 'phone', 'required|xss_clean|trim');
                $this->form_validation->set_rules('city', 'City', 'required|xss_clean|trim');
                $this->form_validation->set_rules('state', 'state', 'required|xss_clean|trim');
                $this->form_validation->set_rules('pincode', 'pincode', 'required|xss_clean|trim');

                if ($this->form_validation->run() == true) {
                    $name = $this->input->post('name');
                    $business_name = $this->input->post('business_name');
                    $gst = $this->input->post('gst');
                    $address = $this->input->post('address');
                    $phone = $this->input->post('phone');
                    $city = $this->input->post('city');
                    $state = $this->input->post('state');
                    $pincode = $this->input->post('pincode');


                    $ip = $this->input->ip_address();
                    date_default_timezone_set("Asia/Calcutta");
                    $cur_date = date("Y-m-d H:i:s");
                    $addedby = $this->session->userdata('admin_id');
                    $this->load->library('upload');

                    $typ = base64_decode($t);
                    if ($typ == 1) {
                        $data_insert = array(
                            'name' => $name,
                            'business_name' => $business_name,
                            'gst' => $gst,
                            'address' => $address,
                            'phone' => $phone,
                            'city' => $city,
                            'state' => $state,
                            'pincode' => $pincode,
                            'ip' => $ip,
                            'added_by' => $addedby,
                            'is_active' => 1,
                            'date' => $cur_date

                        );





                        $last_id = $this->base_model->insert_table("tbl_vendor", $data_insert, 1);
                    }
                    if ($typ == 2) {
                        $idw = base64_decode($iw);
                        $this->db->select('*');
                        $this->db->from('tbl_vendor');
                        $this->db->where('id', $idw);
                        $dsa = $this->db->get()->row();
                        $data_insert = array(
                            'name' => $name,
                            'business_name' => $business_name,
                            'gst' => $gst,
                            'address' => $address,
                            'phone' => $phone,
                            'city' => $city,
                            'state' => $state,
                            'pincode' => $pincode,

                        );

                        $this->db->where('id', $idw);
                        $last_id = $this->db->update('tbl_vendor', $data_insert);
                    }


                    if ($last_id != 0) {
                        $this->session->set_flashdata('smessage', 'Data inserted successfully');

                        redirect("evadmin/Vendor/view_vendor", "refresh");
                    } else {
                        $this->session->set_flashdata('emessage', 'Sorry error occured');
                        redirect($_SERVER['HTTP_REFERER']);
                    }
                } else {
                    $this->session->set_flashdata('emessage', validation_errors());
                    redirect($_SERVER['HTTP_REFERER']);
                }
            } else {
                $this->session->set_flashdata('emessage', 'Please insert some data, No data available');
                redirect($_SERVER['HTTP_REFERER']);
            }
        } else {
            redirect("login/admin_login", "refresh");
        }
    }
    public function update_vendor($idd)
    {
        if (!empty($this->session->userdata('admin_data'))) {
            $data['user_name'] = $this->load->get_var('user_name');

            // echo SITE_NAME;
            // echo $this->session->userdata('image');
            // echo $this->session->userdata('position');
            // exit;
            $id = base64_decode($idd);
            $data['id'] = $idd;

            $this->db->select('*');
            $this->db->from('tbl_vendor');
            $this->db->where('id', $id);
            $data['vendor_data'] = $this->db->get()->row();
            $data['state_data'] = $this->db->get_where('all_states', array())->result();
            $this->load->view('admin/common/header_view', $data);
            $this->load->view('admin/vendor/update_vendor');
            $this->load->view('admin/common/footer_view');
        } else {
            redirect("login/admin_login", "refresh");
        }
    }
    public function delete_vendor($idd)
    {
        if (!empty($this->session->userdata('admin_data'))) {
            $data['user_name'] = $this->load->get_var('user_name');

            // echo SITE_NAME;
            // echo $this->session->userdata('image');
            // echo $this->session->userdata('position');
            // exit;
            $id = base64_decode($idd);





            $zapak = $this->db->delete('tbl_vendor', array('id' => $id));
            if ($zapak != 0) {
                redirect("evadmin/Vendor/view_vendor", "refresh");
            } else {
                echo "Error";
                exit;
            }
        } else {
            $this->load->view('admin/login/index');
        }
    }

    public function updatevendorStatus($idd, $t)
    {
        if (!empty($this->session->userdata('admin_data'))) {
            $data['user_name'] = $this->load->get_var('user_name');

            // echo SITE_NAME;
            // echo $this->session->userdata('image');
            // echo $this->session->userdata('position');
            // exit;
            $id = base64_decode($idd);

            if ($t == "active") {
                $data_update = array(
                    'is_active' => 1

                );

                $this->db->where('id', $id);
                $zapak = $this->db->update('tbl_bill2', $data_update);

                if ($zapak != 0) {
                    redirect("evadmin/Vendor/view_bill", "refresh");
                } else {
                    echo "Error";
                    exit;
                }
            }
            if ($t == "inactive") {
                $data_update = array(
                    'is_active' => 0

                );

                $this->db->where('id', $id);
                $zapak = $this->db->update('tbl_bill2', $data_update);

                if ($zapak != 0) {
                    redirect("evadmin/Vendor/view_bill", "refresh");
                } else {
                    $data['e'] = "Error Occured";
                    // exit;
                    $this->load->view('errors/error500admin', $data);
                }
            }
        } else {
            $this->load->view('admin/login/index');
        }
    }
    public function view_bill($idd)
    {
        if (!empty($this->session->userdata('admin_data'))) {
            $data['user_name'] = $this->load->get_var('user_name');

            $id = base64_decode($idd);
            $data['id'] = $idd;
            $this->db->select('*');
            $this->db->from('tbl_bills');
            $this->db->where('vendor_id', $id);
            $data['bill_data'] = $this->db->get();

            $vendor = $this->db->get_where('tbl_vendor', array('id' => $id))->row();
            $data['name'] = $vendor->business_name;
            $this->load->view('admin/common/header_view', $data);
            $this->load->view('admin/vendor/view_bill');
            $this->load->view('admin/common/footer_view');
        } else {
            $this->load->view('admin/login/index');
        }
    }

    public function add_bill($idd)
    {
        if (!empty($this->session->userdata('admin_data'))) {
            $data['user_name'] = $this->load->get_var('user_name');

            $id = base64_decode($idd);
            $data['id'] = $idd;
            $data['vendor_data'] = $this->db->get_where('tbl_vendor', array('is_active' => 1))->result();
            $data['products'] = $this->db->get_where('tbl_vendor_products', array('is_active' => 1, 'vendor_id' => $id))->result();
            $vendor = $this->db->get_where('tbl_vendor', array('id' => $id))->row();
            $bill_data = $this->db->order_by('id', 'desc')->get_where('tbl_bills', array('vendor_id' => $id))->row();
            $data['name'] = $vendor->business_name;
            date_default_timezone_set("Asia/Calcutta");
            $current = date("Y");
            $next = date('y', strtotime('+1 year'));    
            if (!empty($bill_data)) {
                $data['invoice_no'] = $current . '-' . $next . '/ GST';
            } else {
                $data['invoice_no'] = $current . '-' . $next . '/1/ GST';

            }
            // echo $data['invoice_no'];die();
            $this->load->view('admin/common/header_view', $data);
            $this->load->view('admin/vendor/add_bill');
            $this->load->view('admin/common/footer_view');
        } else {
            $this->load->view('admin/login/index');
        }
    }
    public function add_bill_data($t, $iw = "")
    {
        if (!empty($this->session->userdata('admin_data'))) {
            $this->load->helper(array('form', 'url'));
            $this->load->library('form_validation');
            $this->load->helper('security');
            if (!empty($this->input->post())) {
                $this->form_validation->set_rules('name[]', 'Name', 'required|trim');
                // $this->form_validation->set_rules('rate[]', 'Rate', 'required|trim');
                $this->form_validation->set_rules('quantity[]', 'quantity', 'required|trim');
                // $this->form_validation->set_rules('unit[]', 'unit', 'required|trim');
                // $this->form_validation->set_rules('rgst[]', 'rgst', 'required|trim|xss_clean');
                $this->form_validation->set_rules('total[]', 'total', 'required|trim');
                $this->form_validation->set_rules('count', 'count', 'required|trim');
                $this->form_validation->set_rules('invoice_no', 'invoice_no', 'required|trim|xss_clean');
                $this->form_validation->set_rules('vendor_id', 'vendor_id', 'required|trim|xss_clean');
                $this->form_validation->set_rules('invoice_date', 'invoice_date', 'required|trim|xss_clean');


                if (!empty($this->form_validation->run() == true)) {
                    $name = $this->input->post('name');
                    // $rate = $this->input->post('rate');
                    $quantity = $this->input->post('quantity');
                    // $unit = $this->input->post('unit');
                    $total = $this->input->post('total');
                    // $rgst = $this->input->post('rgst');
                    $v_id = $this->input->post('vendor_id');
                    $count = $this->input->post('count');
                    $invoice_no = $this->input->post('invoice_no');
                    $invoice_date = $this->input->post('invoice_date');



                    $ip = $this->input->ip_address();
                    date_default_timezone_set("Asia/Calcutta");
                    $cur_date = date("Y-m-d H:i:s");
                    $addedby = $this->session->userdata('admin_id');
                    $only_data = date("Y-m-d");
                    $typ = base64_decode($t);
                    if ($typ == 1) {
                        $data_insert = array(
                            'vendor_id' => base64_decode($v_id),
                            'invoice_no' => $invoice_no,
                            'invoice_date' => $invoice_date,
                            'added_by' => $addedby,
                            'ip' => $ip,
                            'date' => $cur_date,
                            'only_date' => $only_data,
                        );
                        $last_id = $this->base_model->insert_table("tbl_bills", $data_insert, 1);
                        //------- bill details  ---------
                        $sub_total = 0;
                        $gst_amount = 0;
                        $bill_total = 0;
                        for ($i = 0; $i < $count; $i++) {
                            $pro_data = $this->db->get_where('tbl_vendor_products', array('is_active' => 1, 'id' => $name[$i]))->row();

                            $sub_total += $pro_data->rate * $quantity[$i];
                            $gst_amount += ($pro_data->rgst - $pro_data->rate) * $quantity[$i];
                            $bill_total += $total[$i];
                            $total_gst = ($total[$i] - ($pro_data->rate * $quantity[$i]));

                            $data_insert = array(
                                'main_id' => $last_id,
                                'name' => $pro_data->name,
                                'unit' => $pro_data->unit,
                                'rate' => $pro_data->rate,
                                'quantity' => $quantity[$i],
                                'sub_total' => $pro_data->rate * $quantity[$i],
                                'gst' => 5,
                                'gst_amount' => $pro_data->rgst - $pro_data->rate,
                                'rgst' => $pro_data->rgst,
                                'total_gst' => $total_gst,
                                'total' => $total[$i],
                                'date' => $cur_date,
                                'only_date' => $only_data,
                            );
                            $last_ids = $this->base_model->insert_table("tbl_bill_details", $data_insert, 1);
                        }
                        // -- update order amount ----
                        $data_update = array(
                            'sub_total' => $sub_total,
                            'gst_percentage' => 5,
                            'gst_amount' => $gst_amount,
                            'total_amount' => $bill_total,
                        );
                        $this->db->where('id', $last_id);
                        $zapak = $this->db->update('tbl_bills', $data_update);
                        if ($last_id != 0) {
                            $this->session->set_flashdata('smessage', 'Data inserted successfully');

                            redirect("evadmin/Vendor/view_bill/" . $v_id, "refresh");
                        } else {
                            $this->session->set_flashdata('smessage', 'Some error found');
                            redirect($_SERVER['HTTP_REFERER']);
                        }
                    }
                    if ($typ == 2) {
                        $idw = base64_decode($iw);
                        $data_insert = array(
                            'added_by' => $addedby,
                            'invoice_no' => $invoice_no,
                            'invoice_date' => $invoice_date,
                            'ip' => $ip,
                            'date' => $cur_date,
                            'only_date' => $only_data,
                        );
                        $this->db->where('id', $idw);
                        $last_id = $this->db->update('tbl_bills', $data_insert);
                        $delete = $this->db->delete('tbl_bill_details', array('main_id' => $idw));
                        //------- bill details  ---------
                        $sub_total = 0;
                        $gst_amount = 0;
                        $bill_total = 0;
                        for ($i = 0; $i < $count; $i++) {
                            $pro_data = $this->db->get_where('tbl_vendor_products', array('is_active' => 1, 'id' => $name[$i]))->row();

                            $sub_total += $pro_data->rate * $quantity[$i];
                            $gst_amount += ($pro_data->rgst - $pro_data->rate) * $quantity[$i];
                            $bill_total += $total[$i];
                            $total_gst = ($total[$i] - ($pro_data->rate * $quantity[$i]));

                            $data_insert = array(
                                'main_id' => $idw,
                                'name' => $pro_data->name,
                                'unit' => $pro_data->unit,
                                'rate' => $pro_data->rate,
                                'quantity' => $quantity[$i],
                                'sub_total' => $pro_data->rate * $quantity[$i],
                                'gst' => 5,
                                'gst_amount' => $pro_data->rgst - $pro_data->rate,
                                'rgst' => $pro_data->rgst,
                                'total_gst' => $total_gst,
                                'total' => $total[$i],
                                'date' => $cur_date,
                                'only_date' => $only_data,
                            );
                            $last_ids = $this->base_model->insert_table("tbl_bill_details", $data_insert, 1);
                        }
                        // -- update order amount ----
                        $data_update = array(
                            'sub_total' => $sub_total,
                            'gst_percentage' => 5,
                            'gst_amount' => $gst_amount,
                            'total_amount' => $bill_total,
                        );
                        $this->db->where('id', $last_id);
                        $zapak = $this->db->update('tbl_bills', $data_update);
                        if ($last_id != 0) {
                            $this->session->set_flashdata('smessage', 'Data updated successfully');

                            redirect("evadmin/Vendor/view_bill/" . $v_id, "refresh");
                        } else {
                            $this->session->set_flashdata('smessage', 'Some error found');
                            redirect($_SERVER['HTTP_REFERER']);
                        }
                    }
                } else {
                    $this->session->set_flashdata('emessage', validation_errors());
                    redirect($_SERVER['HTTP_REFERER']);
                }
            } else {
                $this->session->set_flashdata('emessage', 'Please insert some data, No data available');
                redirect($_SERVER['HTTP_REFERER']);
            }
        } else {
            $this->load->view('admin/login/index');
        }
    }


    public function update_bill($idd, $iddd)
    {
        if (!empty($this->session->userdata('admin_data'))) {
            $id1 = base64_decode($iddd);
            $data['id1'] = $iddd;


            $id = base64_decode($idd);
            $data['id'] = $idd;

            // echo $id;
            // exit;
            $this->db->select('*');
            $this->db->from('tbl_bills');
            $this->db->where('id', $id);
            // $this->db->where('vendor_id',$id);
            $data['bill_data'] = $this->db->get()->row();
            $this->db->select('*');
            $this->db->from('tbl_bill_details');
            $this->db->where('main_id', $id);
            $data['bill_details'] = $this->db->get();
            $vendor = $this->db->get_where('tbl_vendor', array('id' => $data['bill_data']->vendor_id))->row();
            $data['name'] = $vendor->business_name;
            $data['vendor_data'] = $this->db->get_where('tbl_vendor', array('is_active' => 1,))->result();
            $data['products'] = $this->db->get_where('tbl_vendor_products', array('is_active' => 1,))->result();

            $this->load->view('admin/common/header_view', $data);
            $this->load->view('admin/vendor/update_bill');
            $this->load->view('admin/common/footer_view');
        } else {
            $this->load->view('admin/login/index');
        }
    }
    public function print_bill($idd)
    {
        if (!empty($this->session->userdata('admin_data'))) {
            $id = base64_decode($idd);
            $data['id'] = $idd;

            // echo $id;
            // exit;
            $this->db->select('*');
            $this->db->from('tbl_bills');
            $this->db->where('id', $id);
            // $this->db->where('vendor_id',$id);
            $data['bill_data'] = $this->db->get()->row();
            $this->db->select('*');
            $this->db->from('tbl_bill_details');
            $this->db->where('main_id', $id);
            $data['bill_details'] = $this->db->get();
            $data['vendor'] = $this->db->get_where('tbl_vendor', array('id' => $data['bill_data']->vendor_id))->row();

            $this->load->view('admin/vendor/print_bill', $data);
        } else {
            $this->load->view('admin/login/index');
        }
    }

    public function delete_bill($idd)
    {
        if (!empty($this->session->userdata('admin_data'))) {
            $data['user_name'] = $this->load->get_var('user_name');

            // echo SITE_NAME;
            // echo $this->session->userdata('image');
            // echo $this->session->userdata('position');
            // exit;
            $id = base64_decode($idd);
            $this->db->select('*');
            $this->db->from('tbl_bill2');
            $this->db->where('id', $id);
            $table_data = $this->db->get()->row();
            $vendor_id = base64_encode($table_data->vendor_id);

            if ($this->load->get_var('position') == "Super Admin") {
                $zapak = $this->db->delete('tbl_bill2', array('id' => $id));
                if ($zapak != 0) {
                    redirect("evadmin/Vendor/view_bill/$vendor_id", "refresh");
                } else {
                    echo "Error";
                    exit;
                }
            } else {
                $data['e'] = "Sorry You Don't Have Permission To Delete Anything.";
                // exit;
                $this->load->view('errors/error500admin', $data);
            }
        } else {
            $this->load->view('admin/login/index');
        }
    }
}
