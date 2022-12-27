
    <?php  require "nav.php" ;
    
        include "connection.php";
    ?>

        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto">
                <form method="POST" action="" >
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text"
                    class="form-control" name="name" id="name" aria-describedby="helpId" placeholder="">
                </div>

                <div class="form-group">
                  <label for="lastname">LastName</label>
                  <input type="text"
                    class="form-control" name="lastname" id="lastname" aria-describedby="helpId" placeholder="">
                </div>

                <div class="d-grid mt-2">

                <button type="submit" name="" id="" class="btn btn-success btn-block">Sbmit</button>
                    </div>

                
                </form>
                </div>
            </div>
        </div>


        <?php 


                if(isset($_POST['name']) && isset($_POST['lastname'])){

                    $name = $_POST['name'];
                    $lastName = $_POST['lastname'];
                    
                    
                    $sql  = "INSERT INTO users VALUES (NULL, '".$name."' ,'".$lastName."')";
                    $result =  mysqli_query($conn,$sql);
                    if($result){
                        echo "stored";
                    }else{
                        echo "Not Stored";
                    }

                    
                }

         ?>
   
        
</body>
</html>