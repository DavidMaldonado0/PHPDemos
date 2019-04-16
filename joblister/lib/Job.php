<?php

class Job{
    private $db;

    public function ___construct(){
        $this->db = new Database;
    }

    //GET ALL JOBS
    public function getAllJobs(){
        $this->db->query("SELECT jobs.*, categories.name AS cname 
                        FROM jobs INNER JOIN categories 
                        ON jobs.category_id = categories.id ORDER BY post_date DESC");
    
    //Assign Result Set
    $results = $this->db->resultSet();

    return $results;

    }
}

?>
