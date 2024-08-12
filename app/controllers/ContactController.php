<?php

use MyApp\Controller;
use MyApp\Database;

class ContactController extends Controller
{
    /**
     * Display the index page.
     */
    public function index()
    {
        $data['title'] = "Contact";
        $this->template('header', $data);
        $this->view('contact', $data);
        $this->template('footer');
    }
}
