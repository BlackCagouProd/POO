<?php

class film extends database{

    const TABLE_NAME='film';

    public $_film_id ;
    public $_title;
    public $_description;
    public $_release_year;
    public $_language_id;
    public $_original_language_id ;
    public $_rental_duration;
    public $_rental_rate;
    public $_length;
    public $_replacement_cost;
    public $_special_features;
    private $_last_update;

    


    public function __construct($film_id,$title,$description,$release_year,$length,$language_id,$original_language_id,$rental_duration,$replacement_cost,$special_features,$last_update)
    {
        
        $this->setFilm($film_id);
        $this->settitle($title);
        $this->setdescription($description);
        $this->setrelease_years($release_year);
        $this->setlanguage_id($language_id);
        $this->setoriginal_language_id($original_language_id);
        $this->setrental_duration($rental_duration);
        $this->setlenght($length);
        $this->setreplacement_cost($replacement_cost);
        $this->setspecial_features($special_features);
        $this->setlast_update($last_update);
    }

    //setter
    public function setfilm($film_id) {
        $this->film_id = $film_id;
        return $film_id;
    }

    public function settitle($title) {
        $this->title = $title;
        return $title;
    }

    public function setdescription($description) {
        $this->description = $description;
        return $description;
    }

    public function setrelease_years($release_year) {
        $this->release_year = $release_year;
        return $release_year;
    }

    public function setlanguage_id($language_id) {
        $this->language_id = $language_id;
        return $language_id;
    }

    public function setoriginal_language_id($original_language_id) {
        $this->original_language_id = $original_language_id;
        return $original_language_id;
    }

    public function setrental_duration($rental_duration) {
        $this->rental_duration = $rental_duration;
        return $rental_duration;
    }

    public function setlenght($lenght) {
        $this->lenght = $lenght;
        return $lenght;
    }

    public function setreplacement_cost($replacement_cost) {
        $this->replacement_cost = $replacement_cost;
        return $replacement_cost;
    }

    public function setspecial_features($special_features) {
        $this->special_features = $special_features;
        return $special_features;
    }

    public function setlast_update($last_update) {
        $this->last_update = $last_update;
        return $last_update;
    }

    //getter
    public function getfilm() {
        return $this->film_id;
    }

    public function gettitle() {
        return $this->title;
    }

    public function getdescription() {
        return $this->description;
    }

    public function getrelease_years() {
        return $this->release_years;
    }

    public function getlanguage_id() {
        return $this->language_id;
    }

    public function getoriginal_language_id() {
        return $this->original_language_id;
    }

    public function getrental_duration() {
        return $this->rental_duration;
    }

    public function getlenght() {
        return $this->lenght;
    }

    public function getreplacement_cost() {
        return $this->replacement_cost;
    }

    public function getspecial_features() {
        return $this->special_features;
    }

    public function getlast_update() {
        return $this->last_update;
    }
    

    public  function findAll() {
        $data = parent::q('SELECT * FROM film');
        return $data;
    }

    public function findOne($film_id) {
        $film_id = $_GET['film_id'];
        $result = parent::one('SELECT * FROM film WHERE film_id ='.$film_id);
        return $result;
        
    }
    

    public  function search() {
        $films=[];
        if (!empty($_POST)){
            $bdd = parent::getPdo();
            $response = $bdd->prepare("SELECT * FROM film WHERE title LIKE title");
            $response->execute(['title' => '%'.$_GET['title'].'%',]);
            $films = $response->fetchAll(PDO::FETCH_ASSOC);
            return $films;
        }
        
    
    }
}