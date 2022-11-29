     <!-- SEZIONE PER MESSAGGIO -->

     <!-- <section>
         <?php  
            if(isset($result) && $result){
                if($result){ ?>
         <div class="alert alert-success text-center">
             <h3 class="text-center">Password generata: <b><?php echo $password ?></b></h3>
             <p>La tua password ha <?php echo strlen($password) ?> caratteri</p>
         </div>
         <?php } else { ?>
         <div class="alert alert-danger">
             Errore <br />
             Formato non corretto
         </div>
         <?php }} ?>
     </section> -->

     <section class="container m-auto">
         <h1 class="text-white text-center">Password generata</h1>
         <div class="alert alert-success text-center m-3">
             <h3 class="text-center"><b><?php echo $password ?></b></h3>
             <p>La tua password ha <?php echo strlen($password) ?> caratteri</p>
         </div>
         <div class="btn btn-warning m-3">
             <a class="text-decoration-none text-white" href="index.php">Annulla</a>
         </div>
     </section>