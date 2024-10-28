<?php

class Home extends controller{
    public function index()
    {
        $data['judul'] = 'Home';
        $data['nama'] = $this->model('User_Model')->getUser();
        $this->view('templates/header' , $data);
        $this->view('home/index',$data);
        $this->view('templates/footer');
    }
}

?>