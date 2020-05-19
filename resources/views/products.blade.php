<div class="content">
   <div class="row">
     <div class="col-md-12">
       <div class="card card-user">
         <div class="card-header">
           <h5 class="card-title">Products</h5>
         </div>
        <div class="card-body">
           @if(Session::has('success'))
              <div class="alert alert-success">
        	    {{ Session::get('success') }}
               </div>
           @endif
           
          <form method="post" action="products">
             {{csrf_field()}}
             <div class="row">
               <div class="col-md-12">
                 <div class="form-group">
                 <label> Title </label>
                   <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Title" name="title">
                   @error('title')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
                 </div>
               </div>
             <div class="col-md-12">
               <div class="form-group">
                   <label> Price </label>
                   <input type="text" class="form-control @error('price') is-invalid @enderror" placeholder="Price" name="price">
                   @error('price')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
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


<img src="{{ asset ('storage/app/public/logos/cocoa.jpeg')}}" >

