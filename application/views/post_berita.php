<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
    background-color: #ffffff;
    font-family: "Lato", sans-serif;
}

.sidenav {
    width: 150px;
    position: fixed;
    z-index: 1;
    top: 70px;
    left: 0px;
    background: #f2d216;
    overflow-x: hidden;
    padding: 200px 0;
}

.sidenav a {
    padding: 6px 0px 6px 16px;
    text-decoration: none;
    font-size: 20px;
    color: #121010;
    display: block;
}

.sidenav a:hover {
    color: #064579;
}

.main {
    margin-left: 140px; /* Same width as the sidebar + left position in px */
    font-size: 28px; /* Increased text to enable scrolling */
    padding: 0px 10px;
}

@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
}
</style>

    <title>Post Berita</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css'?>">
</head>
<body>
	
    <div class="container">
        <div class="col-md-8 col-md-offset-2">
            <h2>Article Update</h2><hr/>
            <form action="<?php echo base_url().'post/insert'?>" method="post" enctype="multipart/form-data">
                <input type="text" name="judul" class="form-control" placeholder="Judul berita" required/><br/>
                <textarea id="ckeditor" name="berita" class="form-control" required></textarea><br/>
                <input type="text" name="slug" class="form-control" placeholder="slug" required/><br/>
                <input type="text" name="status" class="form-control" placeholder="status" required/><br/>
                <input type="file" name="filefoto" required><br>
                <button class="btn btn-primary btn-lg" name="postarticle" type="submit">Post Artikel</button>
            </form>
        </div>       
    </div>
     
     
    <script src="<?php echo base_url().'assets/jquery/jquery-3.3.1.min.js'?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
    <script src="<?php echo base_url().'assets/ckeditor/ckeditor.js'?>"></script>
    <script type="text/javascript">
      $(function () {
        CKEDITOR.replace('ckeditor');
      });
    </script> 
</body>
</html>