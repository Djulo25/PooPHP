<?php
class Phenomenon {
    private $id;
    private $name;
    private $description;
    private $origin;
    private $evidence;

    //static public $posts = [];

    public function __construct($id, $name, $description, $origin, $evidence){
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->origin = $origin;
        $this->evidence = $evidence;

        //self::$posts[] = $this;
    }

    public function getId() { return $this->id; }

    public function getname() { return $this->name; }
    public function setname($name) { $this->name = $name; }

    public function getdescription() { return $this->description; }
    public function setdescription($description) { $this->description = $description; }

    public function getorigin() { return $this->origin; }
    public function setorigin($origin) { $this->origin = $origin; }

    public function getevidence() { return $this->evidence; }
    public function setevidence($evidence) { $this->evidence = $evidence; }

}

//test