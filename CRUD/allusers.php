
    <?php 
    include "nav.php";
    include "connection.php";


    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn,$sql);

    ?>
    
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Lastname</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($row = mysqli_fetch_assoc($result)){  ?>
                        <tr>
                            <td scope="row"> <?php echo $row['id'] ?></td>
                            <td> <?php echo $row['name'] ?></td>
                            <td> <?php echo $row['lastname'] ?></td>
                        </tr>
                        <?php  }?>
                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>
