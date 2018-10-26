$(function(){

    $('#user-email').on('blur',function(){
		if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(this.value))
		 {
			 return true;
		 }
			 alert("You have entered an invalid email address!");
			 return false;
    })
	$('#sname').on('keypress',function(e){
		if(/[^a-zA-Z ]/.test(e.key)){
			//console.log(e.key)
		alert("Name is invalid!Only alphabet and spaces is allowed.");
		this.value="";
		$(this).focus();
		return false;
		}
	})
    





});