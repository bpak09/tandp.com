// Login Form
$(document).ready(function(){
    $('#signinButton').click(function(){
        var user = $('#user').val();
        var pass = $('#pass').val();
        console.log("Pass working");
        $.ajax({
            url: 'xhr/login.php',
            type: 'post',
            dataType: 'json',
            data:{
                username: user,
                password: pass
            },
            success:function(response){
                console.log("Error in :" + user+ "Password" + pass);
                if(response.error){
                    alert(response.error);
                }else{
                    window.location.assign('parent.php')
                }
            }
        });
    });
    $('#signinButton2').click(function(){
        var user = $('#user2').val();
        var pass = $('#pass2').val();
        console.log("Pass working");
        $.ajax({
            url: 'xhr/login.php',
            type: 'post',
            dataType: 'json',
            data:{
                username: user,
                password: pass
            },
            success:function(response){
                console.log("Error in :" + user+ "Password" + pass);
                if(response.error){
                    alert(response.error);
                }else{
                    window.location.assign('teacher.php')
                }
            }
        });
    });
    $('#logOut').click(function(e){
        e.preventDefault;
        $.get('xhr/logout.php', function(){
            window.location.assign('index.php')
        })
    });

    /*REGISTER*/
    $('#register').on('click', function(){
        var firstname = $('#first').val(),
            lastname = $('#last').val(),
            email = $('#email').val(),
            username = $('#username').val(),
            password = $('#password').val();
        $.ajax({
            url: 'xhr/register.php',
            type: 'post',
            dataType: 'json',
            data: {
                firstname:firstname,
                lastname:lastname,
                email:email,
                username: username,
                password: password
            },
            success: function(response){
                if(response.error){
                    alert(response.error);
                }else{
                    window.location.assign('index.html');
                }
            }
        });
    });

/*ADD PROJECT*/
    $('#pb').on('click', function(e){
        e.preventDefault();
        var projName = $('#projName').val(),
            projDesc = $('#projDesc').val(),
            projDue = $('.projDue').val(),
            status = $('#status').val();

        $.ajax({
            url: "xhr/new_project.php",
            type: "post",
            dataType: "json",
            data: {
                projectName: projName,
                projectDescription: projDesc,
                dueDate: projDue,
                status: status
            },
            success: function(response){
                console.log('Testing for success');
                if(response.error){
                    alert(response.error);
                }else{
                    window.location.assign("projects.html")
                }
            }
        });
    });

    /* GET PROJECTS*/
        $.ajax({
            url: 'xhr/get_projects.php',
            type: 'get',
            dataType: 'json',
            success: function(response){
                console.log(response);
                if(response.error){
                    console.log(response.error);
                }else{
                    console.log(response.projects);
                    $.get('projects.html', function(html){
                        var h = $(html),
                            tempCode = h.find('#project').html(),
                            markup = '';
                        $.template('projects', tempCode);
                        for(var i= 0, j=response.projects.length; i<j; i++){
                            console.log(response.projects.length);
                            var project = response.projects[i];
                            markup += $.render(project, 'projects');
                            $('.projects').append('Project Name: '+project.projectName+' | ' +'Project Description: '+ ' '+project.projectDescription+' | ' +' '+'Status: '+project.status+' - ' +' '+'Due Date: '+project.dueDate+' | ' +' ');
                        }
                    });
                }
            }
        });

    /*DELETE*/
    $(".cls").click(function(){
        $("#one").remove();
    });
    $(".cls1").click(function(){
        $("#two").remove();
    });
    $(".cls2").click(function(){
        $("#three").remove();
    });
    $(".cls3").click(function(){
        $("#four").remove();
    });

    /*ADD TASK*/
    $('#tb').on('click', function(e){
        e.preventDefault();
        var taskName = $('#taskName').val(),
            taskDesc = $('#taskDesc').val(),
            taskDue = $('.taskDue').val(),
            status = $('#status').val();

        $.ajax({
            url: "xhr/new_task.php",
            type: "post",
            dataType: "json",
            data: {
                taskName: taskName,
                taskDescription: taskDesc,
                dueDate: taskDue,
                status: status
            },
            success: function(response){
                console.log('Testing for success');
                if(response.error){
                    alert(response.error);
                }else{
                    window.location.assign("tasks.html")
                }
            }
        });
    });

});