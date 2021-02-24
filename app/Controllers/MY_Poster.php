<?php
class MY_Poster extends BaseController {
    public function createpost(){
        return view('createpost');
    }

    public function savedata() {
        $this->load->view("createpost");
        if ($this->input->post("save")) {
            $username = $this->input->post("username");
            $title = $this->input->post("title");
            $description = $this->input->post("description");
            $tags = $this->input->post("tags");

            $this->PosterModel->savepost($username, $title, $description, $tags);
            echo "post saved";
        }
    }
}