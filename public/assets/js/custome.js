function createdeal(id){
	if(id==null || id==""){
		alert("Please Select Lead!");
	}
	var id = id.trim();
            $.ajax({
                type:"GET",
                  url: "get-lead-by-id/"+id,
                  
                  success : function (data) {
                  
                   $(".main-panel").html(data);
                  

                  
                  },
              });
    }

    $("#Filter_box").click(function(){
      // alert("hello");
  
    var className = $('#bid_d').attr('class');
    //alert(className);
    if (className != 'col-md-12') {
      var className = $('#bid_d').attr('class');
    }
     
    if(className == 'col-md-12'){
        $("#bid_d").addClass("col-md-9");
         $("#bid_d").css({"padding": "0px"});
        $("#bid_d").removeClass("col-md-12");
        $("#small_d").removeClass("d-none");  
    }else{
        $("#bid_d").addClass("col-md-12");
        $("#bid_d").removeClass("col-md-9");
        $("#small_d").addClass("d-none");
    }
    
  });

    function del_div(id){

    $('.prashant'+id).remove();
    } ;


    $( "#leads_filter" ).on( "submit", function(e) {

       var formdata = $(this).serializeArray();
   console.log(formdata);
    });