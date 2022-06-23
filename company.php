<?php
  require_once ('navbar.php');

  $conn=mysqli_connect('localhost','root','','companies');

  $sql="SELECT * FROM member";

  $result=mysqli_query($conn,$sql);

?>



     <div class="container " style="margin-top:10%">
       <h1 class="mb-3 p-3 text-center" style="margin-top:20px; color: yellow; font-weight: bold; background-color: teal;">MEMBER COMPANIES</h1>
        

        <table class="table table-striped mb-5 table-hover">
          <thead>
            <tr>
              <th scope="col">#SNO</th>
              <th scope="col">Company Name</th>
              <th scope="col">Company City</th>
              <th scope="col">Member</th>
            </tr>
          </thead>
          <tbody>
            <?php 

               if($result->num_rows)
               {
                $a=1;
                while ($row=mysqli_fetch_assoc($result)) {
                  ?>

                  <tr>
                    <th scope="row"><?=$a  ?></th>
                    <td><?=$row['name']?></td>
                    <td><?=$row['city']?></td>
                    <td><?=$row['member']?></td>
                  </tr>

                  <?php
                  $a++;

                }
               }

             ?>
           
          </tbody>
        </table>

     </div>


 <?php 

     require_once('footer.php');
?>