<?php 

class Home extends CI_Controller{

    public function index()
    {
        $data['title'] = ' Home | Technuova Safety';
        $this->load->view('index', $data);
    }
    
    public function about()
    {
        $data['title'] = ' Home | About Us';
        $this->load->view('about', $data);
    }
    
    public function how()
    {
        $data['title'] = ' Home | About Us | How It Start';
        $this->load->view('how_it_starts', $data);
    }

    public function tagproxi()
    {
        $data['title'] = ' Home | Products | Tag Based Proximity Warning & Alert System';
        $this->load->view('tag_based_proximity_warning_&_alert_system',$data);
    }
    public function tagrealtime()
    {
        $data['title'] = ' Home | Technology | Tag Based - Real Time 360 Deg Protection for workers';
        $this->load->view('Tag_based_real_time_360_deg_protection_for_worker',$data);
    }
    public function rearblind()
    {
        $data['title'] = ' Home | Technology | Radar Based Rear Blind Spot Protection for workers';
        $this->load->view('radar_based_rear_blind_spot_protection_for_workers',$data);
    }
    public function radarproximity()
    {
        $data['title'] = ' Home | Products | Radar Based Proximity Warning & Alert System';
        $this->load->view('radar_based_proximity_warning_&_alert_system',$data);
    }
    public function manlift()
    {
        $data['title'] = ' Home | Products | Man lift Anti Entrapment Safety System';
        $this->load->view('man_lift_anti_entrapment_safety_system',$data);
    }
    public function applications()
    {
        $data['title'] = ' Home | Application';
        $this->load->view('application',$data);
    }
    public function contact()
    {
        $data['title'] = ' Home | ContactUs';
        $this->load->view('contactus',$data);
    }

    
   
}



?>