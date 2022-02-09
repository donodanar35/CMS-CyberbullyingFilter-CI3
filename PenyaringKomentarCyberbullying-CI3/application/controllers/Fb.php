<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require('./application/third_party/Facebook/autoload.php');
use Facebook\Facebook;
use Facebook\FacebookApp;
use Facebook\FacebookBatchRequest;
use Facebook\FacebookBatchResponse;
use Facebook\FacebookClient;
use Facebook\FacebookRequest;
use Facebook\FacebookResponse;
use Facebook\polyfills;
use Facebook\SignedRequest;

class Fb extends CI_Controller {
	public function __Contruct(){
		parent::__Contruct();
        $this->load->helper('url');
        $this->load->library(array('ion_auth', 'form_validation','pagination'));
        $this->load->model(array('myModel','ion_auth_model'));
        $this->load->library('Fpdf');
	}
    
	public function index(){
        $app_id = "428404181510096";
        $secret_id = "c484994ae46d25ba4b6ff05bb1ea7dd1";

        $fb = new Facebook([
            'app_id' => $app_id,
            'app_secret' => $secret_id,
            'default_graph_version' => 'v2.9',
            //'default_access_token' => '{access-token}', // optional
        ]);

        try {
            // Get the FacebookGraphNodesGraphUser object for the current user.
            // If you provided a 'default_access_token', the '{access-token}' is optional.
            $response = $fb->get('/me?fields=first_name,last_name,email,id,gender', $_POST['oauth_token']);
        } catch(FacebookExceptionsFacebookResponseException $e) {
            // When Graph returns an error
            echo 'Graph returned an error: ' . $e->getMessage();
            exit;
        } catch(FacebookExceptionsFacebookSDKException $e) {
            // When validation fails or other local issues
            echo 'Facebook SDK returned an error: ' . $e->getMessage();
            exit;
        }

        $me = $response->getGraphUser();
        $fullName = $me['first_name']." ".$me['last_name'];
        $email = $me['email'];
        $id    = $me['id'];
        $ip    = $_SERVER['REMOTE_ADDR'];
        
        var_dump($me);
        //echo "Nama : ".$fullName.", Email : ".$email;
	}

}