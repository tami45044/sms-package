<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Send sms</title>
</head>
<body>
  <h1>this is send sms 132</h1>
  <form action="{{ route('sms') }}" method="post">
      @csrf
      <input type="text" name="name" placeholder="name">
      <input type="email" name="mail" placeholder="email">
      <input type="submit" value="Submit">
  </form>

</body>
</html>
