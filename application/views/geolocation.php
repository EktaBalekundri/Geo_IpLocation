
<!DOCTYPE html>
<html lang="en-US">
<head>
    <title>Geolocation</title>
    <link rel="stylesheet" href="<?php echo base_url();?>dist/style.css">
    <meta charset="utf-8">
</head>
<body>
    <div class="wrapper">
        <div class="container">
            <div class="form">
                <form action="<?php echo base_url();?>Geolocation/getGeoLocationInfo" method="post">
                    <label>IP Address:</label>
                    <input type="text" name="ip_address" value="" required>
                    <input type="submit" name="submit" value="Get geolocation Data" class="btn"><br><br>
                    <textarea rows="20" cols="50">
                 
                    <?php
                        if(isset($info))
                        {
                               
                        echo $info["geoLocationInfo"];
                        
                        }        
                                        
                    ?> 
                    </textarea>

                 
                </form>

     
            </div>
        </div>
    </div>
</body>
</html>

