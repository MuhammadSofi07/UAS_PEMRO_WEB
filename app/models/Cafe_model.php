<?php

class Cafe_model {
    private $table = 'cafe';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllCafe()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getCafeById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . 'WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

}