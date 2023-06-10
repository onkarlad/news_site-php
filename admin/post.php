<?php include "header.php"; ?>
  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-10">
                  <h1 class="admin-heading">All Posts</h1>
              </div>
              <div class="col-md-2">
                  <a class="add-new" href="add-post.php">add post</a>
              </div>
              <div class="col-md-12">
                <?php
                    include "config.php";
                   
                    if(isset( $_GET['page'])){
                        $page_number = $_GET['page'];
                    }
                    else{
                        $page_number = 1; 
                    }
                    $limit=3;
                    $offset=($page_number-1)*$limit;
                   if($_SESSION["user_role"]=='1'){
                    $sql="select * from post left join user on post.author=user.user_id left join category on post.category=category.category_id limit {$offset},$limit";
                   }elseif($_SESSION["user_role"]=='0'){
                    $sql="select * from post left join user on post.author=user.user_id left join category on post.category=category.category_id where post.author={$_SESSION['user_id']} limit {$offset},$limit";
                   }
                    $result=mysqli_query($conn,$sql);

                    if(mysqli_num_rows($result)>0){

                    ?>
                  <table class="content-table">
                      <thead>
                          <th>S.No.</th>
                          <th>Title</th>
                          <th>Category</th>
                          <th>Date</th>
                          <th>Author</th>
                          <th>Edit</th>
                          <th>Delete</th>
                      </thead>
                      <tbody>
                        <?php
                        while($row=mysqli_fetch_assoc($result)){
                        ?>
                          <tr>
                              <td class='id'><?php echo $row['post_id'] ?></td>
                              <td><?php echo $row['title'] ?></td>
                              <td><?php echo $row['category_name'] ?></td>
                              <td><?php echo $row['post_date'] ?></td>
                              <td><?php echo $row['username'] ?></td>
                              <td class='edit'><a href='update-post.php?id=<?php echo $row['post_id'] ?>'><i class='fa fa-edit'></i></a></td>
                              <td class='delete'><a href='delete-post.php?id=<?php echo $row['post_id'] ?>&catid=<?php echo $row['category'] ?>'><i class='fa fa-trash-o'></i></a></td>
                          </tr>
                          <?php
                          }
                          ?>
                      </tbody>
                  </table>
                  <?php
                  }

                  $sql1="select * from post";
                    $result1=mysqli_query($conn,$sql1) or die("query failed");
                    if(mysqli_num_rows($result1)>0){

                        $total_records=mysqli_num_rows($result1);
                        $total_pages=ceil($total_records / $limit);
                   
                  echo '<ul class="pagination admin-pagination">';
                        if($page_number>1){
                            echo '<li><a href="post.php?page='.($page_number-1).'">Prev</a></li>';
                        }
                  for ($i=1; $i <= $total_pages; $i++) { 
                    if($i==$page_number){
                        $active="active";
                    }else{
                        $active="";
                    }
                    echo '<li class="'.$active.'"><a href="post.php?page='.$i.'">'.$i.'</a></li>';
                  }
                  if($total_pages>$page_number){
                    echo '<li><a href="post.php?page='.($page_number+1).'">Next</a></li>';
                  }
                  echo '</ul>';
                }    
                       ?>
                 
                      
                     
                 
              </div>
          </div>
      </div>
  </div>
<?php include "footer.php"; ?>
