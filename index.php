<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Prabhakar Gupta">
    <meta name="description" content="Image-Parser is an awesome web-application that will allow you to extract all images on any website.">
    <meta name="keywords" content="Image Website Extractor, Parser, Download Images, Visible Image on Page, Developer Tool, Images from Website, Extract Images">
    <meta property="og:site_name" content="Image Parser"/>
    <meta property="og:title" content="Image Parser"/>
    <meta property="og:url" content="https://image-parser.herokuapp.com/"/>
    <meta property="og:type" content="website"/>
    <meta property="og:description" content="Image-Parser is an awesome web-application that will allow you to extract all images on any website.">
    <meta property="og:image" content="assets/img/image-parser.png"/>

    <title>Image Parser</title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
    <a href="https://www.github.com/prabhakar267/image-extractor" target="_blank"><img src="assets/img/right-dusk-blue@2x.png" class="github-fork" /></a>
    <header class="header-image">
        <div class="container">
            <h1><strong>Image Parser</strong></h1>
            <h3>Enter any URL and get all the images on the page</h3>
            <button type="button" class="action-buttons" data-toggle="modal" data-target="#aboutmodal">About</button>
            <a href="./api/image-parser.php?url=www.google.com" target="_blank"><button class="action-buttons">Get API</button></a>
        </div>
    </header>
    <hr>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form id="form-extractor" class="form-horizontal form-main" method="GET">
                    <input type="text" class="form-control" name="url" placeholder="Enter the URL from where images are to be extracted" required>
                    <br>
                    <button type="submit" id="submit" class="btn btn-lg btn-success">Extract</button>
                </form>
            </div>
        </div>
    </div>
    <div class="spinner" style="display:none;">
      <div class="rect1"></div> <div class="rect2"></div> <div class="rect3"></div> <div class="rect4"></div> <div class="rect5"></div>
    </div>
    <div id="stats" class="container" style="display:none;">
        <div class="row">
          <div class="col-xs-12 other-text text-center"></div>
          <div class="col-xs-12 text-center" id="download-file" >
              <a class="btn btn-lg btn-info" target="_blank" href="#">Download zip file</a>
          </div> 
        </div>
    </div>
		<div id="result" class="other-text">Welcome :)</div>
</div>

<div class="modal fade" id="aboutmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Image-Parser</h4>
            </div>
            <div class="modal-body text-justify">
                <strong>Image-Parser</strong> is a web-application which extracts all the images on any web link. You just need to enter the name (URL) of the website and you get all the images which are visible on that page.<br>It works for almost 75% of websites. (except for those with SSL certification)<br>
                <hr>
                For Developers<br>
                <small>
                It can also be used by other developers in their projects as an API. You simply need to provide the URL of the page you want to extract as the parameter and you will get the URLs of all the images as a JSON Array as a response.<br>
                <a href="extract.php?url=www.google.com" target="_blank">Sample</a>
                </small>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
    
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="assets/script.js" type="text/javascript" charset="utf-8"></script>
</body>
</html>
