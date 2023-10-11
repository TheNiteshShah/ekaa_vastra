<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
require_once(APPPATH . 'core/CI_finecontrol.php');
class VendorProducts extends CI_finecontrol
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("login_model");
        $this->load->model("admin/base_model");
        $this->load->library('user_agent');
    }
    public function view_vendor_products($idd = "")
    {
        if (!empty($this->session->userdata('admin_data'))) {
            $data['user_name'] = $this->load->get_var('user_name');
            $id = base64_decode($idd);
            $data['id'] = $idd;
            $this->db->select('*');
            $this->db->from('tbl_vendor_products');
            if (!empty($id)) {
                $this->db->where('vendor_id',$id);
            }
            $data['vendor_products_data'] = $this->db->get();
            $vendor = $this->db->get_where('tbl_vendor', array('id' => $id))->row();
            $data['name'] = $vendor->business_name;

            $this->load->view('admin/common/header_view', $data);
            $this->load->view('admin/vendor_products/view_vendor_products');
            $this->load->view('admin/common/footer_view');
        } else {
            redirect("login/admin_login", "refresh");
        }
    }
    public function add_vendor_products($idd = "")
    {
        if (!empty($this->session->userdata('admin_data'))) {
            $data['user_name'] = $this->load->get_var('user_name');
            $data['state_data'] = $this->db->get_where('all_states', array())->result();
            $id = base64_decode($idd);
            $data['id'] = $idd;
            $data['vendor_data'] = $this->db->get_where('tbl_vendor', array('is_active' => 1,))->result();
            $vendor = $this->db->get_where('tbl_vendor', array('id' => $id))->row();
            $data['name'] = $vendor->business_name;
            $this->load->view('admin/common/header_view', $data);
            $this->load->view('admin/vendor_products/add_vendor_products');
            $this->load->view('admin/common/footer_view');
        } else {
            redirect("login/admin_login", "refresh");
        }
    }
    public function add_vendor_products_data($t, $iw = "")
    {
        if (!empty($this->session->userdata('admin_data'))) {
            $this->load->helper(array('form', 'url'));
            $this->load->library('form_validation');
            $this->load->helper('security');
            if ($this->input->post()) {
                // print_r($this->input->post());
                // exit;
                $this->form_validation->set_rules('vendor_id', 'vendor_id', 'required|xss_clean|trim');
                $this->form_validation->set_rules('name', 'name', 'required|xss_clean|trim');
                $this->form_validation->set_rules('unit', 'unit', 'required|xss_clean|trim');
                $this->form_validation->set_rules('sku', 'sku', 'xss_clean|trim');
                $this->form_validation->set_rules('rate', 'rate', 'required|xss_clean|trim');
                $this->form_validation->set_rules('gst', 'gst', 'required|xss_clean|trim');
                $this->form_validation->set_rules('rgst', 'rgst', 'required|xss_clean|trim');

                if ($this->form_validation->run() == true) {
                    $vendor_id = $this->input->post('vendor_id');
                    $name = $this->input->post('name');
                    $unit = $this->input->post('unit');
                    $sku = $this->input->post('sku');
                    $rate = $this->input->post('rate');
                    $gst = $this->input->post('gst');
                    $rgst = $this->input->post('rgst');


                    $ip = $this->input->ip_address();
                    date_default_timezone_set("Asia/Calcutta");
                    $cur_date = date("Y-m-d H:i:s");
                    $addedby = $this->session->userdata('admin_id');
                    $this->load->library('upload');

                    $typ = base64_decode($t);
                    if ($typ == 1) {
                        $data_insert = array(
                            'vendor_id' => base64_decode($vendor_id),
                            'name' => $name,
                            'unit' => $unit,
                            'sku' => $sku,
                            'rate' => $rate,
                            'gst' => $gst,
                            'gst_amount' => $rgst - $rate,
                            'rgst' => $rgst,
                            'ip' => $ip,
                            'added_by' => $addedby,
                            'is_active' => 1,
                            'date' => $cur_date

                        );





                        $last_id = $this->base_model->insert_table("tbl_vendor_products", $data_insert, 1);
                        if ($last_id != 0) {
                            $this->session->set_flashdata('smessage', 'Data inserted successfully');

                            redirect("evadmin/VendorProducts/view_vendor_products/".$vendor_id, "refresh");
                        } else {
                            $this->session->set_flashdata('emessage', 'Sorry error occured');
                            redirect($_SERVER['HTTP_REFERER']);
                        }
                    }
                    if ($typ == 2) {
                        $idw = base64_decode($iw);
                        $this->db->select('*');
                        $this->db->from('tbl_vendor_products');
                        $this->db->where('id', $idw);
                        $dsa = $this->db->get()->row();
                        $data_insert = array(
                            'name' => $name,
                            'unit' => $unit,
                            'sku' => $sku,
                            'gst_amount' => $rgst - $rate,
                            'rate' => $rate,
                            'gst' => $gst,
                            'rgst' => $rgst,
                            'added_by' => $addedby,
                            'date' => $cur_date



                        );

                        $this->db->where('id', $idw);
                        $last_id = $this->db->update('tbl_vendor_products', $data_insert);
                        if ($last_id != 0) {
                            $this->session->set_flashdata('smessage', 'Data updated successfully');

                            redirect("evadmin/VendorProducts/view_vendor_products/".$vendor_id, "refresh");
                        } else {
                            $this->session->set_flashdata('emessage', 'Sorry error occured');
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
            redirect("login/admin_login", "refresh");
        }
    }
    public function update_vendor_products($idd)
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
            $this->db->from('tbl_vendor_products');
            $this->db->where('id', $id);
            $data['vendor_products_data'] = $this->db->get()->row();
            $vendor = $this->db->get_where('tbl_vendor', array('id' =>  $data['vendor_products_data']->vendor_id))->row();
            $data['name'] = $vendor->business_name;
            $data['state_data'] = $this->db->get_where('all_states', array())->result();
            $this->load->view('admin/common/header_view', $data);
            $this->load->view('admin/vendor_products/update_vendor_products');
            $this->load->view('admin/common/footer_view');
        } else {
            redirect("login/admin_login", "refresh");
        }
    }
    public function delete_vendor_products($idd)
    {
        if (!empty($this->session->userdata('admin_data'))) {
            $data['user_name'] = $this->load->get_var('user_name');

            // echo SITE_NAME;
            // echo $this->session->userdata('image');
            // echo $this->session->userdata('position');
            // exit;
            $id = base64_decode($idd);





            $zapak = $this->db->delete('tbl_vendor_products', array('id' => $id));
            if ($zapak != 0) {
                $this->session->set_flashdata('smessage', 'Item deleted successfully');
                redirect($_SERVER['HTTP_REFERER']);
            } else {
                echo "Error";
                exit;
            }
        } else {
            $this->load->view('admin/login/index');
        }
    }

    public function updateVendorProductsStatus($idd, $t)
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
                $zapak = $this->db->update('tbl_vendor_products', $data_update);

                if ($zapak != 0) {
                    $this->session->set_flashdata('smessage', 'Status updated successfully');
                    redirect($_SERVER['HTTP_REFERER']);
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
                $zapak = $this->db->update('tbl_vendor_products', $data_update);

                if ($zapak != 0) {
                    $this->session->set_flashdata('smessage', 'Status updated successfully');
                    redirect($_SERVER['HTTP_REFERER']);
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
    //-------------- get types -----------------
    public function getProductData()
    {
        $id = $_GET['isl'];
        $this->db->select('*');
        $this->db->from('tbl_vendor_products');
        $this->db->where('id', $id);
        $vendor = $this->db->get()->row();
        echo json_encode($vendor);
    }
}
