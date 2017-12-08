<?php

use Carbon\Carbon;

function getUTCDates($timezone){
  $array['utcTodayStart'] = Carbon::today($timezone)->timezone('UTC');
  $array['utcTodayEnd']   = Carbon::today($timezone)->endOfDay()->timezone('UTC');

  return $array;
}

function localizedDate($date, $timezone){
  $localized = $date->timezone($timezone);

  return $localized;
}

function get_thumbnail($path, $size='medium'){
  return str_replace('.', '_'.$size.'.', $path);
}

function get_time($date)
{
  return $date->format('g:i A');
}

function get_format_date($date)
{
  return $date->format('Y-m-d');
}

function get_date($date)
{
  return $date->toDateString();
}

function get_month_name($int){
  $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");

  return $meses[$int-1];
}

function get_note_date($date)
{
  $month = get_month_name($date->format('m'));
  $day  = $date->format('d');
  $year = $date->format('Y');
  // dd()
  return $day . ' de ' . $month . ' del ' . $year;

}
