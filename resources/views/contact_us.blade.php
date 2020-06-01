<!DOCTYPE html>
<head>
<link href="https://fonts.googleapis.com/css?family=Abel&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Dosis&display=swap" rel="stylesheet">
</head>
<style>

body {background-color: Wheat;}

h1 {
  font-family: 'Abel', sans-serif;
  color: Sienna;
}

h5 {
   font-size: 30px;
   font-weight: bold;
   color: Sienna;
}

input {
  width: 150px;
  height: 25px;
  box-sizing: border-box;
  padding: 15px 15px;
  font-family: 'Dosis', sans-serif;
  font-size: 20px;
  color: Sienna;
  font-weight: bold;
  margin: 8px 0;
  border: 2px solid Peru;
  border-radius: 4px;
}

content {
  max-width: 500px;
  margin: auto;
  background: Sienna;
  font-weight: bold;
  padding: 10px;
}

body {
  color: Sienna;
  font-size: 20px;
  font-family: 'Dosis', sans-serif;
  font-weight: bold;
  text-anchor: center;
}

.btn {
  background-color: Sienna;
  font-family: 'Abel', sans-serif;
  font-size: 20px;
    color: white;
    padding: 12px 20px;
    margin: 20px;
    border: none;
    border-radius: 4px;
}
</style>
</body>
<div class="content">
   <div class="row">
     <div class="col-md-12">
       <div class="card card-user">
         <div class="card-header">
           <h5 class="card-title">Contact Us</h5>
         </div>
        <div class="card-body">
           @if(Session::has('success'))
              <div class="alert alert-success">
        	    {{ Session::get('success') }}
               </div>
           @endif
           
          <form method="post" action="contact-us">
             {{csrf_field()}}
             <div class="row">
               <div class="col-md-12">
                 <div class="form-group">
                 <label> Name </label>
                   <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Name" name="name">
                   @error('name')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
                 </div>
               </div>
             <div class="col-md-12">
               <div class="form-group">
                   <label> Email </label>
                   <input type="text" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email">
                   @error('email')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
                 </div>
               </div>   
             <div class="col-md-12">
                <div class="form-group">
                   <label> Phone Number </label>
                   <input type="text" class="form-control @error('phone_number') is-invalid @enderror" placeholder="Phone Number" name="phone_number">
                   @error('phone_number')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
                   </div>
               </div>   
                 <div class="col-md-12">
                 <div class="form-group">
                   <label> Subject </label>
                   <input type="text" class="form-control @error('subject') is-invalid @enderror" placeholder="Subject" name="subject">
                   @error('subject')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
                 </div>
               </div>
               
              <div class="col-md-12">
                <div class="form-group">
                   <label> Message </label>
                   <textarea class="form-control textarea @error('message') is-invalid @enderror" placeholder="Message" name="message"></textarea>
                   @error('message')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
                 </div>
               </div>
             </div>
             <div class="row">
              <div class="update ml-auto mr-auto">
                 <button type="submit" class="btn btn-primary btn-round">Send</button>
               </div>
             </div>
           </form>
         </div>
       </div>
     </div>
   </div>
</div>

Get in touch

<svg class="bi bi-envelope-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path d="M.05 3.555L8 8.414l7.95-4.859A2 2 0 0014 2H2A2 2 0 00.05 3.555zM16 4.697l-5.875 3.59L16 11.743V4.697zm-.168 8.108L9.157 8.879 8 9.586l-1.157-.707-6.675 3.926A2 2 0 002 14h12a2 2 0 001.832-1.195zM0 11.743l5.875-3.456L0 4.697v7.046z">
</svg>
<h3>araouanventures@gmail.com<h3>

<svg class="bi bi-phone" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M11 1H5a1 1 0 00-1 1v12a1 1 0 001 1h6a1 1 0 001-1V2a1 1 0 00-1-1zM5 0a2 2 0 00-2 2v12a2 2 0 002 2h6a2 2 0 002-2V2a2 2 0 00-2-2H5z" clip-rule="evenodd"/>
  <path fill-rule="evenodd" d="M8 14a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"/>
</svg>
<h3>+233242025034</h3>

<i class="fas fa-map-marker-alt"></i>

<br>86 Fiore Drive<br>
<br>Trasacco Valley<br>
<br>East Legon, Accra, Ghana<br>


