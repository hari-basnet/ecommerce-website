<?php
    require_once 'core/init.php';
    include 'includes/head.php';

    $sql = "SELECT * FROM products";
    $result = $db->query($sql);

 ?>


     <div class="row">
        <div class="col-md-6">  </div>
        <div class="col-md-6">


     <table class="table table-default table-bordered">
       <thead>
         <th>tile</th>
         <th>Price</th>
         <th>List Price</th>
          </thead>
          <tbody>
            <?php while($jhos = mysqli_fetch_assoc($result)): ?>
            <tr class="bg-primary">
              <td><?= $jhos['title'];?></td>
            </tr>
          <?php endwhile; ?>
        </tbody>
      </table>
     </div>
  </div>




   </body>
 </html>
