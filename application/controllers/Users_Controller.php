<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users_Controller extends CI_Controller
{

    public function index()
    {

        $this->load->model("register_user");
     // $data['records'] = $this->register_user->getdata();

        $this->load->library('pagination');

        $config = array();
        $config["base_url"] = base_url() . "Users_Controller/index";
        $config["total_rows"] = $this->register_user->record_count();
        $config["per_page"] = 10;
        $config["uri_segment"] = 3;

        $config['num_links'] = 5;
        $config['use_page_numbers'] = true;
        $config['reuse_query_string'] = true;

        $config['full_tag_open'] = '<div class="pagination">';
        $config['full_tag_close'] = '</div>';

        $config['first_link'] = 'First Page';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last Page';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = 'Next Page';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = 'Prev Page';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"><a href="javascript:void(0);">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>'; 

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        
        $data["records"] = $this->register_user->
            fetch_data($config["per_page"], $page);

        $data["links"] = $this->pagination->create_links();

        // $this->load->view("example1", $data);

        $this->load->view("dashboard", $data);
    }

    public function update($user_sid)
    {
        //$this->load->helper('url');

        $this->load->model('register_user');
        $data = array();
        $user_data = $this->register_user->get_user_data($user_sid);
        $data['user_data'] = $user_data[0];
        // echo "<pre>";
        // print_r($user_data[0]);
        // die();

        $this->load->library("form_validation");
        $this->form_validation->set_rules('Name', 'Name', 'required');
        $this->form_validation->set_rules('PhoneNumber', 'PhoneNumber', 'required');
        $this->form_validation->set_rules('Email', 'Email', 'required');
        $this->form_validation->set_rules('Country', 'Country', 'required');
        $this->form_validation->set_rules('Age', 'Age', 'required');
        $this->form_validation->set_rules('Gender', 'Gender', 'required');
        $this->form_validation->set_rules('ParentName', 'ParentName', 'required');
        $this->form_validation->set_rules('Address', 'Address', 'required');
        $this->form_validation->set_rules('Date', 'Date', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view("update_data", $data);
        } else {
            $updated_Name = $this->input->post('Name');
            $updated_PhoneNumber = $this->input->post('PhoneNumber');
            $updated_Email = $this->input->post('Email');
            $updated_Country = $this->input->post('Country');
            $updated_Age = $this->input->post('Age');
            $updated_Gender = $this->input->post('Gender');
            $updated_ParentName = $this->input->post('ParentName');
            $updated_Address = $this->input->post('Address');
            $updated_Date = $this->input->post('Date');
            $updated_password = $this->input->post('password');

            $data_to_update = array();
            $data_to_update['Name'] = $updated_Name;
            $data_to_update['PhoneNumber'] = $updated_PhoneNumber;
            $data_to_update['Email'] = $updated_Email;
            $data_to_update['Country'] = $updated_Country;
            $data_to_update['Age'] = $updated_Age;
            $data_to_update['Gender'] = $updated_Gender;
            $data_to_update['ParentName'] = $updated_ParentName;
            $data_to_update['Address'] = $updated_Address;
            $data_to_update['Date'] = $updated_Date;
            $data_to_update['password'] = $updated_password;

            $this->register_user->update($user_sid, $data_to_update);
            $data['records'] = $this->register_user->getdata();
            $this->load->view("dashboard", $data);

        }

        // $this->register_user->update_user(3, $data_to_update);

    }

    public function deleat($user_sid)
    {

        $this->load->model('register_user');

        $this->register_user->deleat_data($user_sid);
        $data['records'] = $this->register_user->getdata();
        $this->load->view("dashboard", $data);
    }

    public function add_user()
    {
        $this->load->model('register_user');
        $this->load->library("form_validation");
        $this->form_validation->set_rules('Name', 'Name', 'required');
        $this->form_validation->set_rules('PhoneNumber', 'PhoneNumber', 'required');
        $this->form_validation->set_rules('Email', 'Email', 'required');
        $this->form_validation->set_rules('Country', 'Country', 'required');
        $this->form_validation->set_rules('Age', 'Age', 'required');
        $this->form_validation->set_rules('Gender', 'Gender', 'required');
        $this->form_validation->set_rules('ParentName', 'ParentName', 'required');
        $this->form_validation->set_rules('Address', 'Address', 'required');
        $this->form_validation->set_rules('Date', 'Date', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
        $this->form_validation->run();

        if ($this->form_validation->run() == false) {
            $this->load->view("add_userview");
        } else {
            //handle post here
            $add_user_Name = $this->input->post('Name');

            $add_user_PhoneNumber = $this->input->post('PhoneNumber');
            $add_user_Email = $this->input->post('Email');
            $add_user_Country = $this->input->post('Country');
            $add_user_Age = $this->input->post('Age');
            $add_user_Gender = $this->input->post('Gender');
            $add_user_ParentName = $this->input->post('ParentName');
            $add_user_Address = $this->input->post('Address');
            $add_user_Date = $this->input->post('Date');
            $add_user_password = $this->input->post('password');

            $data_to_insert = array();
            $data_to_insert['Name'] = $add_user_Name;
            $data_to_insert['PhoneNumber'] = $add_user_PhoneNumber;
            $data_to_insert['Email'] = $add_user_Email;
            $data_to_insert['Country'] = $add_user_Country;
            $data_to_insert['Age'] = $add_user_Age;
            $data_to_insert['Gender'] = $add_user_Gender;
            $data_to_insert['ParentName'] = $add_user_ParentName;
            $data_to_insert['Address'] = $add_user_Address;
            $data_to_insert['Date'] = $add_user_Date;
            $data_to_insert['password'] = $add_user_password;

            $this->register_user->insert_user_into_DB($data_to_insert);

            $data['records'] = $this->register_user->getdata();
            $this->load->view("dashboard", $data);

        }

    }
}