<?php

    Class Twitter {

        public $api_key = 'wWyzn2SsuxX7MUd0jnFLDEL9E';
        public $api_secret = 'S4amGqEyx8pgrivP98IQmB423lq31AUPd5O5DDwRrPslmZtSmY';
        public $access_token = '86920126-RyW0KDWH9TZJKer1erWq0aXSkI7fJx4888iGDbqSR';
        public $access_token_secret = 'sC74kQI9aCo5WRl2gFljf2R5wOFhmnBI3HNJsGOLvG5qv';

        public function getTweets() {
            $twitter = new TwitterRestApi($this->api_key, $this->api_secret);
            $twitter->setAccessToken($this->access_token, $this->access_token_secret);
            return $twitter->get('/search/tweets.json', 
                                    ['q' => '#sotoncreatives',
                                    'exclude' => 'retweets']
                                );
        }

    }

?>
