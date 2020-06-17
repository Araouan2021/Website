            <div class="col-md-12">
               <div class="form-group">
                   <label> name </label>
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
                   <label> slug </label>
                   <input type="text" class="form-control @error('slug') is-invalid @enderror" placeholder="Slug" name="slug">
                   @error('slug')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
                   </div>
                   </div>   
             <div class="col-md-12">
                <div class="form-group">
                   <label> details </label>
                   <input type="text" class="form-control @error('details') is-invalid @enderror" placeholder="Details" name="details">
                   @error('details')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
                   </div>
                   </div>   
             <div class="col-md-12">
                <div class="form-group">
                   <label> price </label>
                   <input type="text" class="form-control @error('price') is-invalid @enderror" placeholder="Price" name="price">
                   @error('price')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
                   </div>
                   </div>   
             <div class="col-md-12">
                <div class="form-group">
                   <label> shipping cost </label>
                   <input type="text" class="form-control @error('shipping cost') is-invalid @enderror" placeholder="Shipping cost" name="shipping cost">
                   @error('shipping cost')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
                   </div>
                   </div>
             <div class="col-md-12">
                <div class="form-group">
                   <label> description </label>
                   <input type="text" class="form-control @error('description') is-invalid @enderror" placeholder="Description" name="description">
                   @error('description')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
                   </div>
                   </div>   
                   <div class="col-md-12">
             <div class="form-group">
                   <label> category_id </label>
                   <input type="text" class="form-control @error('category_id') is-invalid @enderror" placeholder="Category_id" name="category_id">
                   @error('category_id')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
                   </div>
                   </div>   
             <div class="form-group">
                   <label> brand_id </label>
                   <input type="text" class="form-control @error('brand_id') is-invalid @enderror" placeholder="Brand_id" name="brand_id">
                   @error('brand_id')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
                   </div>
                   </div>   
             <div class="form-group">
                   <label> image_path </label>
                   <input type="text" class="form-control @error('image_path') is-invalid @enderror" placeholder="image_path" name="image_path">
                   @error('image_path')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
                   </div>
                   </div>   












