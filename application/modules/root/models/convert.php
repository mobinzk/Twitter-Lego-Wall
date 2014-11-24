<?php 

	class Convert {
	
		public function __construct(){
			
		}

		public function charachters($text = '') {

			// $text = 'TEST A B C D E F G H I J K L M N O P Q R S # :) ! ? . 123';
			// $text = 'We are enjoeing our time here @sotoncreatives #sotonlego';

			return $this->replace($text);

		}


		private function replace($text) {

			$text = strtoupper($text);

			$imgStart = '<img src="application/static/images/alphabet/';
			$imgEnd   = '" alt="">';

			$replaceThis = array(
									' ',
									'.',
									':)',
									':-)',
									'!',
									'?',
									'#',
									'A',
									'B',
									'C',
									'D',
									'E',
									'F',
									'G',
									'H',
									'I',
									'J',
									'K',
									'L',
									'M',
									'N',
									'O',
									'P',
									'Q',
									'R',
									'S',
									'T',
									'U',
									'V',
									'W',
									'X',
									'Y',
									'Z'

								);
			
			$replaceWith = array(
									'&nbsp;&nbsp;',
									$imgStart.'stop.jpg'.$imgEnd,
									$imgStart.'smile.jpg'.$imgEnd,
									$imgStart.'smile.jpg'.$imgEnd,
									$imgStart.'!.jpg'.$imgEnd,
									$imgStart.'question.jpg'.$imgEnd,
									$imgStart.'hashtag.jpg'.$imgEnd,
									$imgStart.'A.jpg'.$imgEnd,
									$imgStart.'B.jpg'.$imgEnd,
									$imgStart.'C.jpg'.$imgEnd,
									$imgStart.'D.jpg'.$imgEnd,
									$imgStart.'E.jpg'.$imgEnd,
									$imgStart.'F.jpg'.$imgEnd,
									$imgStart.'G.jpg'.$imgEnd,
									$imgStart.'H.jpg'.$imgEnd,
									$imgStart.'I.jpg'.$imgEnd,
									$imgStart.'J.jpg'.$imgEnd,
									$imgStart.'K.jpg'.$imgEnd,
									$imgStart.'L.jpg'.$imgEnd,
									$imgStart.'M.jpg'.$imgEnd,
									$imgStart.'N.jpg'.$imgEnd,
									$imgStart.'O.jpg'.$imgEnd,
									$imgStart.'P.jpg'.$imgEnd,
									$imgStart.'Q.jpg'.$imgEnd,
									$imgStart.'R.jpg'.$imgEnd,
									$imgStart.'S.jpg'.$imgEnd,
									$imgStart.'T.jpg'.$imgEnd,
									$imgStart.'U.jpg'.$imgEnd,
									$imgStart.'V.jpg'.$imgEnd,
									$imgStart.'W.jpg'.$imgEnd,
									$imgStart.'X.jpg'.$imgEnd,
									$imgStart.'Y.jpg'.$imgEnd,
									$imgStart.'Z.jpg'.$imgEnd
								);

			$raplace = str_replace($replaceThis, $replaceWith, $text);

			return $raplace;

		}

	}

?>