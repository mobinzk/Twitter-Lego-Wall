<?php

    Class Twitter {

        public $api_key             = 'API KEY';
        public $api_secret          = 'API SECRET';
        public $access_token        = 'ACCESS TOCKEN';
        public $access_token_secret = 'ACCESS TOCKEN SECRET';
        public $term                = '#sotoncreatives';

        public function getTweets() {
            $twitter = new TwitterRestApi($this->api_key, $this->api_secret);
            $twitter->setAccessToken($this->access_token, $this->access_token_secret);
            return $twitter->get('/search/tweets.json', 
                                    ['q' => $this->term,
                                    'exclude' => 'retweets']
                                );
        }

    }

?>
