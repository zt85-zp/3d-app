<?php

use MyApp\Controller;
use MyApp\Database;

class ModelsController extends Controller
{
    /**
     * Display the index page.
     */

    public function index()
    {
        $this->redirect(LINKURL.'/models/cola1');
    }

    public function cola1()
    {
        $data['title'] = "Models";
        $data['subtitle'] = 'Cola1';
        $data['model'] = "cola1.x3d";
        $this->template('header', $data);
        $this->view('model', $data);
        $this->template('footer');
    }

    public function cola2()
    {
        $data['title'] = "Models";
        $data['subtitle'] = 'Cola2';
        $data['model'] = "cola2.x3d";
        $this->template('header', $data);
        $this->view('model', $data);
        $this->template('footer');
    }

    public function cola3()
    {
        $data['title'] = "Models";
        $data['subtitle'] = 'Cola3';
        $data['model'] = "cola3.x3d";
        $this->template('header', $data);
        $this->view('model', $data);
        $this->template('footer');
    }

    public function cola4()
    {
        $data['title'] = "Models";
        $data['subtitle'] = 'Cola4';
        $data['model'] = "cola4.x3d";
        $this->template('header', $data);
        $this->view('model', $data);
        $this->template('footer');
    }

    public function cola5()
    {
        $data['title'] = "Models";
        $data['subtitle'] = 'Cola5';
        $data['model'] = "cola5.x3d";
        $this->template('header', $data);
        $this->view('model', $data);
        $this->template('footer');
    }

    public function cola6()
    {
        $data['title'] = "Models";
        $data['subtitle'] = 'Cola6';
        $data['model'] = "cola6.x3d";
        $this->template('header', $data);
        $this->view('model', $data);
        $this->template('footer');
    }

    public function juice()
    {
        $data['title'] = "Models";
        $data['subtitle'] = 'Juice';
        $data['model'] = "juice.x3d";
        $this->template('header', $data);
        $this->view('model', $data);
        $this->template('footer');
    }

    public function sprite()
    {
        $data['title'] = "Models";
        $data['subtitle'] = 'Sprite';
        $data['model'] = "juice.x3d";
        $this->template('header', $data);
        $this->view('model', $data);
        $this->template('footer');
    }

    public function water()
    {
        $data['title'] = "Models";
        $data['subtitle'] = 'Water';
        $data['model'] = "water.x3d";
        $this->template('header', $data);
        $this->view('model', $data);
        $this->template('footer');
    }

    public function pepsi()
    {
        $data['title'] = "Models";
        $data['subtitle'] = 'Pepsi';
        $data['model'] = "pepsi.x3d";
        $this->template('header', $data);
        $this->view('model', $data);
        $this->template('footer');
    }


    public function soda()
    {
        $data['title'] = "Models";
        $data['subtitle'] = 'Soda';
        $data['model'] = "soda.x3d";
        $this->template('header', $data);
        $this->view('model', $data);
        $this->template('footer');
    }

    public function fanta()
    {
        $data['title'] = "Models";
        $data['subtitle'] = 'Fanta';
        $data['model'] = "fanta.x3d";
        $this->template('header', $data);
        $this->view('model', $data);
        $this->template('footer');
    }
}
