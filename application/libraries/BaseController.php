<?php

defined('BASEPATH') or exit ('No direct script access allowed');


class BaseController extends CI_Controller
{
    protected $global = array ();

    /**
     * This function used to load views
     * @param string $viewName
     * @param null $headerInfo
     * @param null $pageInfo
     * @return void {null} $result : null $result : null
     */
    function loadViews($viewName = "", $headerInfo = NULL, $pageInfo = NULL){

        $this->load->view('base/header', $headerInfo);
        $this->load->view('base/nav');
        $this->load->view($viewName, $pageInfo);
        $this->load->view('base/footer');

    }

}
