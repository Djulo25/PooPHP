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

    public function getName() { return $this->name; }
    public function setName($name) { $this->name = $name; }

    public function getDescription() { return $this->description; }
    public function setDescription($description) { $this->description = $description; }

    public function getOrigin() { return $this->origin; }
    public function setOrigin($origin) { $this->origin = $origin; }

    public function getEvidence() { return $this->evidence; }
    public function setEvidence($evidence) { $this->evidence = $evidence; }

}

//test