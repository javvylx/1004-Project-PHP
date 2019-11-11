function CustomValidation(input) {
	this.invalidities = [];
	this.validityChecks = [];

	//add reference to the input node
	this.inputNode = input;

	//trigger method to attach the listener
	this.registerListener();
}
var fullnameInput = document.getElementsByName('fullname');
//var emailInput = document.getElementsByName('email');
//var passwordRepeatInput = document.getElementsByName('password_repeat');

fullnameInput.CustomValidation = new CustomValidation(fullnameInput);
fullnameInput.CustomValidation.validityChecks = usernameValidityChecks;

//emailInput.CustomValidation = new CustomValidation(passwordInput);
//emailInput.CustomValidation.validityChecks = passwordValidityChecks;


var usernameValidityChecks = [
	{
		isInvalid: function(input) {
			return input.value.length < 3;
		},
		invalidityMessage: 'This input needs to be at least 3 characters',
		element: document.querySelector('label[for="username"] .input-requirements li:nth-child(1)')
	},
	{
		isInvalid: function(input) {
			var illegalCharacters = input.value.match(/[^a-zA-Z0-9]/g);
			return illegalCharacters ? true : false;
		},
		invalidityMessage: 'Only letters and numbers are allowed',
		element: document.querySelector('label[for="username"] .input-requirements li:nth-child(2)')
	}
];
//passwordRepeatInput.CustomValidation = new CustomValidation(passwordRepeatInput);
//passwordRepeatInput.CustomValidation.validityChecks = passwordRepeatValidityChecks;
