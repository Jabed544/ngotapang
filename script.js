function memberlogin(){
	document.getElementById("login_box").style.display="block";
}
function closebtn(){
	document.getElementById("login_box").style.display="none";
}


$('#button').click(function(){
  var password=$('#pass').val();
  $.ajax({
    url:'validation.php',
    data:'passwod='+password,
    
    success:function(data){
      var recived=data;
      if(recived>0){
        window.location.href="profile.php";
      }else{
        $('#error').html("Username and Password incorrect");
      }
    }
  });
});