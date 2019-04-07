$("#answer").hide();
$("#container").hide();
$("#back").hide();


$( "#calc" ).on( "click", function( event ) {	  
	$.post(
	  "api/calc.php",
	  {
	    number: $('input[name="numberInput"]').val()
	  },
	  onAjaxSuccess,
	);
	 
	function onAjaxSuccess(data)
	{
		$("#numberInput").hide(),
		$("#answer").show(),
		$("#back").show(),
		$("#calc").hide(),
		$("#answer").val("ответ: "+data),
		showRoom();		  
	}
});
$( "#back" ).on( "click", function( event ) {
	$("#numberInput").show(),
	$("#answer").hide(),
	$("#back").hide(),
	$("#calc").show();
});


$( "#show" ).on( "click", function( event ) {
	$("#show").toggle(200);
	$("#container").show(600);
});
$( "#close" ).on( "click", function( event ) {
	$("#show").toggle(200);
	$("#container").hide(600);
});


$( document ).ready(function() {
	$("#loader").slideUp(300);   
    showRoom();	 
});


function showRoom(){
    $.ajax({
        type:"POST",
        url:"api/getDb.php",
        data:{action:"showroom"},
        success:function(data){
            $("#content").html(data);
        }
    });
}