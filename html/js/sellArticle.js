/*sellArticle*/
$(function(){

	 $('#example').DataTable({responsive: true});

	$(".btn-sell").on("click",function()
	{
		var usr = document.forms["sellArticleForm"]["usr"].value;
		var title = document.forms["sellArticleForm"]["title"].value;
		var product = document.forms["sellArticleForm"]["product"].value;
		var price = document.forms["sellArticleForm"]["price"].value;

		if(usr==''){
			swal("Please Login First");
			return false;
		}
		else if(title==''){
			swal("Please Enter Product Title");
			return false;
		}
		else if(product==''){
			swal("Please Select File");
			return false;
		}
		else if(price==''){
			swal("Please Enter Product Price");
			return false;
		}
		else{
			var sellArticleForm = new FormData($("#sellArticleForm")[0]);
	        $.ajax({
	        url : baseurl+"SellArticle/sellArticleData/",
	          type :"POST",
	          data :sellArticleForm, 
	          contentType:false,
	          processData:false,
	          success:function(res)
	          {
	           swal("Send Successfully.");
	           $('#payBtn').click();
	           /*window.location.reload();*/
	           
	          }
	        });
	    }
	});
});