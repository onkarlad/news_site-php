<?php include "header.php"; ?>
<div id="admin-content">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h1 class="admin-heading">All Categories</h1>
            </div>
            <div class="col-md-2">
                <a class="add-new" href="add-category.php">add category</a>
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
                    $sql="select * from category limit {$offset},$limit";
                    $result=mysqli_query($conn,$sql) or die("query failed");
                    if(mysqli_num_rows($result)>0){

                    ?>
                <table class="content-table">
                    <thead>
                        <th>S.No.</th>
                        <th>Category Name</th>
                        <th>No. of Posts</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </thead>
                    <tbody>
                    <?php
                        while($row=mysqli_fetch_assoc($result)){
                        ?>
                        <tr>
                            <td class='id'><?php echo $row['category_id'];  ?></td>
                            <td><?php echo $row['category_name'];  ?></td>
                            <td><?php echo $row['post'];  ?></td>
                            <td class='edit'><a href='update-category.php?cat_id=<?php echo $row['category_id'];  ?>'><i class='fa fa-edit'></i></a></td>
                            <td class='delete'><a href='delete-category.php?cat_id=<?php echo $row['category_id'];  ?>'><i class='fa fa-trash-o'></i></a></td>
                        </tr>
                        <?php
                            }
                          ?>
                    </tbody>
                </table>
                <?php
                    }
                    $sql1="select * from category";
                    $result1=mysqli_query($conn,$sql1) or die("query failed");
                    if(mysqli_num_rows($result1)>0){

                        $total_records=mysqli_num_rows($result1);
                        $total_pages=ceil($total_records / $limit);
                   
                  echo '<ul class="pagination admin-pagination">';
                        if($page_number>1){
                            echo '<li><a href="category.php?page='.($page_number-1).'">Prev</a></li>';
                        }
                  for ($i=1; $i <= $total_pages; $i++) { 
                    if($i==$page_number){
                        $active="active";
                    }else{
                        $active="";
                    }
                    echo '<li class="'.$active.'"><a href="category.php?page='.$i.'">'.$i.'</a></li>';
                  }
                  if($total_pages>$page_number){
                    echo '<li><a href="category.php?page='.($page_number+1).'">Next</a></li>';
                  }
                  echo '</ul>';
                }
                  ?>
            </div>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>
