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

			// $length = strlen($text);

			// switch ($length) {
			// 	case 1:
			// 	case 2:
			// 		$height = '700';
			// 		break;
			// 	case 3:
			// 		$height = '400';
			// 		break;
			// 	case 4:
			// 	case 5:
			// 	case 6:
			// 	case 7:
			// 	case 8:
			// 		$height = '300';
			// 		break;
			// 	case 9:
			// 	case 10:
			// 		$height = '250';
			// 		break;
				
			// 	default:
			// 		$height = '80';
			// 		break;
			// }

			$imgStart = '<img style="height:'.$height.'px" src="application/static/images/alphabet/';
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
									'Z',
									'@'

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
									$imgStart.'Z.jpg'.$imgEnd,
									$imgStart.'@.jpg'.$imgEnd,
								);

			$raplace = str_replace($replaceThis, $replaceWith, $text);

			$text = explode('&nbsp;&nbsp;', $raplace);

			foreach ($text as $value) {
				$tt .= '<div class="word">'.$value.'</div>&nbsp;&nbsp;';
			}

			return $tt;

		}

	}

?>