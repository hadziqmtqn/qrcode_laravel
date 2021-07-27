
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    
<div class="visible-print text-center">
	<h1>Laravel 5.7 - QR Code Generator Example</h1>
     
    {!! QrCode::size(250)->generate('ItSolutionStuff.com'); !!}
     
    <p>example by ItSolutionStuf.com.</p>
</div>
    <div class="visible-print text-center">
    {!! QrCode::size(100)->generate(Request::url()); !!}
    <p></p>
    {!! QrCode::generate('http://www.simplesoftware.io'); !!}
    <p>Scan me to return to the original page.</p>
</div>
</body>
</html>