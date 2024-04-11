<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<script type="text/javascript">


//function

function submitInfo(action){
    $(document).ready(function(){
        var info= {
            action:action,
            pid:$("#pid").val(),
            firstName:$("#firstName").val(),
            lastName:$("#lastName").val(),
            email:$("#email").val(),
            phone:$("#phone").val(),
            country:$("#country").val(),
            password:$("#password").val(),
        };

        $.ajax({
            url: '../actions/register_user_action.php',
            type: 'post',
            data:info,
            success:function(response){
                alert(response);
            }

        })
    }
)
}



function submitData( action){
    $(document).ready(function(){
        var data ={
            action:$('#action').val(),
            email:$('#email').val(),
            password:$('#password').val(),
            
        };

        $.ajax({
            url:'../actions/login_user_action.php',
            type: 'post',
            data:data,
            success:function(response){
                alert(response);
                if(response == "Login successful"){
                    window.location.reload();
                }

            }
        })
    })

   
}

function bookTrip(action){
    $(document).ready(function(){
        var info= {
            action:action,
            destination:$("#destination").val(),
            date:$("#date").val(),
            duration:$("#duration").val(),
            payment:$("#payment").val(),
            card:$("#card").val(),
            firstName:$("#firstName").val(),
            lastName:$("#lastName").val(),
            email:$("#email").val(),
            phone:$("#phone").val(),
           
            
        };

        $.ajax({
            url: '../actions/book_trip_action.php',
            type: 'post',
            data:info,
            success:function(response){
                alert(response);
            }

        })
    }
)
}




</script>