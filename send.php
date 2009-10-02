<?php
  $CONTACT_EMAIL = "edmontonanarchistbookfair@gmail.com";
  $whitelist = array('type', 'abstracts', 'name', 'affiliation', 'address', 'city', 'province', 'phone', 'fax', 'email', 'date', 'copresenters', 'promo_description', 'format', 'preferred_date', 'av_requirements', 'av_other_requirements', 'travelling_from', 'rides_offered', 'rides_needed', 'travel_subsidy', 'billeting_required', 'billeting_needs', 'childcare', 'tables_required', 'description');


  $content = 'Request received via eabf.ca';
  foreach($_POST as $title => $value)
  {
    if(in_array($title, $whitelist)) $content = $content."\n".$title.":\n".$value."\n";
  }

  $name            = $_POST['name'];
  $email           = $_POST['email'];
  $telephone       = $_POST['phone'];

  if ($email=='') {
    echo "<p>Please fill all the required fields<span>*</span> (specifically your EMAIL)</p>";
  }
  else {
        if (mail($CONTACT_EMAIL, 'EABF Table or Vendor Request', $content, "From: ".$name." <".$email.">", '-f'.$email)) {
		echo '<html><head><meta http-equiv="refresh" content="30;url=http://edmontonanarchistbookfair.ca"></head><body>';
                echo "<p>Submitting ok, server response:</p>";
                echo "<ul>";
                echo "<li>Name: ".$name."</li>";
                echo "<li>E-mail: ".$email."</li>";
                echo "<li>Telephone: ".$telephone."</li>";
                echo "</ul>";
		echo "Thanks for submitting your $type. We'll be bringing you back to the site in 30 seconds or you can <a href='http://edmontonanarchistbookfair.ca'>click here</a>";
                echo "</body></html>";
        } else {
                echo "<p>Was not able to submit message. Please try again later</p>";
        }
  }
?>

