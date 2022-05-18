<?php
class Utility {

    // check that JDS is Open
    public static function csOpen()
    {
        $currDay = date('l');
		$currDay = strtoupper($currDay);
		$closedDays = array('SATURDAY', 'SUNDAY');
		$isOpen = false;
		$currTime = date('h:i a');
		$open = "7:00 am";
		$close = "7:00 pm";
		$date1 = DateTime::createFromFormat('H:i a', $currTime);
		$date2 = DateTime::createFromFormat('H:i a', $open);
		$date3 = DateTime::createFromFormat('H:i a', $close);
				
		//compare times
		if ($date1 > $date2 && $date1 < $date3) {
			if (in_array($currDay, $closedDays)) {
				$isOpen = false;
			} else {
				$isOpen = true;	
			}
		} else {
			$isOpen = false;
		}

		return $isOpen;
    }

    public static function post_captcha($user_response)
    {
        $fields_string = '';
        $fields = [
            'secret' => getenv('GOOGLE_CAPTCHA_PRIVATE_KEY'),
            'response' => $user_response
        ];
        foreach ($fields as $key=>$value)
        $fields_string .= $key . '=' . $value . '&';
        $fields_string = rtrim($fields_string, '&');

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
        curl_setopt($ch, CURLOPT_POST, count($fields));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, True);

        $result = curl_exec($ch);
        curl_close($ch);

        return json_decode($result, true);
    }

}
?>