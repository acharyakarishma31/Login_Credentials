const SignUpButton= document.getElementById('signupbtn');
const SignInButton=document.getElementById('signinbtn');

const signInForm=document.getElementById('SignIn');
const signUpForm=document.getElementById('SignUp');

SignUpButton.addEventListener('click',function(){
    signInForm.style.display="none";
    signUpForm.style.display="block";
})
SignInButton.addEventListener('click',function(){
    signInForm.style.display="block";
    signUpForm.style.display="none";
})