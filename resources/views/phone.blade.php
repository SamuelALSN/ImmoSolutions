<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>phone</title>
</head>

<body>
<form method="POST" action="{{ route('send-sms') }}">
    <label> test </label>
    <input type="number" name="contact_number" id="contact"/>
    <button type="submit"> tester</button>
</form>
</body>
</html>
