<?php
  
  $string='hello world';
  if(preg_match('/hello/',$string))
  {
   echo "Matched";
  }
  else
  {
   echo "Not Matched";
  }echo '<br>';

  $string1='world hello is 123 heelo and he12o';
  if(preg_match('/hello$/',$string))
  {
   echo "Matched";
  }
  else
  {
   echo "Not Matched";
  }
  echo '<br>';



   if(preg_match('/hello$/',$string1))
  {
   echo "Matched";
  }
  else
  {
   echo "Not Matched";
  }echo '<br>';

if(preg_match('/(he((a-z)|(A-Z)|(0-9)*o))/',$string1,$matches))
  {
   echo "Matched";
  }
  else
  {
   echo "Not Matched";
  }echo '<br>';

  if(preg_match('/(he.o){1,5}/',$string1))
  {
   echo "Matched";
  }
  else
  {
   echo "Not Matched";
  }echo '<br>';

