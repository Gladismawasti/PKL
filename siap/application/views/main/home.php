<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style type="text/css">
body{margin:0;padding:0;}
#contact {
    position:absolute;
    right:10px;
    bottom:10px;
    font-size:12px;
    margin-right: 10px;
}
#contact #button{
    position:relative;
    right:0;
    bottom:0;
    padding:0 0 0 450px;
}
#contact #button a{
    padding-left:5px;
    padding-right:5px;
    padding-top:5px;
    text-align:right;
    background: #eeffee;
    cursor:pointer;
    font-size: 15px;
}
#contact form{
    border:1px solid #666;
    background:#dfdfdf;
    padding:10px;
    display:none;
}
form label {float:left;width:80%;}
form input[type=text] {float:left;width:80%;}
form input[type=text] {float:left;width:80%;}       
    </style>

</head>
<body>



<div class="container">
  <div class="jumbotron">
    <h1>Bootstrap Tutorial</h1>      
    <p>Bootstrap is the most popular HTML, CSS, and JS framework for developing responsive, mobile-first projects on the web.</p>
  </div>
  <p>This is some text.</p>      
  <p>This is another text.</p>      
</div>

<div id="contact">
    <div id="button"><a>Hubungi Kami</a></div>
    <form>
        Beberapa orang malu untuk saling mengenal satu sama lain, tolong kirimi saya pesan-pesan :
        <div>
            <label for="name">Name<i class="icon-star"></i></label>
            <input id="name" name="name" type="text" />
        </div>
        <div>
            <label for="email">E-mail<i class="icon-star"></i></label>
            <input id="email" name="email" type="text" />
        </div>    
        <div>
            <label for="email">Telepon<i class="icon-star"></i></label>
            <input id="email" name="email" type="text" />
        </div>    
        <div>
            <label for="message">Tinggalkan Pesan<i class="icon-star"></i></label>
            <textarea id="message" name="message" cols="" rows=""></textarea>
        </div>                            
        <div>
            <input id="kirim" name="send" type="submit" value="Kirim" />
        </div>
    </form>    
</div>

<!DOCTYPE html>
<html>
<head>
    <title>Bootstrap Part 12 : Membuat Navigation bar Bootstrap</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="https://www.malasngoding.com">Malas Ngoding</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="https://www.malasngoding.com">Home</a></li>
                <li><a href="#">Profil</a></li>
                <li><a href="#">Tentang Kami</a></li> 
                <li><a href="#">Kontak</a></li> 
            </ul>
            <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Daftar</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>
    </nav>
    
    <h1>Membuat Navigation bar Bootstrap | www.malasngoding.com</h1> 
 
</body>
</html>



 <script type="text/javascript">
	$(document).ready(function(){
    $('#contact a').on('click',function(){
        $('#contact form').slideToggle('slow');
    });
});
</script>

</body>
</html>
