<!DOCTYPE html>
<html>
<head>
	<title>Image</title>
</head>
<body>
	<table style="border:1px solid;">
		<tbody>
			<tr>
				<td>
					<img style="height: 50px;width:200px;border:1px solid;margin:0px;" src="data:image/png;base64,{{codeconjuring\captcha\CaptchaImage::captcha()}}">
				</td>
				<td>
					<input style="margin:0px;height: 45px;width:200px;font-size:45px;" type="text" name="captcha_input">
				</td>
			</tr>	
		</tbody>	
	</table>
</body>
</html>