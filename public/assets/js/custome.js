function createdeal(id){
	if(id==null || id==""){
		alert("Please Select Lead!");
	}
	
            $.ajax({
                type:"GET",
                  url: "add-deals-by-id/"+id,
                  
                  success : function () {
                    console.log(data)
                    

                  
                  },
              });
    }