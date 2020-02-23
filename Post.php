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
    private $dataArr = [];

    //write a function to post the private variables so that they can be accessed and posted to the json,
    // this is the reason that the json file collects empty stuff currently but you can see it while it is being debugged

    public function __construct($title, $date, $content, $name)
    {
        $this->title = $title;
        $this->date = $date;
        $this->content = $content;
        $this->name = $name;
    }

/*    public function setPosts() {
        $this->title = $_POST['title'];
        $this->date = date("d/m/Y");
        $this->content = $_POST['content'];
        $this->name = $_POST['name'];
        array_push($this->dataArr, $this->title, $this->date, $this->content, $this->name);
        return $this->dataArr;
    }*/

/*    public function dataToArr(){
        array_push($this->dataArr, $this->title, $this->date, $this->content, $this->name);
        return $this->dataArr;
    }*/

    public function get_entries()
    {
        $this->guestArray = ['title' => $this->title, 'date' => $this->date, 'content' => $this->content, 'name' => $this->name];
        $this->jsonData = file_put_contents($this->json, json_encode($this->guestArray), LOCK_EX);
        var_dump($this->guestArray);
        return $this->guestArray;
    }

    public function showPost(){
        return "Title: ". $this->title. "<br> Date: " .$this->date. "<br> Content: " .$this->content . "<br> Name: " .$this->name;
    }

/*    public function arrayInArray(){
        $newArr = file_put_contents($this->json, json_encode($this->jsonData), LOCK_EX);
        array_push($this->emptyArr, $this->jsonData, $newArr);
    }*/

}
