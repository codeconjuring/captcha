<!DOCTYPE html>
<html>
<link rel="stylesheet" href="{{asset('vendor/codeconjuring/captcha/src/assets/css/bootstrap.css')}}">
<style>
     *{
		 margin: 0px;
	 }
	 .captchatext{
		font-size: 3rem;
	 }
</style>
<body>
	<div class="bg-gray mt-2">
		<div class="row">
			<div class="col-md-6 col-sm-6 col-6  pb-0">
				<img class="img-responsive" width="100%" height="80%" src="data:image/png;base64,{{codeconjuring\captcha\CaptchaImage::captcha()}}">
			</div>
			<div class="col-md-6 col-sm-6 col-6 row  pb-0">
				<input class="form-control captchatext" style="height: 80%;" type="text" name="captcha_input">
			</div>
		</div>
	</div>
</body>
</html>