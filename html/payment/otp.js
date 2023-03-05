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
	

// try {
// 	let otp = generateOTP();
// 	// Code to send OTP to mobile number using API or any other method
// 	let request = fetch('https://api.twilio.com/2010-04-01/Accounts/AC4f9a7304a9ef50736449b62a14c957b3/Messages.json', {
//     method: 'POST',
//     headers: {
//         'Authorization': 'Basic ' + btoa('AC4f9a7304a9ef50736449b62a14c957b3:2fb4187b6ffb5e15b93cfecc2736366e')
//     },
//     body: new URLSearchParams({
//         'To': '+917041089989',
//         'MessagingServiceSid': 'MG134cd6143ccbdeb0c63309fdc1f5be99',
//         'Body': 'opt: '+otp
//     })
// });

// request.then(res => res.json());
// request.then(resp => console.log(resp));
//   } catch (error) {
// 	// TypeError: Failed to fetch
// 	console.log('There was an error', error);
//   }

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
