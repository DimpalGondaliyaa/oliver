$(function()
{
	baseurl = $("#base_url").val();
		

	$(".btn-search").on("click",function()
	{

		var sellArticleForm = new FormData($("#serch")[0]);
	        $.ajax({
	        url : baseurl+"home/serchwixidata",
	          type :"POST",
	          data :sellArticleForm, 
	          contentType:false,
	          processData:false,
	          success:function(res)
	          {
	           swal("Send Successfully.");
	           /*window.location.reload();*/
	           window.location.href=baseurl+'SearchResult';
	          }
	        });

	});


			/*var data = {
				'wixicode' : $("#wixicode").val()
								
			};
			$.post(baseurl+"SearchResult/serchwixidata",{data:data},function(data)
			{
				var check = jQuery.parseJSON(data);

				if(check.status=='ok')
				{
					 swal("Your login Successfully.");
					window.location.href=baseurl+"SearchResult";*/
					/*$('form[name=user_login]').html('');*/
				/*}
				else if(check.status=='fail')
				{
					swal("Oops!", "Username & Passwords are Wrong!", "warning");
					return false;
				}
				else
				{*/
					/*alert("Please Check your Login Details.");
					window.location.reload();*/
				/*	swal("Oops!", "Username & Passwords are Wrong!", "warning");
					return false;
					console.log(data);
				}
			});*/
	
});