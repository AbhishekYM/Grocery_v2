// Generate random OTP
function generateOTP() {
	var digits = '0123456789';
	var otpLength = 6;
	var otp = '';
	for(let i = 0; i < otpLength; i++) {
		otp += digits[Math.floor(Math.random() * 10)];
	}
	return otp;
}

// Send OTP to mobile
function sendOTP(mobileNumber) {
	// Code to send OTP to mobile number using API or any other method
}

// Verify OTP
function verifyOTP() {
	var enteredOTP = document.getElementById('otp').value;
	if(enteredOTP.length === 6) {
		// Code to verify OTP using API or any other method
		// If OTP is verified successfully
		document.getElementById('result').innerHTML = "OTP verified successfully!";
	} else {
		document.getElementById('result').innerHTML = "Please enter a valid OTP.";
	}
}

// Generate and send OTP to mobile
var otp = generateOTP();
sendOTP('8160646216'); // Replace with actual mobile number
console.log('OTP sent: ' + otp);
