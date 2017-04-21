"use strict";

$(document).ready(function() {
    retrieveProjects();
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


});

function login(){
    //var email = document.forms["logForm"]["email"].value;
   // var password = document.forms["logForm"]["password"].value;
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
                    //swal("Incorrect Login","Please try again","error");
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
    $.get("../index.php/projects", processProjects, "json"); // When AJAX request is completed successfully, the proccessAllCountries function will be executed with the data as a parameter
}

function processProjects(records){
    console.log(records);
    createCard(records);
}

function createCard(records){
    var key;
    var sec_id = "#project_row";
    //var htmlStr = $("#table_heading").html(); //Includes all the table, thead and tbody declarations
    var htmlStr = ""; 

    records.forEach(function(el){
        htmlStr += "<div class=\"card\">";
        htmlStr += "<img class=\"card-img-top\" src=\"../images/project/uwefind.png\">" ;
        htmlStr += "<div class=\"card-block\"><figure class=\"profile\"><img src=\"../templates/images/placeholder.png\" class=\"profile-avatar\" alt=\"\"></figure>";
        htmlStr += "<h4 class=\"card-title mt-3\">"+el['name']+"</h4><div class=\"meta\"><a>UWE-Find Inc &copy;</a></div>";
        htmlStr += "<div class=\"card-text\">"+el['proj_des']+"</div><div class=\"card-footer\"><small>Last Updated "+el['last_updated']+"</small>";
        htmlStr += "<button class=\"btn btn-secondary btn-md\" id =\"btn-today\">Read More <span><i class=\"glyphicon glyphicon-star\"></i></span></button></div></div>";
    });

    $("#project_row").html(htmlStr);
}