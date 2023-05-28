<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{ url('css/platform/style.css') }}>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <title>Document</title>
</head>
<body>
    <section class="form-container">

        <form method="POST" action="{{ route('login') }}"enctype="multipart/form-data">
            @csrf
           <h3>login now</h3>
           <p>your email <span>*</span></p>
           <input type="email" name="email" placeholder="enter your email" value="{{ old('email') }}" required maxlength="50" class="box">
           @error('email')
              <span class="invalid-feedback" role="alert" style="color:red">
                <h5><strong>{{ $message }}</strong></h5>
              </span>
           @enderror                                           
           <p>your password <span>*</span></p>
           <input type="password" name="password" placeholder="enter your password" required maxlength="20" class="box">
           @error('password')
             <span class="invalid-feedback" role="alert" style="color:red">
                <h2><strong>{{ $message }}</strong></h2>
             </span>
           @enderror                     
           <input type="submit" value="login new" name="submit" class="btn">
        </form>
     
     </section>
</body>
</html>


