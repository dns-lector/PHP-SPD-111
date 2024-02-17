document.addEventListener( 'DOMContentLoaded', () => {
	// шукаємо кнопку реєстрації, якщо знаходимо - додаємо обробник
	const signupButton = document.getElementById("signup-button");
	if(signupButton) { signupButton.onclick = signupButtonClick; }
});

function signupButtonClick(e) {
	// шукаємо форму - батьківській елемен кнопки (e.target)
	const signupForm = e.target.closest('form') ;
	if( ! signupForm ) {
		throw "Signup form not found" ;
	}
	// всередині форми signupForm знаходимо елементи
	const nameInput = signupForm.querySelector('input[name="user-name"]');
	if( ! nameInput ) { throw "nameInput not found" ; }
	const emailInput = signupForm.querySelector('input[name="user-email"]');
	if( ! emailInput ) { throw "emailInput not found" ; }
	const passwordInput = signupForm.querySelector('input[name="user-password"]');
	if( ! passwordInput ) { throw "passwordInput not found" ; }
	const repeatInput = signupForm.querySelector('input[name="user-repeat"]');
	if( ! repeatInput ) { throw "repeatInput not found" ; }
	const avatarInput = signupForm.querySelector('input[name="user-avatar"]');
	if( ! avatarInput ) { throw "avatarInput not found" ; }
	
	/// Валідація даних
	let isFormValid = true ;
	
	if( nameInput.value == "" ) {
		nameInput.classList.remove("valid");
		nameInput.classList.add("invalid");
		isFormValid = false ;
	}
	else {
		nameInput.classList.remove("invalid");
		nameInput.classList.add("valid");
	}
	
	if( ! isFormValid ) return ;
	/// кінець валідації
	
	// формуємо дані для передачі на бекенд
	const formData = new FormData() ;
	formData.append( "user-name", nameInput.value ) ;
	formData.append( "user-email", emailInput.value ) ;
	formData.append( "user-password", passwordInput.value ) ;
	if( avatarInput.files.length > 0 ) {
		formData.append( "user-avatar", avatarInput.files[0] ) ;
	}
	
	// передаємо - формуємо запит
	fetch( "/auth", { method: 'POST', body: formData } )
	.then( r => r.json() )
	.then( console.log ) ;
}
