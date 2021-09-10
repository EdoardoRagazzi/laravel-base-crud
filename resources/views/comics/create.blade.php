@extends('layouts.app')

@section('title', 'create page')

@section('main')
<div class="container">
            <form action="post" >
                <div class="row mb-3">
                <label for="title"  class="col-sm-2 col-form-label">Title</label>
                <div class="col-sm-10">
                    <input type="text" name='title' class="form-control" id="title">
                </div>
                </div>
                <div class="row mb-3">
                <label for="thumb"  class="col-sm-2 col-form-label">Img HTTP</label>
                <div class="col-sm-10">
                    <input type="text"  name='thumb' class="form-control" id="thumb">
                </div>
                </div>
                <div class="row mb-3">
                <label for="sale_date"  class="col-sm-2 col-form-label">Sale_date</label>
                <div class="col-sm-10">
                    <input type="text" name="sale_date" class="form-control" id="sale_date">
                </div>
                </div>
                
                <div class="row mb-3">
                <label for="price"  class="col-sm-2 col-form-label">Price</label>
                <div class="col-sm-10">
                    <input type="text" name='price' class="form-control" id="price">
                </div>
                </div>
                <div class="row mb-3">
                <label for="description"  class="col-sm-2 col-form-label">Text</label>
                <div class="col-sm-10">
                    <textarea name="description" id="description" cols="110" rows="2"></textarea>
                </div>
                </div>
                <div class="row mb-3">
                    <label class="visually-hidden" for="type">Type of Comic</label>
                    <div class="col-sm-10">
                    <select class="form-select" name='type' id="type">
                      <option selected>Choose...</option>
                      <option value="comic book">Comic Book</option>
                      <option value="graphic novel">Graphic novel</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Sign in</button>
</div>
                </div>
                
                
            </div>

                
                
            </form>
            
@endsection