"use strict";

$(document).ready(function() {
$( "#save_project" ).click(function(){
        edit();
    });
$( "#add_project" ).click(function(){
        add();
    });
});


$(".alert").addClass("in").fadeOut(4500);

/* swap open/close side menu icons */
$('[data-toggle=collapse]').click(function(){
      // toggle icon
  	$(this).find("i").toggleClass("glyphicon-chevron-right glyphicon-chevron-down");
});

   $().ready(function(){
        $('[rel="tooltip"]').tooltip();

    });

    function rotateCard(btn){
        var $card = $(btn).closest('.card-container');
        console.log($card);
        if($card.hasClass('hover')){
            $card.removeClass('hover');
        } else {
            $card.addClass('hover');
        }
    }


    function edit(){

    var name = $("#name").val();
    var year = $("#year").val();
    var course = $("#course").val();
    var github = $("#github").val();
    var description = $("#description").val();
    var group = $("#gname").val();

    var data= {
        "name" : name,
        "year" : year,
        "course" : course,
        "github" : github,
        "description" : description,
        "group" : group
    };

    console.log(data);
    $.post("index.php/edit", data, function(response){
        console.log("Response: "+response);
        if(response != 400){
                swal({ 
                    title: "Success",
                    text: "Project Updated",
                    type: "success",
                    showConfirmButton: true
                },
                    function(){
                        console.log("Project Updated");
                         //window.location.href = "projects/load";
                         
                });
            }else{ 
                    swal({
                      title: "Error",
                      text: "Please try again",
                      type: "error",
                      showConfirmButton: false,
                      timer: 1500
                   });
                }
                 return false;
    });

}

function add(){
    var name = $("#name").val();
    var year = $("#year").val();
    var course = $("#course").val();
    var github = $("#github").val();
    var bdescription = $("#bdescription").val();
    var description = $("#description").val();
    var group = $("#gname").val();

    var data= {
        "name" : name,
        "year" : year,
        "course" : course,
        "github" : github,
        "bdescription" : bdescription,
        "description" : description,
        "group" : group
    };

    console.log(data);
    $.post("index.php/add", data, function(response){
        console.log("Response: "+response);
        if(response != 400){
                swal({ 
                    title: "Success",
                    text: "Project Added Awaiting Approval",
                    type: "success",
                    showConfirmButton: true
                },
                    function(){
                        console.log("Project Added");
                         //window.location.href = "projects/load";
                         
                });
            }else{ 
                    swal({
                      title: "Error",
                      text: "Please try again",
                      type: "error",
                      showConfirmButton: false,
                      timer: 1500
                   });
                }
                 return false;
    });
}

