<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="ktSe3LKlCKQQHwI8bstwS1SfsEHTIfkH7aZV9r5E">

    <!-- Styles -->
    <link href="http://site5/css/app.css" rel="stylesheet">
     <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
	
	<title>larachat</title>

	<style>
		html, body {
                background-color: #fff;
                color: #636b6f;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

     .paragraph {
   
    font-family:Raleway, 'sans-serif';
    font-style: normal;
    font-size: 20px;
    font-weight:600;
    letter-spacing: 3px;
    color: #231f20;
    text-transform: lowercase;
    line-height: 2.5em;
    padding:5rem;
    text-align: center;

    
}
	</style>
</head>
<body>
	<div id="app">
		
		<div class="container" id="chatty">
			<div class="paragraph">
			<p>Ask anything </p>
			</div>
		
		<chat-log :messages = "messages"></chat-log>
		<chat-composer v-on:messagesent="addMessage"></chat-composer>
		</div>
	</div>

<script src="http://site5/js/app.js"></script>
</body>
</html>