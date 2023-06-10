<?php include "header.php";


if(isset($_POST['submit'])){
    $cate_id=$_POST['cat_id'];
    $catname=$_POST['cat_name'];
    $sql1="update category set category_name='{$catname}' where category_id={$cate_id}";
        if(mysqli_query($conn,$sql1)){
            header("location:$hostname/admin/category.php");
        }else{
            echo "query failed";
        }
}?>
  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h1 class="adin-heading"> Update Category</h1>
              </div>
              <div class="col-md-offset-3 col-md-6">
                <?php
                        include "config.php";
                        $catid=$_GET['cat_id'];
                        $sql="select * from category where category_id={$catid}";
                        $result=mysqli_query($conn,$sql);
                        if(mysqli_num_rows($result)>0){
                            while($row=mysqli_fetch_assoc($result)){
                       
                ?>
                  <form action="<?php $_SERVER['PHP_SELF'];?>" method ="POST">
                      <div class="form-group">
                          <input type="hidden" name="cat_id"  class="form-control" value="<?php echo $row['category_id'];?>" placeholder="">
                      </div>
                      <div class="form-group">
                          <label>Category Name</label>
                          <input type="text" name="cat_name" class="form-control" value="<?php echo $row['category_name'];?>"  placeholder="" required>
                      </div>
                      <input type="submit" name="submit" class="btn btn-primary" value="Update" required />
                  </form>
                  <?php
                         }
                    }else{
                        echo "query failed";

                       
                    }
                  ?>
                </div>
              </div>
            </div>
          </div>
<?php include "footer.php"; ?>
