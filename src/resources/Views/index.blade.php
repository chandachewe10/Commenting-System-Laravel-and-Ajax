<!DOCTYPE html>
<html>

<head>
    <title>COMMENTING SYSTEM USING PHP AND AJAX</title>
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

<body onload="retrieveComments()">

    <center>

        <div style="margin-top: 50px;">
            <h4 style="font-weight: bold; color:royalblue">POST A COMMENT</h4>
            <div class="shadow p-3 mb-5 bg-white rounded" style="width:90%;font-weight:lighter; ">
                <form id="commentform" >
                @csrf
                    <p id="done" style="color: royalblue;"></p>
                    <input type="text" name="fullnames" placeholder="Enter Full names" style="width:90%;" required>
                   
                    <br><br>
                    
                    <textarea class="form-control" name="comments" placeholder="Enter Comments"
                    rows="4"  style="width:90%;">Enter Comments</textarea>
                   
                    <br>
                    
                    <div class="btn btn-primary" id="comment_posted">Comment</div>

                </form>
            </div>
        </div>

<br><br>

<p id="commentsRetrieved"></p>




        <script>
  $(document).ready(function(){
    $("#comment_posted").click(function () {
                   
        var z=$("#commentform").serialize();
        var y=JSON.stringify(z);
        $.ajax("{{route('commented')}}",{
         method:"get",
         data:z,
         dataType:"JSON",
        
         success:function(data){
             document.getElementById("done").innerHTML=data;
             retrieveComments();
             
         }
     });  
                    
                   
  });
  });
            
  function retrieveComments(){
  $.get("retrieveComments", function(data){
  $("#commentsRetrieved").html(data);
  });
         }
       



         
         
        </script>



    </center>
</body>

</html>