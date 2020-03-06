<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Welcome</title>
  </head>
  <body>
     {{-- Validation --}}
    <div style="background-color:red">
      @foreach ($errors->all() as $error)
        {{$error }}
      @endforeach
    {{-- End  Validation --}}
    </div>
    <form method="post" action="{{route('postlar')}}">
    @csrf
    
      <label>Ad Soyad</label>
      <input type="text" name="name"  value="{{old('name')}}">
      <label>Email</label>
      <input type="text" name="subject" value="{{old('subject')}}">
      <label>Password</label>
      <input type="password" name="pass">
      <label>Confirm Password</label>
      <input type="password" name="pass_confirmation">
      <select>
        <option value="name">Evli</option>
        <option value="name">Subay</option>
      </select>
      <button type="submit" name="button">Send</button>

    </form>
  </body>
</html>
