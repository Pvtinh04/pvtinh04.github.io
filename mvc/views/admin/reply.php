<?php 
                       
                       if (isset($_GET['id'])) {
                           $id = $_GET['id'];
                       }
                       foreach ($feedback as $value) {
                       if  ($value['FeedbackID'] == $id) {
                   ?>
<div class = "row">
<h2>Thông tin phản hồi khách hàng</h2>
<table class="table table-bordered table-hover " id="list_feedback">

                <thead>
                    <tr>
                    <th class="th-sm">Tên</th>
                        <th class="th-sm">Số điện thoại</th>
                        <th class="th-sm">Email</th>
                        <th class="th-sm">Phản hồi</th> 
                    </tr>
                </thead>
                <tbody>
                   
                            <tr>
                                <td><?php echo $value['Name']; ?></td>
                                <td><?php echo $value['Phone']; ?></td>
                                <td><?php echo $value['Email']; ?></td>
                                <td><?php echo $value['Content']; ?></td>  
                            </tr>
                   
                </tbody> 
                
            </table>
</div>
<div class="row">
<h2>Trả lời phản hồi</h2>
<form class="form-horizontal" action=""  method="post"  >
                
                
                
                <div class="form-group">
                    
                    <div class="col-sm-10">
                        <textarea type="text" class="form-control"  id="reply" name="reply"> </textarea>
                    </div>
                </div>
                <div class="form-group" style ="display:none;">
                    <label class="control-label col-sm-2"  >Email phản hồi:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control"   name="email" value= "<?php echo $value['Email']; ?>" />
                    </div>
                </div>
                <div class="form-group" style ="display:none;">
                    <label class="control-label col-sm-2"  >ID:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="id"  value = "<?php echo $value['FeedbackID']; ?>" />
                    </div>
                </div>
                <div class="form-group"  >
                    <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" value="Submit" class="btn btn-primary" name="sm_reply">Gửi</button>
                    <button type="reset" value="Reset" class="btn btn-danger">Reset</button>
                    </div>
                </div>
            </form>               



</div>
<?php
                        } 
                    }
                    ?>
                    <script type="text/javascript" language="javascript">
 
 CKEDITOR.replace( 'reply', {
   uiColor: '#d1d1d1'
});

</script>