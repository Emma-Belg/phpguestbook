<?php


class Post
{
    private $json = "guestentry.json";
    private $title;
    private $date;
    private $content;
    private $name;
    private $jsonData;
    private $guestArray;
    private $emptyArr = [];
    private $dataArr = [];

    public function __construct($title, $date, $content, $name)
    {
        $this->title = $title;
        $this->date = $date;
        $this->content = $content;
        $this->name = $name;
    }

    public function dataToArr(){
        array_push($this->dataArr, $this->title, $this->date, $this->content, $this->name);
        return $this->dataArr;
    }

    public function get_entries()
    {
        $this->guestArray = ['Title' => $this->title, 'Date' => $this->date, 'Content' => $this->content, 'Name' => $this->name];
        $this->jsonData = file_put_contents($this->json, json_encode($this->guestArray), LOCK_EX);
    }

    public function showPost(){
        return "Title". $this->title. "Date" .$this->date. "Content" .$this->content . "Name" .$this->name;
    }

/*    public function arrayInArray(){
        $newArr = file_put_contents($this->json, json_encode($this->jsonData), LOCK_EX);
        array_push($this->emptyArr, $this->jsonData, $newArr);
    }*/

}
