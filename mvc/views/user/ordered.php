<div class="container_fullwidth">
    <div class="container">
      <h3 id="ordered">Thông tin các đơn hàng đã đặt</h3>
      <?php  
        if (count($cusOrderInfor)>0) {
          $count = 0;
          foreach ($cusOrderInfor as $rowCusOrder) {
            $count += 1;
            $orderID = $rowCusOrder['OrderID'];
            $proOrder = $this->user->GetProductOrder_OrderID($orderID);
      ?>
              <h5><div class="order">Đơn hàng <?php echo $count; ?></div></h5>
              <table class="table table-hover table-bordered">
                <thead>
                  <tr>
                    <th>STT</th>
                    <th>Mã sản phẩm</th>
                    <th>Tên sản phẩm</th>
                    <th width="15%">Hình ảnh</th>
                    <th>Giá bán</th>
                    <th>Số lượng</th>
                    <th>Tổng tiền</th>
                    <th>Trạng thái</th>
                    <!-- chỉ những ai có tài khoản và hàng đã nhận mới được đánh giá sản phẩm -->
                    <?php  
                      if ($rowCusOrder['Status_order'] >= 3) {
                        echo "<th>Thao tác</th>";
                      }
                    ?>
                  </tr>
                </thead>
                <tbody>
                  <?php  
                    $stt = 0;
                    foreach ($proOrder as $rowProOrder) {
                      $stt += 1;
                  ?>
                      <tr>
                        <td><?php echo $stt; ?></td>
                        <td><?php echo $rowProOrder['ProductCode']; ?></td>
                        <td><?php echo $rowProOrder['ProductName']; ?></td>
                        <td>
                          <a href="index.php?page=pro_details&proID=<?php echo $rowProOrder['ProductID']; ?>">
                            <img src="public/images/products/<?php echo $rowProOrder['ProductImage']; ?>" alt="">  
                          </a>
                        </td>
                        <td><?php echo number_format($rowProOrder['Price']); ?></td>
                        <td><?php echo $rowProOrder['Quantity']; ?></td>
                        <td><?php echo number_format($rowProOrder['Total']); ?></td>
                        <td>
                          <?php  
                            if ($rowCusOrder['Status_order'] == 0) {
                              echo '<span style="color:gray">Đã hủy</span>';
                            }elseif ($rowCusOrder['Status_order'] == 1) {
                              echo '<span style="color:red">Chờ duyệt</span>';
                            }elseif ($rowCusOrder['Status_order'] == 2) {
                              echo '<span style="color:blue">Đang giao</span>';
                            }else{
                              echo '<span style="color:green">Đã nhận</span>';
                            }
                          ?>
                        </td>
                        <?php 
                          if ($rowCusOrder['Status_order'] >= 3) {
                            if ($rowProOrder['Status'] == 1) {
                        ?>
                              <td>
                                <a href="index.php?page=pro_details&proID=<?php echo $rowProOrder['ProductID']; ?>&orderID=<?php echo $orderID; ?>#Reviews">
                                  <button class="btn btn-danger btn-sm" <?php if($rowProOrder['Status'] != 1){ echo 'disabled';} ?>>Đánh giá</button>
                                </a>
                              </td>
                        <?php
                            }elseif ($rowProOrder['Status'] == 2) {
                        ?>
                              <td style="color: red">Đã đánh giá</td>
                        <?php
                            }
                          }
                        ?>
                      </tr>
                  <?php
                    }
                  ?>
                </tbody>
                <tfoot>
                  <tr>
                    <th colspan="<?php echo ($rowCusOrder['Status_order'] >= 3) ? '9' : '8'; ?>" style="padding-left: 30px; color: #f8635a"><h5><strong>Đơn giá : </strong> <?php echo number_format($rowCusOrder['TotalMoney']); ?>đ</h5></th>
                  </tr>
                </tfoot>
              </table>
      <?php
          }
        }else {
          echo "<h5 class='empty'>Bạn không có đơn hàng nào!</h5>";
        }
      ?>
    </div>
</div>