form=document.getElementById('form');
fname=document.getElementById('fname');
lname=document.getElementById('lname');
email=document.getElementById('email');
password=document.getElementById('password');
confirmation=document.getElementById('confirimation');
let passed = false;
//Show input error message

function showError(input,message){
    formControl=input.parentElement;
   formControl.className='form-control error';
    small=formControl.querySelector('');
   small.innerText=message;
}

function showSuccess(input){
    formControl=input.parentElement;
   formControl.className='form-control success';
}

//Email validation

function isValidEmail(email)
{
    re= /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
   return re.test(String(email).toLowerCase());
}
function isValidFname(fname){
    nam=/^[a-zA-Z]./;
   return nam.test(String(fname));
}
function isValidLname(fname){
    lnam=/^[a-zA-Z]./;
   return nam.test(String(fname));
}
form.addEventListener('submit',function(e){
   e.preventDefault();
   let tester = true;
   if(fname.value===''){
       tester = false;
       showError(fname,'cann\'t be empty');
   }else if(!isValidFname(fname.value)){
        tester = false;
       showError(fname, 'invalid input');
   }
   else{
       showSuccess(fname);
   }
   if(lname.value===''){
        tester = false;
       showError(lname,'cann\'t be empty');
   }else if(!isValidFname(lname.value)){
        tester = false;
       showError(lname, 'invalid input');
   }
   else{
       showSuccess(lname);
   }
   if(email.value===''){
        tester = false;
       showError(email,'Email is required');
   }else if(!isValidEmail(email.value)){
        tester = false;
       showError(email,'Email is not valid');
   }
   else{
       showSuccess(email);
   }

   if(password.value==='' || password.value.length <= 7 || password.value.length > 32){
        tester = false;
       showError(password,'Invalid');
   }
   else{
       showSuccess(password);
   }
   if(confirmation.value==='' || confirmation.value !== password.value){
        tester = false;
       showError(confirmation,'password not match');
   }
   else{
       showSuccess(confirmation);
   }
   if(tester == true){
       window.open("../../../App/views/ideas/wellcome.html");
   }
});
