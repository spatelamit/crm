function createdeal(id){
	if(id==null || id==""){
		alert("Please Select Lead!");
	}
	var id = id.trim();
            $.ajax({
                type:"GET",
                  url: "get-lead-by-id/"+id,
                  
                  success : function () {
                    console.log(data)
                    

                  
                  },
              });
    }