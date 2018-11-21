<section class="content">
  <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <button class="btn btn-danger" onclick="location.href='index.php?controller=users&action=addUsers'">Thêm User</button>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <!-- Table here -->
              <table class="table table-hover">
                <tbody>
                  <th>ID</th><th>Name</th><th>Email</th><th>Avatar</th>
                  <?php 
                    while ($row = $listUsers->fetch_assoc()) {
                      $image = 'public/uploads/'.$row['avatar'];
                      echo "<tr>";
                      echo "<td>".$row['id']."</td><td>".$row['name']."</td><td>".$row['email']."</td>
                      <td><img src='$image' width=80px height = 50px></td><td><button class='btn btn-danger'>Xóa</button></td>" ;
                      echo "</tr>";
                    }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
  </div>
</section>


