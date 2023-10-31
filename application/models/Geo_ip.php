
<?php
class Geo_ip extends CI_Model {

   
    public function IPtoLocation($IP_AddressList)
    {
       
        try {

            //personal API KEY
             $API_KEY="41606853f390cb46ce612995ec9403e72bbda6bf";
                // $API_KEY="p7482c8443dcf2a5acbe278ed4b11456909165e9";
            //  $IP_AddressList = array()

            //API 
            $API="https://api.db-ip.com/v2/".$API_KEY."/".$IP_AddressList;

            //connection
		    $curl=curl_init();

            //set cURL options
		    curl_setopt($curl,CURLOPT_URL,$API);//set API
		    curl_setopt($curl,CURLOPT_CUSTOMREQUEST,"GET");//when you use post request with parameters
		    curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);//avoid curl success message

            // execute cURL
		    $response=curl_exec($curl);

            if(curl_error($curl))
		    {
			    log_message('error', curl_error($curl));
			    return -1;
		    }
            else {
              
                return $response;
            }
            
            //close connection
		    curl_close($curl);

        }
        catch(Exception $e) {	
            log_message('error', $e->getMessage());
            return -1;
        }
    }


}
?>