<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tour Control</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

    <div class="container mt-5 mb-5">

        <div>
            <h4 class="text-primary">
                Insert New Tour
            </h4>
        </div>

        <form action="insertTourPost" enctype="multipart/form-data" method="POST">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="mb-3 mt-3">
                <label for="name">Tour name</label>
                <input type="text" class="form-control" id="name" placeholder="Enter Tour name" name="name" value="{{old('name')}}">
                @error('name')
                    <span style="color: red">{{$message}}</span>
                @enderror
              </div>
              <div class="mb-3">
                <label for="location_start">Location Start:</label>
                <input type="text" class="form-control" id="location_start" placeholder="Enter Location Start" name="location" value="{{old('location')}}">
                @error('location')
                <span style="color: red">{{$message}}</span>
            @enderror
              </div>
              <div class="mb-3">
                <label for="transport">Transport:</label>
                <input type="text" class="form-control" id="transport" placeholder="Enter Transport" name="transport" value="{{old('transport')}}">
                @error('transport')
                <span style="color: red">{{$message}}</span>
            @enderror
              </div>
              <div class="mb-3">
                <label for="duration">Duration:</label>
                <input type="text" class="form-control" id="duration" placeholder="Enter Duration" name="duration" value="{{old('duration')}}">
                @error('duration')
                <span style="color: red">{{$message}}</span>
            @enderror
              </div>
              <div class="mb-3">
                <label for="price1">Price1:</label>
                <input type="text" class="form-control" id="price1" placeholder="Enter Price1" name="price1" value="{{old('price1')}}">
                @error('price1')
                <span style="color: red">{{$message}}</span>
            @enderror
              </div>
              <div class="mb-3">
                <label for="price2">Price2:</label>
                <input type="text" class="form-control" id="price2" placeholder="Enter Price2" name="price2" value="{{old('price2')}}">
                @error('price2')
                <span style="color: red">{{$message}}</span>
            @enderror
              </div>
              <div class="mb-3">
                <label for="price3">Price3:</label>
                <input type="text" class="form-control" id="price3" placeholder="Enter Price3" name="price3" value="{{old('price3')}}">
                @error('price3')
                <span style="color: red">{{$message}}</span>
            @enderror
              </div>
              <div class="mb-3">
                <label for="price4">Price4:</label>
                <input type="text" class="form-control" id="price4" placeholder="Enter Price4" name="price4" value="{{old('price4')}}">
                @error('price4')
                <span style="color: red">{{$message}}</span>
            @enderror
              </div>
              <div class="mb-3">
                <label for="img1">Image1:</label>
                <input type="file" class="form-control" id="img1" placeholder="Enter Image1" name="img1" value="{{old('img1')}}">
                @error('img1')
                <span style="color: red">{{$message}}</span>
            @enderror
              </div>
              <div class="mb-3">
                <label for="img2">Image2:</label>
                <input type="file" class="form-control" id="img2" placeholder="Enter Image2" name="img2" value="{{old('img2')}}">
                @error('img2')
                <span style="color: red">{{$message}}</span>
            @enderror
              </div>
              <div class="mb-3">
                <label for="img3">Image3:</label>
                <input type="file" class="form-control" id="img3" placeholder="Enter Image3" name="img3" value="{{old('img3')}}">
                @error('img3')
                <span style="color: red">{{$message}}</span>
            @enderror
              </div>
              <div class="mb-3">
                <label for="img4">Image4:</label>
                <input type="file" class="form-control" id="img4" placeholder="Enter Image4" name="img4" value="{{old('img4')}}">
                @error('img4')
                <span style="color: red">{{$message}}</span>
            @enderror
              </div>
              <div class="mb-3">
                <label for="img5">Image5:</label>
                <input type="file" class="form-control" id="img5" placeholder="Enter Image5" name="img5" value="{{old('img5')}}">
                @error('img5')
                <span style="color: red">{{$message}}</span>
            @enderror
              </div>
              <div class="mb-3">
                <label for="detail">Detail:</label>
                <textarea class="form-control" rows="5" placeholder="Enter Detail" id="detail" name="detail" value="">{{old('detail')}}</textarea>
                @error('detail')
                <span style="color: red">{{$message}}</span>
            @enderror
              </div>
              <div class="mb-3">
                <label for="visit">Visit:</label>
                <textarea class="form-control" rows="8" placeholder="Enter Visit" id="visit" name="visit" value="">{{old('visit')}}</textarea>
                @error('visit')
                <span style="color: red">{{$message}}</span>
            @enderror
              </div>
              <div class="mb-3">
                <label for="region">Region:</label>
                <input class="form-control" placeholder="Enter Region" id="region" name="region" value="{{old('region')}}">
                @error('region')
                <span style="color: red">{{$message}}</span>
            @enderror
              </div>
              <div class="mb-3">
                <label for="place">Place:</label>
                <input class="form-control" placeholder="Enter Place" id="place" name="place" value="{{old('place')}}">
                @error('place')
                <span style="color: red">{{$message}}</span>
            @enderror
              </div>
              <br>
              <button class="btn btn-primary"> INSERT </button>
              <br>
              <br>
        </form>
    </div>
    
</body>
</html>