@extends('layouts.app')

@section('content')
<div class="container">
        <form action="/p" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row">
                <div class="col-md-8 offset-2">
                    <h3>Add New Post</h3>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-8 offset-2">
                
                    <label for="caption" class="col-md-4 col-form-label">Post Caption</label>

                    <input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror" name="caption" value="{{ old('caption') }}" required autocomplete="caption" autofocus>

                    @error('caption')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    
                </div>        
            </div>
            <div class="row">
                <div class="col-md-8 offset-2">
                
                    <label for="image" class="col-md-4 col-form-label">Select Image</label>

                    <input id="image" type="file" class="form-control-file @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="image" autofocus>

                    @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    
                </div>        
            </div>
            <div class="row pt-4">
                <div class="col-md-8 offset-2">
                    <button class="btn btn-primary">Add Post</button>
                </div>
            </div>
            
        </form>
</div>
@endsection
