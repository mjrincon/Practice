<!doctype html>
<html>
<head>
<title>A basic contact form</title>
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
 <h1>A basic contact form</h1>
 <form id="contact" method="post" class="form" role="form">
  <div class="row">
   <div class="col-xs-6 col-md-6 form-group">
    <input class="form-control" id="name" name="name" placeholder="Name" type="text"autofocus="">
   </div>
   <div class="col-xs-6 col-md-6 form-group">
    <input class="form-control" id="email" name="email" placeholder="Email" type="text">
   </div>
  </div>
  <textarea class="form-control" id="message" name="msg" placeholder="Message" rows="5"></textarea>
  <br>
  <div class="row">
   <div class="col-xs-12 col-md-12 form-group">
    <button class="btn btn-primary pull-right" type="submit">Submit</button>
   </div>
  </div>
 </form>
</div>
</body>
</html>