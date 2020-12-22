<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Contact Page</title>
</head>
<body>
    <h1>Contact Us</h1>
<form action="{{route('contact')}}" method="post">
    @csrf
    <input type="text" name="name" placeholder="Your name please">
    <input type="email" name="email" placeholder="Your email please">
    <textarea name="message" cols="30" rows="10" placeholder="Your query please"></textarea>
    <input type="submit"value="Submit">
</form>
</body>
</html>
