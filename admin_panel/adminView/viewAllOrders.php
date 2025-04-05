<div id="ordersBtn" >
  <h2>Order Details</h2>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>id</th>
        <th>Username</th>
        <th>Food</th>
        <th>Price</th>
        <th>Date</th>
        <th>Time</th>
        <th>Order Status</th>
        <th>Action</th>
      </tr>
    </thead>
    <?php
      include_once "../config/dbconnect.php";
      $sql="SELECT * from orderd";
      $result=$conn-> query($sql);
      
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
    ?>
       <tr>
          <td><?=$row["id"]?></td>
          <td><?=$row["username"]?></td>
          <td><?=$row["food"]?></td>
          <td><?=$row["price"]?></td>
          <td><?=$row["date"]?></td>
          <td><?=$row["time"]?></td>
          <td class="order-status" data-order-id="<?=$row['id']?>" contenteditable="true"><?=$row["order_status"]?></td>
          <td><button class="btn btn-primary save-order-status" data-order-id="<?=$row['id']?>">Save</button></td>
        </tr>
    <?php
        }
      }
    ?>
  </table>
</div>

<script>
  document.querySelectorAll('.save-order-status').forEach(function(button) {
    button.addEventListener('click', function() {
      var orderId = this.dataset.orderId;
      var newStatus = document.querySelector('.order-status[data-order-id="' + orderId + '"]').innerText.trim();

      // Submit form to update order status
      var form = document.createElement('form');
      form.setAttribute('method', 'POST');
      form.setAttribute('action', 'adminView/update_order_status.php');

      var inputOrderId = document.createElement('input');
      inputOrderId.setAttribute('type', 'hidden');
      inputOrderId.setAttribute('name', 'orderId');
      inputOrderId.setAttribute('value', orderId);
      form.appendChild(inputOrderId);

      var inputOrderStatus = document.createElement('input');
      inputOrderStatus.setAttribute('type', 'hidden');
      inputOrderStatus.setAttribute('name', 'orderStatus');
      inputOrderStatus.setAttribute('value', newStatus);
      form.appendChild(inputOrderStatus);

      document.body.appendChild(form);
      form.submit();
    });
  });
</script>
