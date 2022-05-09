<!DOCTYPE html>
<html>

<head>
    <title>COMMENTING SYSTEM USING PHP LARAVEL AND AJAX</title>
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

<body>

    <center>
    
    @foreach($replies as $rep)
    <table class="shadow p-3 mb-5 bg-white rounded" style="width:90%;font-weight:lighter;">
    
<th><p style="color:black;font-weight:bold;align-items:center">By <span style="color:royalblue">{{$rep->fullnames}} </span> about <span style="color:royalblue">{{$rep->created_at->diffForHumans()}}</span></p></th>
</tr>

<tr>
<td><p>{{$rep->replies}}</p><td>

</tr>

</table>

@endforeach






    </center>
    

    
  
</body>

</html>