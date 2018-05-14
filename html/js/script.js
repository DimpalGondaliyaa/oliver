$(function(){

	baseurl = $("#base_url").val();

	$(".userreegbtn").on("click",function()
	{
		 $(".modal").modal();
		 $("#user_register").modal("open");
	});

	$(".userlogbtn").on("click",function()
	{
		 $(".modal").modal();
		 $("#user_login").modal("open");
	});

	$(".userregg").on("click",function()
	{
			var surpriseform = new FormData($("#userregfrm")[0]);
	        $.ajax({
	        url : baseurl+"home/adduserregdata/",
	          type :"POST",
	          data :surpriseform, 
	          contentType:false,
	          processData:false,
	          success:function(res)
	          {
	           swal("Project Added Successfully.");
	           window.location.reload();
	          }
	        });
	});

	$(".userlogg").on("click",function()
	{
			var data = {
				'email' : $("#email").val(),
				'password' : $("#password").val()				
			};
			$.post(baseurl+"home/userloggdata",{data:data},function(data)
			{
				var check = jQuery.parseJSON(data);

				if(check.status=='ok')
				{
					 swal("Your login Successfully.");
					window.location.href=baseurl+"home";
					/*$('form[name=user_login]').html('');*/
				}
				else if(check.status=='fail')
				{
					swal("Oops!", "Username & Passwords are Wrong!", "warning");
					return false;
				}
				else
				{
					/*alert("Please Check your Login Details.");
					window.location.reload();*/
					swal("Oops!", "Username & Passwords are Wrong!", "warning");
					return false;
					console.log(data);
				}
			});
	});

});