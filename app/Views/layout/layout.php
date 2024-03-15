<html lang="cz">
 <head> 
        <title>titulek</title>
        <?= $this->include("layout/assets");?> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
 </head> 
 <body>

 <?= $this->include("layout/navbar");?>
 <!--Dynamický obsah -->
 <div class="container justify-content-center">
 <br>
 <?= $this->renderSection("content"); ?>
 
 </div>    
 <body>
</html>