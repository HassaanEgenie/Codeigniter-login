<?php
defined('BASEPATH') or exit("No direct script acess allowed");
class Login_form extends CI_Controller
{

    public function signup()
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

        if ($this->form_validation->run() == false) {
            $this->load->view("loginview");
        } else {
            //handle post here
            $Name = $this->input->post('Name');
            $PhoneNumber = $this->input->post('PhoneNumber');
            $Email = $this->input->post('Email');
            $Country = $this->input->post('Country');
            $Age = $this->input->post('Age');
            $Gender = $this->input->post('Gender');
            $ParentName = $this->input->post('ParentName');
            $Address = $this->input->post('Address');
            $Date = $this->input->post('Date');
            $password = $this->input->post('password');

            $data_to_insert = array();
            $data_to_insert['Name'] = $Name;
            $data_to_insert['PhoneNumber'] = $PhoneNumber;
            $data_to_insert['Email'] = $Email;
            $data_to_insert['Country'] = $Country;
            $data_to_insert['Age'] = $Age;
            $data_to_insert['Gender'] = $Gender;
            $data_to_insert['ParentName'] = $ParentName;
            $data_to_insert['Address'] = $Address;
            $data_to_insert['Date'] = $Date;
            $data_to_insert['password'] = $password;

            $this->register_user->insert_user_into_DB($data_to_insert);
            $this->load->library('session');
            $user_session = array(
                'Name' => $Name,
                'email' => $Email,
                'logged_in' => true,
            );

            

            $this->session->set_userdata($user_session);
            $this->load->view('partial/header');
            $this->load->view('partial/main' );
            $this->load->view('partial/footer');

            // $data['records']=$this->register_user->getdata();
            // $this->load->view("dashboard",$data);

        }

    }

    public function signout()
    {
        $this->load->library("session");
        $this->session->unset_userdata('Name');
        $this->session->unset_userdata('email');
        redirect('Login_form/signin');
    }

    public function signin()
    {
        $this->load->model("register_user");
        $this->load->library("form_validation");
        $this->form_validation->set_rules('Email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view("signin.php");
        } else {
            //handle post here
            $Email = $this->input->post('Email');
            $password = $this->input->post('password');

            $data_to_insert = array();
            $data_to_insert['Email'] = $Email;
            $data_to_insert['password'] = $password;

            $this->register_user->sigin_data($data_to_insert);
            $this->load->library('session');
            $user_session = array(

                'email' => $Email,
                'logged_in' => true,
            );

            $this->session->set_userdata($user_session);
            $this->load->view('partial/header');
            $this->load->view('partial/main');
            $this->load->view('partial/footer');
            // $data['records']=$this->register_user->getdata();
            // $this->load->view("dashboard",$data);

        }
    }

}