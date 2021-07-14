<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="/action_page.php">
    <div class="panel-body">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="form-horizontal form-bordered" action="" method="post">
            @csrf

            <div class="form-group">
                <label class="col-md-3 control-label" for="inputDefault">Identity Number</label>
                <div class="col-md-3">
                    <input type="text" class="form-control" id="inputDefault" name="identitynumber">
                    @error('identitynumber')
                    <div class="text-danger">* {{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 control-label" for="inputDefault">First Name</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="inputDefault" name="firstname">
                    @error('firstname')
                    <div class="text-danger">* {{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 control-label" for="inputDefault">Last Name</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="inputDefault" name="lastname">
                    @error('lastname')
                    <div class="text-danger">* {{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 control-label" for="inputDefault">Phone</label>
                <div class="col-md-3">
                    <input type="text" class="form-control" id="inputDefault" name="phone">
                    @error('phone')
                    <div class="text-danger">* {{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div>
                 <input type="radio" name="Male" >Male<br>
                 <input type="radio" name="Female" >Female<br>
            </div>

            <div class="form-group">
                <label class="col-md-3 control-label"></label>
                <div class="col-md-6 col-xs-11">
                    <button class="btn btn-sm btn-primary colorpicker-element">
                        Submit
                    </button>
                    <button class="btn btn-sm btn-primary colorpicker-element">
                        Reset
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>
</body>
</html>
