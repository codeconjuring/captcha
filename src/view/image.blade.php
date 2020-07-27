<!DOCTYPE html>
<html>
<style>
     *{
		 margin: 0px;
	 }
	.container{
		display: flex;
		justify-content:center;
		align-items: center;
		height: 100vh;
		background: #ddd;
	}
	.dev_captcha {
		padding: 10px;
		-webkit-box-shadow: 0px 0px 16px 0px rgba(0,0,0,0.11);
		-moz-box-shadow: 0px 0px 16px 0px rgba(0,0,0,0.11);
		box-shadow: 0px 0px 16px 0px rgba(0,0,0,0.11);
		background: #f5f5f5;
		display: flex;
		border-radius: 8px;
	}
	.captcha_img img{
		height: 60px;
		width:250px;
		border: 1px solid #ddd;
	}
	.captcha_input input{
		height: 58px;
		width:250px;
		border: 1px solid #ddd;
		font-size: 40px;
		color: #999;
		font-weight: 400;
		padding-left: 10px;
	}
	.captcha_input input:focus {
		border: 1px solid #eee!important;
		outline-offset: 0px !important;
		outline: none !important;
	}
</style>
<body>

	<section>
		<div class="container">
			<div class="dev_captcha">
			<div class="captcha_img">
				<img src="data:image/png;base64,{{codeconjuring\captcha\CaptchaImage::captcha()}}">	
			</div>
			<div class="captcha_input">
				<input type="text" name="captcha_input">
			</div>
			</div>
		</div>
	</section>
</body>
</html>

