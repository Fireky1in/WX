<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title>微信安全支付</title>
</head>
<body>
    </br></br>
    <div align="center">
        <form  action="/WX/index.php/Wxpay/micropay" method="post">
            <p>请输入微信刷卡界面的一维码:</p>
            <p><input type="text" name="auth_code" value=""></p>
            <button type="submit">提交</button>
        </form>
    </div>
        
    <div align="center">
        <p>订单号：<?php echo $out_trade_no; ?></p>
    </div>
    
    <div align="center">
    <table>
        <td>
        <form action="./order_query.php" method="post">
            <input name="out_trade_no" type='hidden' value="<?php echo $out_trade_no; ?>">
            <button type="submit" >查询订单状态</button>
        </form>
        </td>
        
        
        <td>
        <form  action="./refund.php" method="post">
            <input name="out_trade_no" type='hidden' value="<?php echo $out_trade_no; ?>">
            <input name="refund_fee" type='hidden' value="1">
            <button type="submit" >申请退款</button>
        </form>
        </td>
        
        <td>
        <form  action="./reverse.php" method="post">
            <input name="out_trade_no" type='hidden' value="<?php echo $out_trade_no; ?>">
            <button type="submit" >冲正</button>
        </form>
        </td>
    </table>
    </div>
        
    <br>
    <div align="center">
        <a href="../index.php">返回首页</a>
    </div>

</body>
</html>