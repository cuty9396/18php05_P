<section class="content">
  <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <button class="btn btn-primary" onclick="location.href='index.php?controller=users&action=addUsers'">Thêm User</button>
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
                      ?>
                      <tr>
                      <td><?php echo  $row['id'] ?></td><td><?php echo  $row['name'] ?></td><td><?php echo  $row['email'] ?></td>
                      <td><img src='<?php  echo $image ?>' width=80px height = 50px></td><td><button class='btn btn-danger' name='delete_user' 
                        onclick='location.href="index.php?controller=users&action=deleteUsers&uid=<?php echo $row['id'] ?>"'>Xóa</button></td>
                      </tr>
                      <?php
                    }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
  </div>
</section>


