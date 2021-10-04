<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
          Phản hồi khách hàng
        </h1>
    </div>
</div>
<!-- /.row -->

<div class="row">
    <div class="col-lg-12 cate">
        <h2> Danh sách phản hồi khách hàng</h2>
        
       
        <div id="show"></div>
        <div class="table-responsive" id="table_feedback">
            <table class="table table-bordered table-hover table-striped table-filter" id="list_feedback">
                <thead>
                    <tr>
                        <th class="th-sm">STT</th>
                        <th class="th-sm">Tên</th>
                        <th class="th-sm">Số điện thoại</th>
                        <th class="th-sm">Email</th>
                        <th class="th-sm">Phản hồi</th> 
                        <th class="th-sm">Ngày phản hồi</th>
                        <th class="th-sm">Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $stt = 0;
                      
                        foreach ($feedback as $value) {
                            $stt += 1;
                    ?>
                            <tr>
                                <td width =1%><?php echo $stt; ?></td>
                                <td><?php echo $value['Name']; ?></td>
                                <td><?php echo $value['Phone']; ?></td>
                                <td><?php echo $value['Email']; ?></td>
                                <td><?php echo $value['Content']; ?></td>
                                <td><?php echo $value['CreatDate']; ?></td>
                                <td>
                                   <?php 
                                        if ($value['Status'] ==1 ) {
                                            ?>
                                             <a href="index.php?page=info&method=reply&id=<?php echo $value['FeedbackID'] ?>">
                                            <button type="button" class="btn btn-default" name="reply" id="reply" >
                                                <span class="glyphicon glyphicon-share-alt"></span>Chưa trả lời
                                            </button>
                                            </a> 
                                        <?php    
                                        } else { ?> 
                                            <button click = "none" type="" class="btn btn-default" name="reply" id="reply" >
                                                <span class="glyphicon "></span>Đã trả lời
                                            </button>
                                        <?php
                                            # code...
                                        }
                                        
                                   ?>
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
                        <th class="th-sm">Tên</th>
                        <th class="th-sm">Số điện thoại</th>
                        <th class="th-sm">Email</th>
                        <th class="th-sm">Phản hồi</th> 
                        <th class="th-sm">Ngày phản hồi</th>
                        <th class="th-sm">Hành động</th>
                    </tr>
                </tfoot>
            </table>

        </div>
                  
    </div>
</div>