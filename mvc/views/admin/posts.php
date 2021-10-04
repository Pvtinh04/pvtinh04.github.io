<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
           Danh mục
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="glyphicon glyphicon-user"></i>  <a href="index.php?page=cate_all">Danh mục</a>
            </li>
            <li class="active">
                <i class="fa fa-table"></i> Bài viết
            </li>
        </ol>
    </div>
</div>
<!-- /.row -->

<div class="row">
    <div class="col-lg-12 cate">
        <h2> Danh sách bài viết</h2>
        <a href="index.php?page=category&method=add_post">
        <button type="button" class="btn btn-default" name="add_post" id="add_post" data-toggle="modal" data-target="#modal_add_user">
            <span class="glyphicon glyphicon-plus"></span> Thêm
        </button>
         </a> 
        <?php 
            if (isset($_SESSION['note'])) {
        ?>
                <div id="note" class="note" >
                    <ol class="breadcrumb"><?php echo $_SESSION['note'];?></ol>
                </div>
        <?php
                unset($_SESSION['note']);
            }
        ?>
        <div id="show"></div>
        <div class="table-responsive" id="table_post">
            <table class="table table-bordered table-hover table-striped table-filter" id="list_post">
                <thead>
                    <tr>
                        <th class="th-sm">STT</th>
                        <th class="th-sm">Tên</th>
                        <th class="th-sm">Danh mục</th>
                        <th class="th-sm">Hình ảnh</th>
                        <th class="th-sm">Thông tin</th>    
                        <th class="th-sm">Hiển thị</th>
                        <th class="th-sm">Tác vụ</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $stt = 0;
                      
                        foreach ($new as $value) {
                            $stt += 1;
                    ?>
                            <tr>
                                <td><?php echo $stt; ?></td>
                                <td><?php echo $value['Title']; ?></td>
                                <td width=10%><?php foreach ($rs as $cate) {
                                    if ($value['NewCategoryID']==$cate['NewCategoryID']) {
                                     echo $cate['Name'];
                                    }
                                }
                              
                               ?></td>
                                <td><img width=80% src="../public/images/new/<?php echo $value['NewImage']; ?>" alt=""></td>
                                <td width=40%><?php echo $value['Description']; ?></td>
                               
                               
                                <td>
                                    <?php 
                                        if ($value['Status'] >0) {
                                            echo '<span class="glyphicon glyphicon-ok"></span>';
                                        }
                                    ?>
                                </td>
                                <td>
                                    <a href="index.php?page=category&method=edit_post&id=<?php echo $value['NewID'];  ?>">
                                        <span name="edit" class="action glyphicon glyphicon glyphicon-pencil"></span>
                                    </a>
                                    <span name="delete" class="action glyphicon glyphicon-remove remove_post" id="<?php echo $value['NewID']; ?>"></span>
                                </td>
                            </tr>
                    <?php
                        } 
                    ?>
                </tbody> 
                <tfoot>
                    <tr>
                    <th class="th-sm">STT</th>
                        <th class="th-sm">Tên</th>
                        <th class="th-sm">Danh mục</th>
                        <th class="th-sm">Hình ảnh</th>
                        <th class="th-sm">Thông tin</th>    
                        <th class="th-sm">Hiển thị</th>
                        <th class="th-sm">Tác vụ</th>
                    </tr>
                </tfoot>
            </table>

        </div>
        <a href="index.php?page=category&method=add_post">
        <button type="button" class="btn btn-default" name="add_post" id="add_post" data-toggle="modal" data-target="#modal_add_user">
            <span class="glyphicon glyphicon-plus"></span> Thêm
        </button>
         </a>               
    </div>
</div>