<?php 
	
	class Root_Controller extends \PocketFramework\Controller {

		public function __construct(){
			parent::__construct();
		}

		public function index(){

			$data['title']       = '#SotonCreatives';
			$data['description'] = '';
			$data['keywords']    = '';





			$this->view->set('data', $data);
			$this->view->set('view', 'index.php');
			$this->view->load();

		}

		public function get() {
			$convert = new Convert();

			$twitter = new Twitter;
			$tweets = $twitter->getTweets();

			if($_GET['text'] != 'undefined') {
				echo $convert->charachters($_GET['text']);
			} else if($tweets->statuses[0]->text) {
				echo $convert->charachters($tweets->statuses[0]->user->screen_name.': '.$tweets->statuses[0]->text);
			}
		}

	}

?>