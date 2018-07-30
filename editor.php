<?php include("koneksi.php"); ?>
<script src="assets/ckeditor/ckeditor.js"></script>

<form action="" method="post">
<label>Judul</label>
<input name="judul" type="text" size="80">
<p></p>
<label>Berita</label>
<textarea id="editor1" name="editor1" rows="10" cols="80"></textarea>
<p></p>
<input type="submit" name="posting" value="POSTING">
</form>         

<script type="text/javascript">

if ( typeof CKEDITOR == 'undefined' )
{
    document.write(
        'CKEditor not found');
}
else
{
    var editor = CKEDITOR.replace( 'editor1' );    

    
    CKFinder.setupCKEditor( editor, '' ) ;

    
}
</script>

<?php
if(isset($_POST['posting']))
{
    $q=mysql_query("Insert into berita ('judul_berita','berita') values 
    ('".$_POST['judul']."','".$_POST['editor1']."')") or die(mysql_error());
    
    if($q)
    {
        echo "<script>alert('BERHASIL ditambahkan')</script>";
    }
}
?>