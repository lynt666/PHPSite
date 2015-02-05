<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	
	<title><?php echo $title; ?></title>

    <!-- 
        
        BOOTSTRAP
                      
     -->
     
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="css/normalize.css" rel="stylesheet" type="text/css"> 
    
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css"> 
    
    <link href="css/bootstrap-theme.css" rel="stylesheet" type="text/css"> 

    <!-- 
        
        Format > CSS Styles > Attach Style Sheet... 
            Browse...
                Choose the css/style.css file 
                    Click OK              
     -->
    
	<link href="css/calendar.css" rel="stylesheet" type="text/css">
	
	<link href="css/style.css" rel="stylesheet" type="text/css">

</head>

<body>


    <div class="header container-fluid">

         <div class="row">

            <div class="col-md-6">
                <h1><?php echo $appname; ?></h1>
            </div>

            <div class="col-md-6">

            </div>

        </div>

    </div>


    <nav class="navbar navbar-default">
    
          <div class="container">
    
    
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <?php // <a class="navbar-brand" href="#"></a> ?>
            </div>

   
            <div class="collapse navbar-collapse" id="nav--main">
              
               <ul class="nav navbar-nav">
                
                <li><a href="/index.php">Home <span class="sr-only">(current)</span></a></li>
                
                <li><a href="/about.php">About</a></li>
                
                <li><a href="/gallery.php">Gallery</a></li>
                
                <li><a href="/events.php">Events</a></li>
              
              </ul>
              
              <ul class="nav navbar-nav navbar-right">
                <li><a href="/contact.php">Contact</a></li>
              </ul>
            
            </div><!-- /.navbar-collapse -->
            
          </div><!-- /.container-fluid -->
    
    </nav>
   
    <div class="main container">