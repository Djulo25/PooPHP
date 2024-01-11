<?php
class PostII {
    private $id;
    private $name;
    private $description;
    private $origin;
    private $evidence;
    private $date;

    //static public $posts = [];

    public function __construct($id, $name, $description, $origin, $evidence, $date){
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->origin = $origin;
        $this->evidence = $evidence;
        $this->date = $date;

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
    public function getdate() { return $this->date; }
    public function setdate($date) { $this->date = $date; }
}