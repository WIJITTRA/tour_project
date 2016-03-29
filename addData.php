<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Hang Dong City</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/clean-blog.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- <script src="script.js"></script> -->
</head>
<style >
    .nav 
    {
        height:auto;    
        padding-right:50px;

        
    }
    .padtop
    {
        padding-top: 80px;
    }
#login-dp{
    min-width: 250px;
    padding: 14px 14px 0;
    overflow:hidden;
    background-color:rgba(255,255,255,.8);
}
#login-dp .help-block{
    font-size:12px    
}
#login-dp .bottom{
    background-color:rgba(255,255,255,.8);
    border-top:1px solid #ddd;
    clear:both;
    padding:14px;
}
#login-dp .social-buttons{
    margin:12px 0    
}
#login-dp .social-buttons a{
    width: 100%;
}
#login-dp .form-group {
    margin-bottom: 10px;
}
.btn-fb{
    color: #fff;
    background-color:#3b5998;
}
.btn-fb:hover{
    color: #fff;
    background-color:#496ebc 
}
.btn-tw{
    color: #fff;
    background-color:#55acee;
}
.btn-tw:hover{
    color: #fff;
    background-color:#59b5fa;
}
@media(max-width:768px){
    #login-dp{
        background-color: inherit;
        color: #fff;
    }
    #login-dp .bottom{
        background-color: inherit;
        border-top:0 none;
    }
}
body {
    background-color:pink;
}
.padtp
{
    padding-top: 100px;
}

</style>
<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="contact.html">Contact We</a>                        
                    </li>                                    
                     </div>
                </div>          
        <!-- /.container -->
    </nav>

<div class="container padtp">
    <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-4">
          <form method="post" enctype="multipart/form-data"  name="form1" id="form1" action="addDataTourism.php">
          <div class="form-group">
            <label for="nameTourism">ชื่อสถานที่</label>
            <input type="varchar" class="form-control" id="nameTourism" placeholder="nameTourism" type="text" name="nameTourism">
          </div>
          <div class="form-group">
            <label for="detailTourism">รายละเอียดสถานที่</label>
            <input type="text" class="form-control" id="detailTourism" placeholder="detailTourism" type="text" name="detailTourism">
          </div>
          <div class="form-group">
            <label for="video">Link Youtube</label>
            <input type="varchar" class="form-control" id="video" placeholder="video" type="text" name="video">
          </div>
          กรุณา กรอก รหัสประเภทสถานที่<br><br>
            1.  สถานที่ท่องเที่ยวทางธรรมชาติ = 1<br>
            2.  สถานที่ท่องเที่ยวทางวัฒนธรรม = 2 <br>
            3.  สถานที่ท่องเที่ยวทางฝีมือ = 3 <br>
            <br>
            <div class="form-group">
            <label for="idTypeTourism">รหัสประเภท</label>
            <input type="varchar" class="form-control" id="idTypeTourism" placeholder="idTypeTourism" name="idTypeTourism">
          </div>
          <div class="form-group">
            <label for="img">File input</label>
            <input type="file" id="img">
            <p class="help-block">อัพไฟล์รูป</p>
          </div>
          <div class="form-group">
            <label for="latitude">Latitude</label>
            <input class="form-control" id="latitude" placeholder="latitude" type="text" name="latitude">
          </div>
        <div class="form-group">
            <label for="longtitude">Longtitude</label>
            <input  class="form-control" id="longtitude" placeholder="longtitude" name="longtitude">
          </div>
            <input id="submit" type="submit" value="Submit" class="btn btn-default">
        </form></div>
          <div class="col-md-4"></div>
    </div>
 </div>

</form>


    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/clean-blog.min.js"></script>

</body>

</html>
