<button id="rzp-button1" style="display:none;">Pay</button>
<script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
  $(window).on('load', function() {
    $('#rzp-button1').click();
  });
</script>
<script>
<?php
$price = $_GET['total'];
 $total = $price * 100 ?>
var options = {
    "key": "rzp_live_FpzbeqMOCEpawT", // Enter the Key ID generated from the Dashboard
    "amount": '<?php echo $total ?>', // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
    "currency": "INR",
    "name": "ratnat rayajin mandir",
   // "order_id": "order_IluGWxBm9U8zJ8", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
    "handler": function (response){
        console.log(response);
         window.location.href = "https://ratnatrayajinmandir.com/admin/insert.php?act=razorpay&status=completed&order_id=<?php echo $_GET['order_id']; ?>"; 
        //alert(response.razorpay_payment_id);
        //alert(response.razorpay_order_id);
        //alert(response.razorpay_signature)
    },
    "prefill": {
        "name": '<?php echo $_GET['name'] ?>',
        "email": '<?php echo $_GET['email'] ?>',
        "contact": '<?php echo $_GET['phone'] ?>'
    },
    "notes": {
        "address": '<?php echo $_GET['address'] ?>'
    },
    "theme": {
        "color": "#3399cc"
    }
};
var rzp1 = new Razorpay(options);
rzp1.on('payment.failed', function (response){
     window.location.href = "https://ratnatrayajinmandir.com/admin/insert.php?act=razorpay&status=pending&order_id=<?php echo $_GET['order_id']; ?>"; 
});


document.getElementById('rzp-button1').onclick = function(e){
    rzp1.open();
    e.preventDefault();
}
</script>


<?php 