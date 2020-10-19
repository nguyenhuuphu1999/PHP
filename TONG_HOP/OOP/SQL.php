<?php
    class database{
        private $database;
        function database()
        {
            $db = new PDO('mysql:host=localhost;dbname=bookstore','root','');
            $db->query('set name utf-8');
        }

        function getsql($sql)
        {
           return $this->sql=$sql;
        }

        function execute()
        {
            $this->statement = $this->db->prepare(getsql($sql));
            $this->statement->execute();
        }


        function fetchAll()
        {
            return $this->statement->fetchAll(PDO::FETCH_OBJ);
        }
    }

    class Course {

        protected $id;
        protected $title;
        protected $description;
    
        public function __construct($pdo,$id) {
            $this->id=$id;
        }
    
        public function getTitle($pdo) {
            $this->title=$pdo->run("SELECT title FROM courses WHERE id=?",[$this->id])->fetchColumn();
            return $this->title;
        }
    
        public function getDescription($pdo) {
            $this->description=$pdo->run("SELECT description FROM courses WHERE id=?",[$this->id])->fetchColumn();
            return $this->description;
        }
    
        public function showDetails($pdo) {
            echo "<h3>".$this->getTitle($pdo)."</h3>".$this->getDescription($pdo);
        }
    
    }
?>