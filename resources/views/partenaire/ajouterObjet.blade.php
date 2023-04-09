<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
    <title>Ajouter Objet</title>
</head>
<body>
    <div class="container">
        <div class="row">
            
            <div class="col-md-8 col-md-offset-2">
                
                <h1>Ajouter un Objet</h1>
                
                <form action="/addObject" method="POST" enctype= "multipart/form-data"> 
                    @csrf            
                    <div class="form-group">
                        <label for="categorie">Categorie <span class="require">*</span></label>
                        {{-- <input type="select" class="form-control" name="slug" /> --}}
                        <select name="category_id" class="form-control" id="categorie" value ="{{ old('categorie_id') }}">
                            <option value="">--Choisir une categorie--</option>
                            @foreach ($categories as $categorie )
                                <option value="{{ $categorie->id }}" {{ old('category_id') == $categorie->id ? 'selected' : '' }}>{{ $categorie->name }}</option>
                            @endforeach
                        </select>
                        @error('categorie_id')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="title">Title <span class="require">*</span></label>
                        <input type="text" class="form-control" name="title" value = "{{ old('title') }}"/>
                        @error('title')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea rows="5" class="form-control" name="description" >{{ old('description') }}</textarea>
                    </div>
                    @error('title')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                    <div class="form-group">
                        <label class="form-label" for="customFile">Ajouter image</label>
                        <input type="file" class="form-control" id="customFile" name="images[]" value="{{ old('images') }} " multiple />
                    </div>
                    @error('image')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                    <div class="form-group">
                        <p><span class="require">*</span> - required fields</p>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">
                            Ajouter
                        </button>
                        <button class="btn btn-default">
                            Cancel
                        </button>
                    </div>                    
                </form>
            </div>
            
        </div>
    </div>
    
</body>
</html>
