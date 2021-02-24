<?php
class PosterModel extends CI_Model {
    function savepost($username, $title, $description, $tags) {
        $query = "INSERT INTO POST (Username, Title, Description, Tag) VALUES ($username, $title, $description, $tags);";
        $this->db->query($query);
    }
}