<?php


class GuestBook
{
    public $allPosts =[];

    public function readData()
    {
        // put json into allposts
        $temparr = json_decode(file_get_contents("guestentry.json"), true);
        var_dump($temparr);
        //This foreach is wrong somehow
        foreach ($temparr as $item){
            $temp = new Post($item['title'], $item['date'], $item['content'], $item['name']);
            array_push($this->allPosts, $temp);
        }
        var_dump($this->allPosts);
    }

    public function writeData(Post $tempPost)
    {
        //write $allposts to the json
        array_push($this->allPosts, $tempPost);
        var_dump($this->allPosts);
        file_put_contents("guestentry.json", json_encode($this->allPosts), LOCK_EX);
        var_dump($this->allPosts);
    }

    public function displayData()
    {
        foreach ($this->allPosts as $post) {
            echo $post->showPost()."<br>";
        }
    }

    public function getPosts(){
        (new Post)->get_entries();

    }
/*    public function print_data(Post $tempPost){
        implode(",", $tempPost->dataToArr());
        echo $tempPost->dataToArr();
    }*/




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
