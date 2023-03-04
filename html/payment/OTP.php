<!DOCTYPE html>
<html>
<head>
	<title>OTP Verification</title>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
	<h2>OTP Verification</h2>
	<p>Enter the OTP received on your mobile:</p>
	<input type="text" id="otp" maxlength="6">
	<button onclick="verifyOTP()">Verify OTP</button>
	<p id="result"></p>
	<script src="otp.js"></script>
</body>
</html>
