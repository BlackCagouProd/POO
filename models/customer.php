<?php



class customer extends database{
    
    const TABLE_NAME='customer';

   public $_customer_id;
   public $_first_name;
   public $_last_name;
   public $_email;
   public $_active;
   protected $_last_update;

    public function __construct($customer_id,$first_name,$last_name,$email,$active)
    {
        $this->setcustomer($customer_id);
        $this->setFname($first_name);
        $this->setLname($last_name);
        $this->setEmail($email);
        $this->setActive($active);
    }
    // setter
    public function setcustomer($customer_id) {
        $this->customer_id = $customer_id;
        return $customer_id;
    }

    public function setFname($first_name) {
        $this->first_name = $first_name;
        return $first_name;
    }

    public function setLname($last_name) {
        $this->last_name= $last_name;
        return $last_name;
    }
    public function setEmail($email) {
        $this->email= $email;
        return $email;
    }
    public function setActive($active) {
        $this->active= $active;
        return $active;
    }
    //getter
    public function getcustomer() {
        return $this->customer_id;
    }

    public function getFname() {
        return $this->first_name;
    }

    public function getLname() {
        return $this->last_name;
    }
    public function getEmail() {
        return $this->email;
    }
    public function getActive() {
        return $this->active;
    }


    public  function findAll() {
        $data = database::q('SELECT * FROM customer ');
        return $data;
    }
}
