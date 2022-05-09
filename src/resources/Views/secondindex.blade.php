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
</style>

<body >


    <center>
    @if(count($comments) >= 1)
    @foreach($comments as $comment)
    <table class="shadow p-3 mb-5 bg-white rounded" style="width:90%;font-weight:lighter;">
    
<th><p style="color:black;font-weight:bold;align-items:center">By <span style="color:royalblue">{{$comment->fullnames}} </span> about <span style="color:royalblue">{{$comment->created_at->diffForHumans()}}</span></p></th>
</tr>

<tr>
<td><p>{{$comment->comments}}</p><td>
<hr>
<div class="btn btn-primary" ><a style="color:white" href='{{"reply/" .$comment->id }}'>Reply </a></div>
</tr>

</table>
<form id="number_of_replies">
@csrf
<input type="hidden" name="comment_id" value="{{$comment->id}}" id="comment_id" required/>
</form>
<span id="done"></span>
@endforeach
@endif






    </center> 

    
</body>

</html>