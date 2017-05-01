<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Spider - Aracner Web Crawler</title>
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/agency.css" rel="stylesheet">
        <!-- Custom Fonts -->
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body id="page-top" class="index">
    
      <div class="container">
          <div class="row">
             <div class="col-lg-12">
                  <div class="form-group">
                    <label for="01">select Site</label>
                    <select multiple class="form-control" id="01">
                      <option selected="selected" value=" http://www.sebrae.com.br/canaldofornecedor">SEBRAE</option>

                    </select>
                  </div>
             </div>
          </div>
          <div class="row">
           <div class="col-lg-12">
            <?php 
              foreach ($poorFlyes as $key=>$value) {
            ?>
             <div class="panel panel-info">
                <div class="panel-body">
                  <?php
                    echo "<p><b>Name:</b>".$value['name']."-".$value['uf']."<br><b>Objective:</b>".$value['objective'].
                    "<br><b>starting_date:</b>".$value['starting_date']."<br>"."</p>";
                  ?>      
                </div>
             </div>
            <?php
               }
            ?>
            </div>
          </div>
      </div>
    
    </body>
</html>
