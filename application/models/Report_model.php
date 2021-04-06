<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Report_model extends CI_Model
{
    public function getsubReport()
    {
        $query = "SELECT `report`.*, `user`.`name`, `user`.`email`, `post`.`title` 
                    FROM `report` 
                    JOIN `user`
                    JOIN `post`
                    ON `report`.`id_user` = `user`.`id`
                    AND `report`.`id_post` = `post`.`id`
                    WHERE `report`.`status` = 0
        ";
        return $this->db->query($query)->result_array();
    }

    public function getsubLaporan()
    {
        $query = "SELECT `report`.*, `user`.`name`, `user`.`email`, `post`.`title` 
                    FROM `report` 
                    JOIN `user`
                    JOIN `post`
                    ON `report`.`id_user` = `user`.`id`
                    AND `report`.`id_post` = `post`.`id`
                    WHERE `report`.`status` = 1
        ";
        return $this->db->query($query)->result_array();
    }
}
