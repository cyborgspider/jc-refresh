(function($){
 $.fn.extend({

 	customStyle : function(options) {
	  if(!$.browser.msie || ($.browser.msie&&$.browser.version>6)){
	  return this.each(function() {

			var currentSelected = $(this).find(':selected');
			$(this).after('<span class="customStyleSelectBox"><span class="customStyleSelectBoxInner">'+currentSelected.text()+'</span></span>').css({position:'absolute', opacity:0,fontSize:$(this).next().css('font-size')});
			var selectBoxSpan = $(this).next();
			var selectBoxWidth = parseInt($(this).width()) - parseInt(selectBoxSpan.css('padding-left')) -parseInt(selectBoxSpan.css('padding-right'));
			var selectBoxSpanInner = selectBoxSpan.find(':first-child');
			selectBoxSpan.css({display:'inline-block'});
			selectBoxSpanInner.css({width:selectBoxWidth, display:'inline-block'});
			var selectBoxHeight = parseInt(selectBoxSpan.height()) + parseInt(selectBoxSpan.css('padding-top')) + parseInt(selectBoxSpan.css('padding-bottom'));
			$(this).height(selectBoxHeight).change(function(){
				// selectBoxSpanInner.text($(this).val()).parent().addClass('changed');   This was not ideal
			selectBoxSpanInner.text($(this).find(':selected').text()).parent().addClass('changed');
				// Thanks to Juarez Filho & PaddyMurphy
			});

	  });
	  }
	}
 });

function Valid()
{
	var form = document.frm;

	if(form.first_name.value == "")
	{
		alert("Please Input Your First Name.");
		form.first_name.focus();
		return false;
	}
	else if(form.last_name.value == "")
	{
		alert("Please Input Your Last Name.");
		form.last_name.focus();
		return false;
	}
	else if(form.email.value == "")
	{
		alert("Please Input Your Email.");
		form.email.focus();
		return false;
	}
	else if(form.phone.value == "")
	{
		alert("Please Input Your Phone Number.");
		form.phone.focus();
		return false;
	}
	else if(form.company.value == "")
	{
		alert("Please Input Your Compnay Name.");
		form.company.focus();
		return false;
	}
	else if(form.street.value == "")
	{
		alert("Please Input Your Street Address.");
		form.street.focus();
		return false;
	}
	else if(form.City.value == "")
	{
		alert("Please Input Your City.");
		form.city.focus();
		return false;
	}
	else if(form.zipcode.value == "")
	{
		alert("Please Input Your Zipcode.");
		form.zipcode.focus();
		return false;
	}
	else if(form.comments.value == "")
	{
		alert("Please Input Comments.");
		form.comments.focus();
		return false;
	}
	else if(form.comments.value.length > 500)
	{
		alert("Maximum 500 Characters.");
		form.comments.focus();
		return false;
	}
	else
	{
		return true;
	}
}
