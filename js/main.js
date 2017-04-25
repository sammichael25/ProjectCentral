"use strict";

$(document).ready(function() {
    
    $('#loginform').bootstrapValidator({
        container: '#messages',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok has-success',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            email: {
                validators: {
                    notEmpty: {
                        message: 'Email is required and cannot be empty'
                    },
                    emailAddress: {
                        message: 'The email address is not valid'
                    }
                }
            },
            password: {
                validators: {
                    notEmpty: {
                        message: 'Password is required and cannot be empty'
                    }
                }
            }

        }
    });

    $('#signupform').bootstrapValidator({
        container: '#messages',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok has-success',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            email: {
                validators: {
                    notEmpty: {
                        message: 'Email is required and cannot be empty'
                    },
                    emailAddress: {
                        message: 'The email address is not valid'
                    }
                }
            },
            password: {
                validators: {
                    notEmpty: {
                        message: 'Password is required and cannot be empty'
                    },
                    identical: {
                        field: 'password2',
                        message: 'The password and its confirm are not the same'
                    }
                }
            },
            password2: {
                validators: {
                    notEmpty: {
                        message: 'Password is required and cannot be empty'
                    },
                    identical: {
                        field: 'password',
                        message: 'The password and its confirm are not the same'
                    }
                }
            }

        }
    });

    $( "#btn-guest" ).click(function() {
        window.location.href = "index.php/guest";
    }); 

    $( "#btn-login" ).click(function() {
        login();
    });


    // check if I have the project number
    if ($("#product_id_sec").length > 0){
        // We know that we are on the product listing page;
        var val = $("#product_id_sec").html();
        if (!isNaN(val)){
            val = parseInt(val)
            if (val > 0){
                // load data
                getproject(val);
            }
        }      

    }

});

function login(){

    var email = $("#email").val();
    var password = $("#password").val();

    var data= {
        "email" : email,
        "password": password
    };

    console.log(data);
    $.post("index.php/login", data, function(response){
        console.log("Response: "+response);
        if(response === 201){
                swal({ 
                    title: "Welcome",
                    text: "Login Successful",
                    type: "success",
                    showConfirmButton: false,
                    timer: 1000
                },
                    function(){
                        console.log("Atempt");
                         window.location.href = "projects/load";
                        console.log("Atempting");
                         
                });
            }else{ 
                    swal({
                      title: "Incorrect Credentials!",
                      text: "Please try again",
                      type: "error",
                      showConfirmButton: false,
                      timer: 1000
                   });
                }
                 return false;
    });
   
}

function retrieveProjects(){
    console.log("Attempting to retrieve all projects from the database via AJAX");
    $.get("../index.php/projects", processProjects, "json"); 
}

function processProjects(records){
    console.log(records);
    createCard(records);
}

function createCard(records){
    var key;
    var sec_id = "#project_row";
    var htmlStr = ""; 
    var count = 4;
    records.forEach(function(el){
        if(count==0){htmlStr += "</div><br>";count = 4;}
        if(count==4){htmlStr += "<div class=\"row\">";}
        htmlStr += "<div class=\"col-sm-6 col-md-4 col-lg-3 mt-4\">";
        htmlStr += "<div class=\"card\"><div class=\"card-logo\">";
        htmlStr += "<img class=\"card-img-top\" src=\"../"+el['img_path']+"\"></div>" ;
        htmlStr += "<div class=\"card-block\"><figure class=\"profile\"><img src=\"../templates/images/placeholder.png\" class=\"profile-avatar\" alt=\"\"></figure>";
        htmlStr += "<h4 class=\"card-title mt-3\">"+el['name']+"</h4><div class=\"meta\"><a>"+el['group_name']+"</a></div>";
        htmlStr += "<div class=\"card-text\">"+el['proj_des']+"</div></div><div class=\"card-footer\"><small>Last Updated "+el['last_updated']+"</small>";
        htmlStr += "<button class=\"btn btn-secondary btn-md\" id =\"btn-today-"+el['proj_id']+"\" onclick= \"goToProject("+el['proj_id']+")\">Read More <span><i class=\"glyphicon glyphicon-star\"></i></span></button></div></div></div>";
        count--;
    });

    $("#project_row").html(htmlStr);

}

function getproject(id){
    console.log("Selected: " + id);
    console.log("Attempting to retrieve a project" + id +  "from the database via AJAX");
    $.get("../../index.php/project/"+id, processProject, "json"); 
}

function goToProject(id){
    window.location.href = "../project/"+id+"/load";
}

function processProject(records){
    console.dir(records);
    var sec_id = "#proj_row";
    var htmlStr = "";
    records.forEach(function(el){
        htmlStr += "<h2>"+el['name']+"</h2>";
    });
    $("#proj_row").html(htmlStr);
}

