<?php
class Controller_About extends Controller
{
    function __construct()
    {
        $this->model = new Model_About();
        $this->view = new View();
    }
    function action_default()
    {
        $data = $this->model->get_data();
        $this->view->generate('about_view.php', $data);
    }
}
