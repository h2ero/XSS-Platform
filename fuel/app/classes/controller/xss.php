<?php

class Controller_Xss extends Controller_Template
{

    public $template = 'default';

    public function before()
    {
        parent::before();
        $this->template->content='';
    }

    public function action_index()
    {

    }

    public function action_js()
    {

    }
}

