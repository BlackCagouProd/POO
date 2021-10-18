<?php



class rental extends database{
    
    const TABLE_NAME='rental';

   public $_rental_id;
   public $_customer_id;
   
   protected $_last_update;

    public function __construct($rental_id,$customer_id)
    {
        $this->setrental($rental_id);
        $this->setCustomer($customer_id);
        
    }
    // setter
    public function setrental($rental_id) {
        $this->rental_id = $rental_id;
        return $rental_id;
    }

    public function setCustomer($customer_id) {
        $this->customer_id = $customer_id;
        return $customer_id;
    }

   
    //getter
    public function getrental() {
        return $this->rental_id;
    }

    public function getCustomer() {
        return $this->customer_id;
    }


    public  function findAll() {
        $data = database::q('SELECT r.rental_id,c.first_name,c.last_name FROM rental as r
        left join customer as c
        on r.rental_id = c.customer_id');
        return $data;
    }
}
