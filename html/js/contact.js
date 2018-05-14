$(function()
{
	$(".sendbtnn").on("click",function()
	{
			var contactfrm = new FormData($("#contactfrm")[0]);
	        $.ajax({
	        url : baseurl+"Contact/addcondata/",
	          type :"POST",
	          data :contactfrm, 
	          contentType:false,
	          processData:false,
	          success:function(res)
	          {
	           swal("Send Successfully.");
	           window.location.reload();
	          }
	        });
	});
});