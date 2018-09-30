<!DOCTYPE html>
<html>
    <head>
        <title>Make PDF</title>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    </head>
    <body class="w3-content" style="max-width:1200px"><br><br>
        <div class="w3-container w3-card-4">
          <div class="w3-container w3-center w3-purple ">
            <h2>Sample Invice Input</h2>
          </div>
          <form  action="control.php" method="POST">
            <br>
            <div class="w3-row-padding">
                <div class="w3-third">
                    <label>Invoice Number</label>
                    <input class="w3-input w3-border" name="invoice_num" type="text" placeholder="Invoice#">
                </div>
                <div class="w3-third">
                    <label>Invoice For</label>
                    <input class="w3-input w3-border" name="invoice_for" type="text" placeholder="Invoice For">
                </div>
                <div class="w3-third">
                    <label>Payment Terms</label>
                    <input class="w3-input w3-border" name="pay_terms" type="text" placeholder="Payment Terms">
                </div>
            </div>
            <h6><b>Bill to:</b></h6>
            <div class="w3-row-padding">
                <div class="w3-third">
                    <label>Name</label>
                    <input class="w3-input w3-border" name="bname" type="text" placeholder="Bill to name">
                </div>
                <div class="w3-third">
                    <label>Address</label>
                    <input class="w3-input w3-border" name="baddress" type="text" placeholder="Bill To Address">
                </div>
                <div class="w3-third">
                    <label>Email</label>
                    <input class="w3-input w3-border" name="email" type="email" placeholder="Email">
                </div>
            </div>
        <br><center>
            <input type="submit" class="w3-btn w3-white w3-center w3-border w3-border-purple w3-round-large">
        </center>
          </form>
        </div>
    </body>
</html>