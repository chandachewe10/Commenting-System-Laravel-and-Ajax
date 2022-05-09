<!DOCTYPE html>
<html>

<head>
    <title>REPLY SYSTEM USING PHP LARAVEL AND AJAX</title>
   <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
   

</head>
<style>
    body {
        font-family: cursive;
            }

              
input[type]{
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

</style>

<body onload="retrieveReplies()">

    <center>

        <div style="margin-top: 50px;">
            <h4 style="font-weight: bold; color:royalblue">MAKE A REPLY</h4>
            <div class="shadow p-3 mb-5 bg-white rounded" style="width:90%;font-weight:lighter; ">
                <form id="commentform" >
                @csrf
              
                    <p id="done" style="color: royalblue;"></p>
                    <input type="text" ng-model="fullnames" name="fullnames" placeholder="Enter Full names" class="units"
                        style="width:90%;" >
                  
                    <br><br>
                    
                    <textarea class="form-control" roes="6" name="replies" class="units" placeholder="Enter Comments"
                        style="width:90%; " >Enter Replies</textarea>
                   
                    <br>
                    <input type="hidden" name="comment_id" value={{$comment_id}} id="comment_id" required/>
                    <div class="btn btn-primary" id="comment_reply">Reply</div>

                </form>
            </div>
        </div>

<br><br>


<p id="replyRetrieved" ></p>






        <script>
  $(document).ready(function(){
    $("#comment_reply").click(function () {
                   
        var z=$("#commentform").serialize();
        var y=JSON.stringify(z);
        $.ajax("{{route('replies')}}",{   
         method:"get",
         data:z,
         dataType:"JSON",
        
         success:function(data){
             document.getElementById("done").innerHTML=data;
            retrieveReplies();
         }
     });  
                    
                   
  });
               

                  
                });


           
         function retrieveReplies(){
            var z=$("#commentform").serialize();
        var y=JSON.stringify(z);
        $.ajax("{{route('retrieveReplies')}}",{   
         method:"get",
         data:z,
         
        
         success:function(data){
             document.getElementById("replyRetrieved").innerHTML=data;
                     }
     });  
         }
       
        </script>
    </center>
</body>

</html>