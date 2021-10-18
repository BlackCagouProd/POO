<?php



class actor extends database{
    
    const TABLE_NAME='actor';

   public $_actor_id;
   public $_first_name;
   public $_last_name;
   protected $_last_update;

    public function __construct($actor_id,$first_name,$last_name)
    {
        $this->setActor($actor_id);
        $this->setFname($first_name);
        $this->setLname($last_name);
    }
    // setter
    public function setActor($actor_id) {
        $this->actor_id = $actor_id;
        return $actor_id;
    }

    public function setFname($first_name) {
        $this->first_name = $first_name;
        return $first_name;
    }

    public function setLname($last_name) {
        $this->last_name= $last_name;
        return $last_name;
    }
    //getter
    public function getActor() {
        return $this->actor_id;
    }

    public function getFname() {
        return $this->first_name;
    }

    public function getLname() {
        return $this->last_name;
    }


    public  function findAll() {
        $data = database::q('SELECT * FROM actor');
        return $data;
    }
}
