<?php
class Post extends CI_Controller
{
    public function __construct()
    {
        Parent::__construct();
        $this->load->model('Post_model');
    }

    public function tambah()
    {
        if (logged_in()) {
            $data['judul'] = 'Tambah Post';

            $this->form_validation->set_rules('judul', 'Judul Post', 'required');
            $this->form_validation->set_rules('isi', 'Isi Post', 'required');

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('templates/header', $data);
                $this->load->view('post/tambah');
                $this->load->view('templates/footer');
            } else {
                $this->Post_model->tambahPost();
                $this->session->set_flashdata('notif', 'ditambahkan');
                $this->session->set_flashdata('alert', 'success');
                $this->session->set_flashdata('tipe', 'berhasil');
                redirect(base_url('post'));
            }
        } else {
            redirect('auth');
        }

    }

    public function prosesTambah()
    {
        $this->Post_model->tambahpost();
        redirect(base_url() . "post");
    }
    public function index()
    {
        $data['judul'] = 'Halaman Post';

        $this->load->library('pagination');

        $config['base_url'] = 'https://pelatihan-web.herokuapp.com/post/index';

        if ($this->session->userdata('keyword') == false) {

            $this->session->set_userdata('keyword', '');
        }

        if (isset($_POST['submit'])) {
            $data['keyword'] = $this->input->post('keyword');
            $this->session->set_userdata('keyword', $data['keyword']);
        } else {
            $data['keyword'] = $_SESSION['keyword'];
        }
        $config['total_rows'] = $this->Post_model->countPosts($data['keyword']);

        $config['per_page'] = 9;

        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);

        $data['post'] = $this->Post_model->getPosts($config['per_page'], $data['start'], $data['keyword']);

        $this->load->view('templates/header', $data);
        $this->load->view('post/index', $data);
        $this->load->view('templates/footer');
    }
    public function update($id)
    {
        if (logged_in()) {
        $data['judul'] = "update Post";
        $data['post'] = $this->Post_model->getPostById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('post/update', $data);
        $this->load->view('templates/footer');
        } else {
        redirect('auth');
        }

    }
    public function prosesUpdate($id)
    {
        $this->Post_model->updatePost($id);

        redirect(base_url() . "post");
    }
    public function hapus($id)
    {
        if (logged_in()) {
        $this->Post_model->hapuspost($id);
        redirect(base_url(), "post");
        } else {
        redirect('auth');
        }
    }
    public function artikel($id)
    {
        $data['judul'] = "Artikel";
        $data['post'] = $this->Post_model->getPostById($id);

        $this->load->view('templates/header', $data);
        $this->load->view('post/artikel');
        $this->load->view('templates/footer');
    }
    
}
