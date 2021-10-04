<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
          Chính sách 
        </h1>
    </div>
</div>
<!-- /.row -->

<div class="row">
    <div class="col-lg-12 cate">
        <h2> Danh sách chính sách</h2>
        
       
        <div id="show"></div>
        <div class="table-responsive" id="table_feedback">
            <table class="table table-bordered table-hover table-striped table-filter" id="list_feedback">
                <thead>
                    <tr>
                        <th class="th-sm">STT</th>
                        <th class="th-sm">Tên chính sách</th>
                        <th class="th-sm">Đề mục</th>
                       
                        <th class="th-sm">Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $stt = 0;
                      
                        foreach ($about as $value) {
                            $stt += 1;
                    ?>
                            <tr>
                                <td width =1%><?php echo $stt; ?></td>
                                <td><?php echo $value['Meta Title']; ?></td>
                                <td><?php echo $value['Title']; ?></td>
                              
                                
                                <td>
                                <a href="index.php?page=info&method=edit_about&id=<?php echo $value['AboutID'];  ?>">
                                        <span name="edit" class="action glyphicon glyphicon glyphicon-pencil"></span>
                                    </a>
                                </td>
                            </tr>
                    <?php
                        } 
                    ?>
                </tbody> 
                <tfoot>
                    <tr>
                    <tr>
                    <th class="th-sm">STT</th>
                        <th class="th-sm">Tên chính sách</th>
                        <th class="th-sm">Đề mục</th>
                        
                        <th class="th-sm">Hành động</th>
                    </tr>
                </tfoot>
            </table>

        </div>
                  
    </div>
</div>