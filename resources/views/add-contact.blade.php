<!DOCTYPE html>
<h1>CONTACT US</h1>
<body>
<form action="{{route('products.save')}}" method="post">
  <div class="form-group">
    {{ csrf_field() }}
    Name: <input type="text" class="form-control" name="Name"><br> 
    E-mail: <input type="text" class="form-control" name="E-mail"><br> 
    Phone: <input type="number" class="form-control" name="Phone"><br> 
    Message: <input type="text" name="Message"><br>
  </div>
<button type="submit" class="btn btn-primary">SUBMIT</button>
</form>
</div> 