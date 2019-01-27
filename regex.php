<?php
  echo 'Validate number:    '.'/^[0-9]+$/'.'<br>';
  $string='1234567891';
  echo 'String:'.$string;echo '<br>';
  if(preg_match('/^[0-9]+$/',$string))
  {
   echo "Matched";
  }
  else
  {
   echo "Not Matched";
  }echo '<br>';echo '<br>';


  echo 'Validate mobile number:     '.'/(^9[0-9]{9})$/';echo '<br>';
  $string='9834567891';
  echo 'String:'.$string;echo '<br>';
  if(preg_match('/(^9[0-9]{9})$/',$string,$Matched))
  {
   echo "Matched";
  }
  else
  {
   echo "Not Matched";
  }echo '<br>';echo '<br>';




  echo 'Validate Name:    '.'/^([a-z\sA-Z])+$/';echo '<br>';
  $string='Upu Adhikari';
  echo 'String:'.$string;echo '<br>';
  if(preg_match('/^([a-z\sA-Z])+$/',$string))
  {
   echo "Matched";
  }
  else
  {
   echo "Not Matched";
  }echo '<br>';echo '<br>';



  echo 'Validate Email:   ';echo "/^(([a-zA-Z0-9])+([a-zA-Z\.0-9])*[\@]{1}([a-zA-Z])+(\.)([a-zA-Z])+)$/";echo '<br>';
  $string='upuadhikari123.f@gmail.np';
  echo 'String:'.$string;echo '<br>';
  if(preg_match('/^(([a-zA-Z0-9])+([a-zA-Z\.0-9])*[\@]{1}([a-zA-Z])+(\.)([a-zA-Z])+)$/',$string))
  {
   echo "Matched";
  }
  else
  {
   echo "Not Matched";
  }echo '<br>';echo '<br>';


  echo 'Validate alphanumeric,dashes,underscore:    '.'/^([a-zA-z\-\s])+$/'.'<br>';
  $string='a -b';
  echo 'String:'.$string;echo '<br>';
  if(preg_match('/^([a-zA-z\-\s])+$/',$string))
  {
   echo "Matched";
  }
  else
  {
   echo "Not Matched";
  }echo '<br>';echo '<br>';


  
  echo 'Validate number between 0-99:    '.'/^[0-9]+$/'.'<br>';
  $string='12';
  echo 'String:'.$string;echo '<br>';
  if(preg_match('/^[0-9]{1,2}$/',$string))
  {
   echo "Matched";
  }
  else
  {
   echo "Not Matched";
  }echo '<br>';echo '<br>';


