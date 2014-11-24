<?php 
	
	class Root_Controller extends \PocketFramework\Controller {

		public function __construct(){
			parent::__construct();
		}

		public function index(){

			$data['title']       = '#SotonCreatives';
			$data['description'] = '';
			$data['keywords']    = '';

			$convert = new Convert();

			$twitter = new Twitter;
			$tweets = $twitter->getTweets();

			// echo $tweets->statuses[0]->text;
			
			if($tweets->statuses[0]->text) {
				$data['text'] = $convert->charachters($tweets->statuses[0]->text);
			}





			$this->view->set('data', $data);
			$this->view->set('view', 'index.php');
			$this->view->load();

		}

	}

?>