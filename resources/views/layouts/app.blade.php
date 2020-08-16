<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/css/app.css" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>MyQuizMaker</title>

    <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
    <script>
      window.OneSignal = window.OneSignal || [];
      OneSignal.push(function() {
        OneSignal.init({
          appId: "c27fcc5d-f76e-48a6-99c8-018ecc00c78c",
        });
      });
    </script>

  </head>
  <body>
    <body>
      <div id="app">
        <app :errors="{{ $errors }}" :auth="{{ Auth::user() ?? '[]' }}"/>
      </div>
      <script src="/js/app.js"></script>
  </body>
</html>