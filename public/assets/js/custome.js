function createdeal(id) {
    if (id == null || id == "") {
        alert("Please Select Lead!");
    }
    var id = id.trim();
    $.ajax({
        type: "GET",
        url: "get-lead-by-id/" + id,

        success: function (data) {

            $(".main-panel").html(data);



        },
    });
}

$("#Filter_box").click(function () {
    // alert("hello");

    var className = $('#bid_d').attr('class');
    //alert(className);
    if (className != 'col-md-12') {
        var className = $('#bid_d').attr('class');
    }

    if (className == 'col-md-12') {
        $("#bid_d").addClass("col-md-9");
        $("#bid_d").css({ "padding": "0px" });
        $("#bid_d").removeClass("col-md-12");
        $("#small_d").removeClass("d-none");
    } else {
        $("#bid_d").addClass("col-md-12");
        $("#bid_d").removeClass("col-md-9");
        $("#small_d").addClass("d-none");
    }

});

function del_div(id) {

    $('.prashant' + id).remove();
};


$("#leads_filter").on("submit", function (e) {

    var formdata = $(this).serializeArray();
    // alert("hello");
    $.ajax({
        type: "POST",
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        url: 'leads-filter',

        data: formdata,
        success: function (response) {

            // $(".defalut").hide();
            // $('#GlobleLoader').hide();
            $(".lead_search").html(response);
            // console.log(response);
        }
    });

});

$("#view_data").on("change", function (e) {

    var view_id = $('#view_data').val();
    var mod_id = $('#mod_id').val();
    // alert(mod_id);
    $.ajax({
        type: "get",

        url: 'view-data/' + view_id + '/' + mod_id,


        success: function (response) {


            $(".lead_search").html(response);
            // console.log(response);
        }
    });

});

$(document).ready(function () {
    $('#saveFilter1').on('change', function () {
        var savefilterid = $("#saveFilter1").val();
        // alert(savefilterid);
        $.ajax({
            type: "get",
            url: "get_filter_by_users/" + savefilterid,


            success: function (response) {

                $(".lead_search").html(response);


            },

        });

    });
});
    $("#sender_id").change(function () {
        var sender_id = $("#sender_id").val();
        $.get("/GetTemplate/" + sender_id, function (data) {
            console.log("done")
            $("#template_id").html(data);
        });
    });
    $("#template_id").change(function () {

        var template_id = $("#template_ids option:selected").text();

        $("#sms_message_temp").val(template_id);

    });



    $("#sender_email").change(function () {
        var sender = $("#sender_email").val()

        $.get("/SetAuthkey/" + sender, function (data) {
            $("#authKey").val(data);
            console.log(data)
        });
    });


    $("#sender_voice").change(function(){
        var sender = $("#sender_voice").val()

        $.get("/GetVoiceAuthkey/"+sender ,function( data ) {
            $("#voice_auth_key").val(data);
        });

        $.get("/GetVoiceTemplate/"+sender ,function( data ) {
            $("#voice_message_select").html(data);
        });
    });

    $("#voice_message_select").change(function () {
        var data = $("#voice_template").val()
        // console.log(data)
        $("#voice_message_temp").val(data);
    });
    function modals(id) {
        // alert('#'+id);
        $('#' + id).modal('show');
    };

    function editdata(data_id, module_id) {

        alert(data_id + '-' + module_id);
        $.ajax({
            type: "get",
            url: "get_edit_data/" + data_id + '/' + module_id,


            success: function (response) {
                // console.log(response);
                $(".editdata").html(response);
                $('#edit_data').modal('show');

            },

        });

    }

    function getnotification() {

        // alert("hello");
        $.ajax({
            type: "get",
            url: "show_notification/",
            success: function (response) {
                console.log(response);

                $("#notifications").html(response);
            },

        });
    }

