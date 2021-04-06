<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Post_model extends CI_Model
{
    public function getsubPost()
    {
        $query = "SELECT `post`.*, `user`.`name`, `user`.`email`, `tipe_masakan`.`tipe` 
                    FROM `post` 
                    JOIN `user`
                    JOIN `tipe_masakan`
                    ON `post`.`id_user` = `user`.`id`
                    AND `post`.`id_tipe` = `tipe_masakan`.`id`
        ";
        return $this->db->query($query)->result_array();
    }

    public function get_postingan_list($id)
    {
        $query = "SELECT `post`.*, `user`.`name`, `user`.`text`, `user`.`sosmed`, `user`.`image`, `tipe_masakan`.`tipe`
                    FROM `post` 
                    JOIN `user`
                    JOIN `tipe_masakan`
                    ON `post`.`id_user` = `user`.`id`
                    AND `post`.`id_tipe` = `tipe_masakan`.`id`
                    WHERE `post`.`id` = $id
        ";
        return $this->db->query($query)->row_array();
    }

    public function get_post_rekomendasi()
    {
        $query = "SELECT `post`.*, `user`.`name`, `user`.`image`, `tipe_masakan`.`tipe`
                    FROM `post` 
                    JOIN `user`
                    JOIN `tipe_masakan`
                    ON `post`.`id_user` = `user`.`id`
                    AND `post`.`id_tipe` = `tipe_masakan`.`id`
                    ORDER BY `post`.`pengunjung` DESC
        ";
        return $this->db->query($query)->result_array();
    }

    public function get_post_baru()
    {
        $query = "SELECT `post`.*, `user`.`name`, `user`.`image`, `tipe_masakan`.`tipe`
                    FROM `post` 
                    JOIN `user`
                    JOIN `tipe_masakan`
                    ON `post`.`id_user` = `user`.`id`
                    AND `post`.`id_tipe` = `tipe_masakan`.`id`
                    ORDER BY `post`.`date_created` DESC
        ";
        return $this->db->query($query)->result_array();
    }

    public function get_postingan_recent($asal, $tipe)
    {
        $query = "SELECT `post`.*, `tipe_masakan`.`tipe` 
                    FROM `post` 
                    JOIN `tipe_masakan`
                    ON `post`.`id_tipe` = `tipe_masakan`.`id`
                    WHERE `post`.`asal_masakan` = '$asal'
                    OR `post`.`id_tipe` = $tipe
                    ORDER BY RAND()
                    LIMIT 3
        ";
        return $this->db->query($query)->result_array();
    }

    public function get_asal()
    {
        $query = "SELECT asal_masakan
                    FROM   post
                    GROUP BY asal_masakan
        ";
        return $this->db->query($query)->result_array();
    }

    public function get_postingan_populer()
    {
        $query = "SELECT `post`.*
                    FROM `post` 
                    ORDER BY `post`.`pengunjung` DESC LIMIT 5
        ";
        return $this->db->query($query)->result_array();
    }

    function get_post_list($id)
    {
        $this->load->library('pagination');
        $query = "SELECT `post`.*, `user`.`name`, `user`.`email`, `tipe_masakan`.`tipe` 
                FROM `post` 
                JOIN `user`
                JOIN `tipe_masakan`
                ON `post`.`id_user` = `user`.`id`
                AND `post`.`id_tipe` = `tipe_masakan`.`id`
                WHERE `post`.`id_user` = $id
                ORDER BY `post`.`date_created` DESC
        ";

        //konfigurasi pagination
        $config['base_url'] = base_url('user/lihatpost');
        $config['total_rows'] = $this->db->query($query)->num_rows();
        $config['per_page'] = 3;
        $config['uri_segment'] = 3;
        $config['num_links'] = 3;

        // Membuat Style pagination untuk BootStrap v4
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link green darken-1">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';


        $page = ($this->uri->segment($config['uri_segment'])) ? $this->uri->segment($config['uri_segment']) : 0;
        $query .= " LIMIT " . $page . ", " . $config['per_page'];

        $data['limit'] = $config['per_page'];
        $data['total_rows'] = $config['total_rows'];
        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links(); // Generate link pagination nya sesuai config diatas
        $data['post'] = $this->db->query($query)->result();


        return $data;
    }

    function get_search_list($keyword)
    {
        $this->load->library('pagination');
        $query = "SELECT `post`.*, `user`.`name`, `user`.`email`, `tipe_masakan`.`tipe`, `user`.`image`
                FROM `post` 
                JOIN `user`
                JOIN `tipe_masakan`
                ON `post`.`id_user` = `user`.`id`
                AND `post`.`id_tipe` = `tipe_masakan`.`id`
                WHERE `post`.`title` LIKE '%" . $keyword . "%'
                OR `post`.`asal_masakan` LIKE '%" . $keyword . "%'
        ";

        //konfigurasi pagination
        $config['base_url'] = base_url('user/search');
        $config['total_rows'] = $this->db->query($query)->num_rows();
        $config['per_page'] = 6;
        $config['uri_segment'] = 3;
        $config['num_links'] = 3;

        // Membuat Style pagination untuk BootStrap v4
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center pb-4">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link green darken-1">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';


        $page = ($this->uri->segment($config['uri_segment'])) ? $this->uri->segment($config['uri_segment']) : 0;
        $query .= " LIMIT " . $page . ", " . $config['per_page'];

        $data['limit'] = $config['per_page'];
        $data['total_rows'] = $config['total_rows'];
        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links(); // Generate link pagination nya sesuai config diatas
        $data['post'] = $this->db->query($query)->result();


        return $data;
    }

    function get_filter_list($tipe, $asal, $view)
    {
        $this->load->library('pagination');
        if ($view == 1) {
            $query = "SELECT `post`.*, `user`.`name`, `user`.`email`, `tipe_masakan`.`tipe`, `user`.`image`
            FROM `post` 
            JOIN `user`
            JOIN `tipe_masakan`
            ON `post`.`id_user` = `user`.`id`
            AND `post`.`id_tipe` = `tipe_masakan`.`id`
            WHERE `post`.`id_tipe` = $tipe
            OR `post`.`asal_masakan` = '$asal'
            ORDER BY `post`.`pengunjung` DESC
            ";
        } elseif ($view == 2) {
            $query = "SELECT `post`.*, `user`.`name`, `user`.`email`, `tipe_masakan`.`tipe`, `user`.`image`
            FROM `post` 
            JOIN `user`
            JOIN `tipe_masakan`
            ON `post`.`id_user` = `user`.`id`
            AND `post`.`id_tipe` = `tipe_masakan`.`id`
            WHERE `post`.`id_tipe` = $tipe
            OR `post`.`asal_masakan` = '$asal'
            ORDER BY `post`.`pengunjung` ASC
            ";
        } else {
            $query = "SELECT `post`.*, `user`.`name`, `user`.`email`, `tipe_masakan`.`tipe`, `user`.`image`
            FROM `post` 
            JOIN `user`
            JOIN `tipe_masakan`
            ON `post`.`id_user` = `user`.`id`
            AND `post`.`id_tipe` = `tipe_masakan`.`id`
            WHERE `post`.`id_tipe` = $tipe
            OR `post`.`asal_masakan` = '$asal'
            ";
        }

        //konfigurasi pagination
        $config['base_url'] = base_url('user/search');
        $config['total_rows'] = $this->db->query($query)->num_rows();
        $config['per_page'] = 6;
        $config['uri_segment'] = 3;
        $config['num_links'] = 3;

        // Membuat Style pagination untuk BootStrap v4
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center pb-4">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link green darken-1">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';


        $page = ($this->uri->segment($config['uri_segment'])) ? $this->uri->segment($config['uri_segment']) : 0;
        $query .= " LIMIT " . $page . ", " . $config['per_page'];

        $data['limit'] = $config['per_page'];
        $data['total_rows'] = $config['total_rows'];
        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links(); // Generate link pagination nya sesuai config diatas
        $data['post'] = $this->db->query($query)->result();


        return $data;
    }
}
