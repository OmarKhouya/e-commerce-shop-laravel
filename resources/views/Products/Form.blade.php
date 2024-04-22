<div class="col-md-6">
    <label for="Name" class="form-label">Name</label>
    <input type="text" class="form-control  @error('Name') is-invalid @enderror" name="Name" @isset($product) value="{{$product->Name}}" @endisset>
</div>
<div class="col-md-6">
    <label for="Description" class="form-label">Description</label>
    <input type="text" class="form-control @error('Description') is-invalid @enderror" name="Description" @isset($product) value="{{$product->Description}}" @endisset>
</div>
<div class="col-md-4">
    <label for="Brand" class="form-label">Brand</label>
    <input type="text" class="form-control  @error('Brand') is-invalid @enderror" name="Brand" @isset($product) value="{{$product->Brand}}" @endisset>
</div>
<div class="col-md-2">
    <label for="Quantity" class="form-label">Quantity</label>
    <input type="text" class="form-control  @error('Quantity') is-invalid @enderror" name="Quantity" @isset($product) value="{{$product->Quantity}}" @endisset/>
</div>
<div class="col-md-2">
    <label for="Price" class="form-label">Price</label>
    <input type="text" class="form-control @if ($errors->has('Price')) is-invalid @endif" name="Price" @isset($product) value="{{$product->Price}}" @endisset>
</div>
<div class="col-md-4">
    <label for="Category" class="form-label">Category</label>
    <input type="text" class="form-control  @error('Category') is-invalid @enderror" name="Category" @isset($product) value="{{$product->Category}}" @endisset>
</div>
<div class="col-md-3">
    <label for="Thumbnail" class="form-label">Thumbnail</label>
    <input type="file" accept="image/*" class="form-control  @error('Thumbnail') is-invalid @enderror"
        name="Thumbnail" @isset($product) value="{{$product->Thumbnail}}" @endisset>
</div>
<div class="col-md-3">
    <label for="Image1" class="form-label">Image 1</label>
    <input type="file" accept="image/*" class="form-control" name="Image1" @isset($product) value="{{$product->Image1}}" @endisset>

</div>
<div class="col-md-3">
    <label for="Image2" class="form-label">Image 2</label>
    <input type="file" accept="image/*" class="form-control" name="Image2" @isset($product) value="{{$product->Image2}}" @endisset>
</div>
<div class="col-md-3">
    <label for="Image3" class="form-label">Image 3</label>
    <input type="file" accept="image/*" class="form-control" name="Image3" @isset($product) value="{{$product->Image3}}" @endisset>
</div>
<div class="col-md-4">
    <label for="Review" class="form-label">Review</label>
    <input type="text" class="form-control  @error('Review') is-invalid @enderror" name="Review" @isset($product) value="{{$product->Review}}" @endisset>
</div>
<div class="col-md-2">
    <label for="validationServer03" class="form-label">Rating</label>
    <input type="text" class="form-control  @error('Rating') is-invalid @enderror" name="Rating" @isset($product) value="{{$product->Rating}}" @endisset>
</div>
<div class="col-12 ">
    <button class="btn btn-dark float-end text-dark" type="submit" style="background-color: #FFECD6">{{$type}}
        Product</button>
</div>
