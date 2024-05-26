<!DOCTYPE html>
<html lang="en">
<head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Document</title>
</head>
<body>
 @if (session('error'))
                        <div class="alert alert-success" style="color:red">
                              <span>{{ session('error') }}</span>
                        </div>
 @endif
<form action="{{ route('page_secrete') }}" method="post">
       @csrf
       @method('POST')
              <input type="text" name="age" id="age" placeholder="age" >
              <button type="submit">envoyer</button>
       </form>
</body>
</html>