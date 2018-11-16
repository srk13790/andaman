<?php

class Admin_model extends BI_Model{
//-----------Home Page----------------------------------------------
    public function getContent() {
        //print_r($data);exit;
        $query=$this->db->get('home_about_content');
        $data=$query->result_array();
        return $data;
    }
    
    public function update_content($data) {
       $content_id=$data['home_about_content_id'];
       $content_id = $this->encrypt->decode($content_id);
       $title=$data['title'];
       $description=$data['description'];
        
        $query=$this->db->query("UPDATE `home_about_content` SET `title`='$title',`description`='$description' WHERE `home_about_content_id`='$content_id'");
        //print($query);
    }
    
    
    public function getanimation() {
        //print_r($data);exit;
        $query=$this->db->get('animation');
        $data=$query->result_array();
        return $data;
    }
    
    public function addanimation($data) {
        //print_r($data);exit;
        $query=$this->db->insert('animation', $data);
        //print($query);
    }
    
    public function update_animation($data) {
       $animation_id=$data['animation_id'];
       $category=$data['category'];
       $video_heading=$data['video_heading'];
       $url=$data['url'];
       $source=$data['source'];
        
        $query=$this->db->query("UPDATE `animation` SET `category`='$category',`video_heading`='$video_heading',`url`='$url',`source`='$source' WHERE `animation_id`='$animation_id'");
        //print($query);
    }
    
    public function deleteanimation($data) {
        $animation_id=$data['animation_id'];
        $animation_id = $this->encrypt->decode($animation_id);
        $this->db->where('animation_id', $animation_id);
        $this->db->delete('animation');
    }
    
    public function getbooks() {
        //print_r($data);exit;
        $query=$this->db->get('books');
        $data=$query->result_array();
        return $data;
    }
    //-----------------------------------------Carousel---------------------
    public function getCarousel() {
        //print_r($data);exit;
        $query=$this->db->get('carousel');
        $data=$query->result_array();
        return $data;
    }
    
    public function add_carousel($data) {
        //print_r($data);exit;
        $query=$this->db->insert('carousel', $data);
        //print($query);
    }
    
    public function update_carousel($data) {
       $carousel_id = $this->encrypt->decode($data['carousel_id']);
       $title=$data['title'];
       
       $description=$data['description'];
       if(!isset($data['image_path'])){
        
        $query=$this->db->query("UPDATE `carousel` SET `title`='$title',`description`='$description' WHERE carousel_id`='$carousel_id'");
       }else{
        $image_path=$data['image_path'];
        $query=$this->db->query("UPDATE `carousel` SET `title`='$title',`description`='$description', image_path='$image_path' WHERE carousel_id ='$carousel_id'");   
       }//print($query);
    }
    
    public function delete_carousel($data) {
        $carousel_id = $this->encrypt->decode($data['carousel_id']);
        $this->db->where('carousel_id', $carousel_id);
        $this->db->delete('carousel');
    }

    //-----------Our Tour Title----------------------------------------------
    
    public function getTour() {
        //print_r($data);exit;
        $query=$this->db->get('ourtour');
        $data=$query->result_array();
        return $data;
    }

    public function update_our_tour($data) {
       $content=$data['content'];
       
        $query=$this->db->query("UPDATE `ourtour` SET `content`='$content'");
        //print($query);
    }

    public function getTourDetails() {
        //print_r($data);exit;
        $query=$this->db->get('ourTourDetails');
        $data=$query->result_array();
        return $data;
    }

    public function update_otd($data) {
       $otd_id = $this->encrypt->decode($data['otd_id']);
       $title=$data['title'];
       if(!isset($data['image_path'])){
        
        $query=$this->db->query("UPDATE `ourtourdetails` SET `title`='$title' WHERE otd_id`='$otd_id'");
       }else{
        $image_path=$data['image_path'];
        $query=$this->db->query("UPDATE `ourtourdetails` SET `title`='$title', image_path='$image_path' WHERE otd_id ='$otd_id'");   
       }//print($query);
    }

    //------------------------------About Andaman--------------------------

    public function getAboutAndaman() {
        //print_r($data);exit;
        $query=$this->db->get('about_andaman');
        $data=$query->result_array();
        return $data;
    }

    public function update_aa($data) {
       $aa_id = $this->encrypt->decode($data['aa_id']);
       $content=$data['content'];
       if(!isset($data['image_path'])){
        
        $query=$this->db->query("UPDATE `about_andaman` SET `content`='$content' WHERE aa_id`='$aa_id'");
       }else{
        $image_path=$data['image_path'];
        $query=$this->db->query("UPDATE `about_andaman` SET `content`='$content', image_path='$image_path' WHERE aa_id ='$aa_id'");   
       }//print($query);
    }

    //----------------Activities-------------------------
    public function getActivities() {
        //print_r($data);exit;
        $query=$this->db->get('home_activities');
        $data=$query->result_array();
        return $data;
    }

    public function update_activities($data) {
       $title=$data['title'];
       
        $query=$this->db->query("UPDATE `home_activities` SET `title`='$title'");
        //print($query);
    }

    //------------------------------About Andaman--------------------------

    public function getTripPlanner() {
        //print_r($data);exit;
        $query=$this->db->get('home_trip_planner');
        $data=$query->result_array();
        return $data;
    }

    public function update_tp($data) {
       $tp_id = $this->encrypt->decode($data['aa_id']);
       $content=$data['content'];
       if(!isset($data['image_path'])){
        
        $query=$this->db->query("UPDATE `home_trip_planner` SET `content`='$content' WHERE tp_id`='$tp_id'");
       }else{
        $image_path=$data['image_path'];
        $query=$this->db->query("UPDATE `home_trip_planner` SET `content`='$content', image_path='$image_path' WHERE tp_id ='$tp_id'");   
       }//print($query);
    }

        //-----------Our Events Title----------------------------------------------
    
    public function getEvents() {
        //print_r($data);exit;
        $query=$this->db->get('ourevents');
        $data=$query->result_array();
        return $data;
    }

    public function update_our_events($data) {
       $content=$data['content'];
       
        $query=$this->db->query("UPDATE `ourevents` SET `content`='$content'");
        //print($query);
    }

    public function getEventsDetails() {
        //print_r($data);exit;
        $query=$this->db->get('oureventsdetails');
        $data=$query->result_array();
        return $data;
    }

    public function update_oed($data) {
       $oed_id = $this->encrypt->decode($data['oed_id']);
       $title=$data['title'];
       if(!isset($data['image_path'])){
        
        $query=$this->db->query("UPDATE `oureventsdetails` SET `title`='$title' WHERE oed_id='$oed_id'");
       }else{
        $image_path=$data['image_path'];
        $query=$this->db->query("UPDATE `oureventsdetails` SET `title`='$title', image_path='$image_path' WHERE oed_id ='$oed_id'");   
       }//print($query);
    }

//---------------------About Us------------------------------------------------

    public function getaboutusimages() {
        //print_r($data);exit;
        $query=$this->db->get('about_us_images');
        $data=$query->result_array();
        return $data;
    }

    public function getaboutuscontent() {
        //print_r($data);exit;
        $query=$this->db->get('about_us_content');
        $data=$query->result_array();
        return $data;
    }

    public function update_aboutus_images($data) {
       $image_id = $this->encrypt->decode($data['image_id']);
       $content=$data['description'];
       if(!isset($data['image_path'])){
        
        $query=$this->db->query("UPDATE `about_us_images` SET `description`='$content' WHERE image_id='$image_id'");
       }else{
        $image_path=$data['image_path'];
        $query=$this->db->query("UPDATE `about_us_images` SET `description`='$content', image_path='$image_path' WHERE image_id ='$image_id'");   
       }//print($query);
    }

    public function add_about_us_content($data) {
        //print_r($data);exit;
        $query=$this->db->insert('about_us_content', $data);
        //print($query);
    }

    public function update_about_us_content($data) {
       $content_id=$data['content_id'];
       $content_id = $this->encrypt->decode($content_id);
       $title=$data['title'];
       $description=$data['description'];
        
        $query=$this->db->query("UPDATE `about_us_content` SET `title`='$title',`description`='$description' WHERE `content_id`='$content_id'");
        //print($query);
    }
    //------------FAQ-------------------------
    public function getfaq() {
        $query=$this->db->get('faq');
        $data=$query->result_array();
        return $data;
    }

    public function add_faq($data) {
        //print_r($data);exit;
        $query=$this->db->insert('faq', $data);
        //print($query);
    }

    public function update_faq($data) {
       $faq_id=$data['faq_id'];
       $faq_id = $this->encrypt->decode($faq_id);
       $question=$data['question'];
       $answer=$data['answer'];
        
        $query=$this->db->query("UPDATE `faq` SET `question`='$question',`answer`='$answer' WHERE `faq_id`='$faq_id'");
    }

    public function delete_faq($data) {
        $faq_id=$data['faq_id'];
        $faq_id = $this->encrypt->decode($faq_id);
        $this->db->where('faq_id', $faq_id);
        $this->db->delete('faq');
    }
    //-----------About Andaman--------------------

    public function getaboutandamanimages() {
        //print_r($data);exit;
        $query=$this->db->get('about_andaman_images');
        $data=$query->result_array();
        return $data;
    }

    public function getaboutandamancontent() {
        //print_r($data);exit;
        $query=$this->db->get('about_us_content');
        $data=$query->result_array();
        return $data;
    }

    public function add_about_andaman_content($data) {
        //print_r($data);exit;
        $query=$this->db->insert('about_andaman_content', $data);
        //print($query);
    }

    public function update_aboutandaman_images($data) {
       $image_id = $this->encrypt->decode($data['image_id']);
       $content=$data['description'];
       if(!isset($data['image_path'])){
        
        $query=$this->db->query("UPDATE `about_andaman_images` SET `description`='$content' WHERE image_id='$image_id'");
       }else{
        $image_path=$data['image_path'];
        $query=$this->db->query("UPDATE `about_andaman_images` SET `description`='$content', image_path='$image_path' WHERE image_id ='$image_id'");   
       }//print($query);
    }

    public function update_about_andaman_content($data) {
       $content_id=$data['content_id'];
       $content_id = $this->encrypt->decode($content_id);
       $title=$data['title'];
       $description=$data['description'];
        
        $query=$this->db->query("UPDATE `about_andaman_content` SET `title`='$title',`description`='$description' WHERE `content_id`='$content_id'");
        //print($query);
    }

    //-----------Events--------------------

    public function geteventimages() {
        //print_r($data);exit;
        $query=$this->db->get('events_images');
        $data=$query->result_array();
        return $data;
    }

    public function geteventcontent() {
        //print_r($data);exit;
        $query=$this->db->get('events_content');
        $data=$query->result_array();
        return $data;
    }

    public function add_events_content($data) {
        //print_r($data);exit;
        $query=$this->db->insert('events_content', $data);
        //print($query);
    }

    public function update_events_images($data) {
       $image_id = $this->encrypt->decode($data['image_id']);
       $content=$data['description'];
       if(!isset($data['image_path'])){
        
        $query=$this->db->query("UPDATE `events_images` SET `description`='$content' WHERE image_id='$image_id'");
       }else{
        $image_path=$data['image_path'];
        $query=$this->db->query("UPDATE `events_images` SET `description`='$content', image_path='$image_path' WHERE image_id ='$image_id'");   
       }//print($query);
    }

    public function update_events_content($data) {
       $content_id=$data['content_id'];
       $content_id = $this->encrypt->decode($content_id);
       $title=$data['title'];
       $description=$data['description'];
        
        $query=$this->db->query("UPDATE `events_content` SET `title`='$title',`description`='$description' WHERE `content_id`='$content_id'");
        //print($query);
    }
}