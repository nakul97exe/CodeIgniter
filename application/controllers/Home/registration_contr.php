<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class registration_contr extends CI_Controller 
{
    public function index()
    {
        $this->load->view('Home/registration');
    }
    public function table()
    {
        $this->load->model("listview_model");
        $data['fetch']=$this->listview_model->fetch_data();
        $this->load->view('listview', $data);
    }

    public function form_validation()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules("Membername", "Member Name", 'required|alpha|max_length[30]');
        $this->form_validation->set_rules("qualification", "Qualification", 'required|alpha|max_length[30]');
        $this->form_validation->set_rules("birthdate", "Birth Date", 'required');
        $this->form_validation->set_rules("gender", "Gender", 'required');
        $this->form_validation->set_rules("uploadphoto", "Upload Photo", 'required');
        $this->form_validation->set_rules("address", "Address", 'required|alpha|max_length[40]');
        $this->form_validation->set_rules("state", "State", 'required');
        $this->form_validation->set_rules("city", "City", 'required');
        $this->form_validation->set_rules("pincode", "Pincode", 'required|numeric|max_length[6]');
        $this->form_validation->set_rules("phone", "Phone", 'required|numeric|max_length[15]');
        $this->form_validation->set_rules("mobileno", "Mobileno", 'required|numeric|max_length[10]');
        $this->form_validation->set_rules("emailid", "Email", 'required|valid_email');
        $this->form_validation->set_rules("iriamembership", "IRIAmembershipnumber", 'required|alpha_numeric|max_length[12]');
        $this->form_validation->set_rules("iriamembershipsnice", "IRIAmembershipsnice", 'required');
        $this->form_validation->set_rules("membershipdoc", "Membershipdoc", 'required');
        $this->form_validation->set_rules("namemedicalcouncil", "Namemedicalcouncil", 'required|alpha|max_length[30]');
        $this->form_validation->set_rules("councilregnumber", "Councilregnumber", 'required|alpha_numeric|max_length[12]');
        $this->form_validation->set_rules("nameinstitute", "Nameinstitute", 'required|alpha|max_length[30]');
        $this->form_validation->set_rules("designation", "Designation", 'required|alpha|max_length[30]');
        $this->form_validation->set_rules("teaching", "Teaching", 'required|numeric|max_length[4]');
        $this->form_validation->set_rules("nonteaching", "Nonteaching", 'required|numeric|max_length[4]');
        $this->form_validation->set_rules("address2", "Address2", 'required|alpha|max_length[40]');
        $this->form_validation->set_rules("country", "Country", 'required');
        $this->form_validation->set_rules("state2", "State2", 'required');
        $this->form_validation->set_rules("city2", "City2", 'required');
        $this->form_validation->set_rules("pincode2", "Pincode2", 'required|numeric|max_length[6]');
        $this->form_validation->set_rules("telephone2", "Telephone2", 'required|numeric|max_length[15]');
        $this->form_validation->set_rules("mobileno2", "Mobileno2", 'required|numeric|max_length[10]');
        $this->form_validation->set_rules("emailid2", "Emailid2", 'required|valid_email');
        $this->form_validation->set_rules("biodata", "Biodata", 'required');

        if($this->form_validation->run())
        {
            $this->load->model('Home/regsitration_model');
            $data= array(
                "Membername"       =>$this->input->post("Membername"),
                "qualification"    =>$this->input->post("qualification"),
                "birthdate"        =>$this->input->post("birthdate"),
                "gender"           =>$this->input->post("gender"),
                "uploadphoto"      =>$this->input->post("uploadphoto"),
                "address"          =>$this->input->post("address"),
                "state"            =>$this->input->post("state"),
                "city"             =>$this->input->post("city"),
                "pincode"          =>$this->input->post("pincode"),
                "phone"            =>$this->input->post("phone"),
                "mobileno"         =>$this->input->post("mobileno"),
                "emailid"          =>$this->input->post("emailid"),
                "iriamembership"   =>$this->input->post("iriamembership"),
                "iriamembershipsnice"    =>$this->input->post("iriamembershipsnice"),
                "membershipdoc"          =>$this->input->post("membershipdoc"),
                "namemedicalcouncil"     =>$this->input->post("namemedicalcouncil"),
                "councilregnumber"       =>$this->input->post("councilregnumber"),
                "nameinstitute"       =>$this->input->post("nameinstitute"),
                "designation"       =>$this->input->post("designation"),
                "teaching"       =>$this->input->post("teaching"),
                "nonteaching"       =>$this->input->post("nonteaching"),
                "address2"       =>$this->input->post("address2"),
                "country"       =>$this->input->post("country"),
                "state2"       =>$this->input->post("state2"),
                "city2"       =>$this->input->post("city2"),
                "pincode2"       =>$this->input->post("pincode2"),
                "telephone2"       =>$this->input->post("telephone2"),
                "mobileno2"       =>$this->input->post("mobileno2"),
                "emailid2"       =>$this->input->post("emailid2"),
                "biodata"       =>$this->input->post("biodata"),
                "reg_date"      =>$this->input->post("current_date")



            );

            $this->regsitration_model->insert_data($data);
            echo'<script type="text/javascript">
            window.alert("Data Inserted");
            window.location.href="http://localhost:82/codeIgniter/index.php/Home/registration_contr/inserted";
            </script>';
        }
        else
        {
            $this->index();
        }

    }

    public function inserted()
    {
        $this->table();
    }

}

?>