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
          <form  action="copy_site.php" method="POST">
            <br>
            <div class="w3-padding-16">
                <div class="w3-padding-16">
                    <label>URL Of Page to be copy</label>
                    <input class="w3-input w3-border" name="url" type="text" placeholder="https://site_to_be_copied.com/page">
                </div>                
                <div class="w3-padding-16">
                    <label>Out put file name</label>
                    <input class="w3-input w3-border" name="out" value="index" type="text" placeholder="">
                </div>
            </div>
            <center>
            <input type="submit" class="w3-btn w3-white w3-center w3-border w3-border-purple w3-round-large">
        </center>
          </form>
        </div>
    </body>
</html>