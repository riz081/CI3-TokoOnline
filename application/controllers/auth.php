<?php

class Auth extends CI_Controller
{
    public function login()
    {
        $this->form_validation->set_rules('username', 'Username', 'required', [
            'required' => 'Username harus diisi!'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required', [
            'required' => 'Password harus diisi!'
        ]);
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header');
            $this->load->view('form_login');
            $this->load->view('templates/footer');
        } else {
            $auth = $this->model_auth->cek_login();

            if ($auth == FALSE) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
                Username atau Password salah!
                </div>');
                redirect('auth/login');
            } else {
                $this->session->userdata('username', $auth->username);
                $this->session->userdata('role_id', $auth->role_id);

                switch ($auth->role_id) {
                    case 1:
                        redirect('admin/dashboard_admin');
                        break;
                    case 2:
                        redirect('dashboard');
                        break;
                    default:
                        break;
                }
            }
        }
    }
}
