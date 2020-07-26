<?php
namespace codeconjuring\captcha;

class CaptchaImage
{
	public static function load()
	{
		$view = view('captcha::image');

		$rendered_view = $view->render();

		return $rendered_view;
	}

	public static function captcha()
	{

		$characters = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','1','2','3','4','5','6','7','8','9','0'];

		$first_index = rand(1,36);
		$second_index = rand(1,36);
		$third_index = rand(1,36);
		$fourth_index = rand(1,36);
		$fifth_index = rand(1,36);

		$captcha_string = $characters[$first_index-1].$characters[$second_index-1].$characters[$third_index-1].$characters[$fourth_index-1].$characters[$fifth_index-1];

		session()->put('conjurecaptcha299300',$captcha_string);

		$dest = imagecreatefrompng(__DIR__.'/assets/images/back2.png');

		$src = imagecreatefrompng(__DIR__.'/assets/images/'.$first_index.'.png');
		$src1 = imagecreatefrompng(__DIR__.'/assets/images/'.$second_index.'.png');
		$src2 = imagecreatefrompng(__DIR__.'/assets/images/'.$third_index.'.png');
		$src3 = imagecreatefrompng(__DIR__.'/assets/images/'.$fourth_index.'.png');
		$src4 = imagecreatefrompng(__DIR__.'/assets/images/'.$fifth_index.'.png');

		imagesavealpha($dest, false);

		imagecopymerge($dest, $src, 10, 10, 10, 10, 256, 256, 50);
		imagecopymerge($dest, $src1, 278, 10, 10, 10, 256, 256, 50);
		imagecopymerge($dest, $src2, 556, 10, 10, 10, 256, 256, 50);
		imagecopymerge($dest, $src3, 834, 10, 10, 10, 256, 256, 50);
		imagecopymerge($dest, $src4, 1066, 10, 10, 10, 256, 256, 50);

		ob_start();
		imagepng($dest);
		$output = ob_get_contents();
		$base64Output = base64_encode($output);
		ob_end_clean();
		imagedestroy($dest);
		imagedestroy($src);

		return $base64Output;
	}

	public static function match($input_string)
	{
		return (session()->get('conjurecaptcha299300') == $input_string) ? '1' : '0';
	}
}