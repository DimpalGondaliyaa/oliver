$(function()
{
		baseurl = $("#base_url").val();
		
	$(".adminlogin").on("click",function()
	{
			var data = {
				'username' : $("#username").val(),
				'password' : $("#password").val()				
			};
			$.post(baseurl+"admin/adminloggdata",{data:data},function(data)
			{
				var check = jQuery.parseJSON(data);

				if(check.status=='ok')
				{
					 swal("Your login Successfully.");
					window.location.href=baseurl+"Admin_contact";
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