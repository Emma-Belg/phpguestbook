<?php


class GuestBook
{
    private $json = "guestentry.json";
    //private $guestArr = [];
    private $title;
    private $date;
    private $content;
    private $name;
    private $jsonData;

    public function get_entries()
    {
        $this->title = $_POST['title'];
        $this->date = date('d/m/Y');
        $this->content = $_POST['content'];
        $this->name = $_POST['name'];

        //array_push($this->guestArr, $this->title, $this->date, $this->content, $this->name);
        $guestArray = ['Title' => $this->title, 'Date' => $this->date, 'Content' => $this->content, 'Name' => $this->name];
        $this->jsonData = file_put_contents($this->json, json_encode($guestArray), LOCK_EX);
    }

/*    public function infoToAssociativeArray() {
        $array = explode(',', $string);
        $new_array = array();
        array_walk($array,'walk', $new_array);

        function walk($val, $key, &$new_array){
            $nums = explode('-',$val);
            $new_array[$nums[0]] = $nums[1];
        }
    }*/

/*    public function entryToJson () {
        //  echo json_encode($this->guestArr);
        //explode($this->title, $this->date, $this->content, $this->name);
        json_encode($this->jsonData);
    }*/

}
