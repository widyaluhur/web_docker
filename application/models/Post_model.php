<?php
class Post_model extends CI_model
{
    public function tambahpost()
    {
        $data = array(
            'judul' => $this->input->post('judul'),
            'isi' => $this->input->post('isi')
        );
        $this->db->insert('post', $data);
    }
    public function getAllPost()
    {
        return $this->db->select("id_post,judul,SUBSTRING(isi,1,150) as isi")->get('post')->result_array();
    }
    public function getPosts($limit, $start, $keyword = null)
    {
        return $this->db
            ->select("id_post,judul,SUBSTRING(isi,1,150) as isi")
            ->like('judul', $keyword)
            ->order_by('id_post', 'asc')
            ->get('post', $limit, $start)
            ->result_array();
    }

    public function countPosts($keyword = null)
    {
        return $this->db->like('judul', $keyword)
            ->from('post')
            ->count_all_results();
    }


    public function countAllPost()
    {
        return $this->db->get('post')->num_rows();
    }

    public function getPostById($id)
    {
        return $this->db
        ->select("id_post,judul,isi")
        ->where('id_post', $id)
        ->get('post')
        ->result_array();
    }
    public function updatePost($id)
    {
        $data = array(
            'judul' => $this->input->post('judul'),
            'isi' => $this->input->post('isi')
        );

        $this->db->where('id_post', $id)->update('post', $data);
    }

    public function hapuspost($id)
    {
        $this->db->where('id_post', $id)->delete('post');
    }
}
