<?php

use MyApp\Controller;
use MyApp\Database;

class AboutusController extends Controller
{
    /**
     * Display the index page.
     */
    public function index()
    {
        $data['title'] = "About";
        $this->template('header', $data);
        $this->view('about', $data);
        $this->template('footer');
    }
}
