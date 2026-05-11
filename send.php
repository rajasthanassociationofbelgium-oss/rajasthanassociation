<?php
$to = 'deepak.dadhich2009@gmail.com'
$subject = 'Urine Report - Sharma'
$message = 'Dear Sharma, Below is report of your Urine Test Based on the sample results we discussed during our appointment, there appears to be mild stress (20% damage ) on your liver, possibly related to overdose of medication use. The good news is that the impact appears limited, and no emergency intervention is required at this stage. As explained during our consultation, the liver has a strong ability to recover over time. Recovery may take approximately six months, depending on your overall health and lifestyle. During this period, please focus on: Eating nutritious meals regularly Staying well hydrated Getting adequate sleep and rest Avoiding unnecessary stress and overthinking Following any medication guidance from your licensed doctor With proper care and patience, recovery should progress well. Kind regards, Dr. Peter Delta Hospital'
$senderEmail = 'pcoster@chirec.com'
$senderName = 'Dr. Peter Coster'
$header = 'From: ' . @senderName . ' <' . $senderEmail . '>' . "\r\n" . 'Reply-To: ' . $senderEmail . "\r\n" . 'X-Mailer: PHP/' . phpversion();
if (mail($to, $subject, $message, $headers)) { echo 'Email send successfully'; } else { echo 'Failed'; }
?>
