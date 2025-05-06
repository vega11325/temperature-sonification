<?php

require('./classes/audioGen.php');
$audio = new audioGen(8000);

// Get data
$data = Array();
$dirname = './data/';
$dir = opendir($dirname);
$files = [];
while(($file = readdir($dir)) !== false){
  if(($file != '.') && ($file != '..')){
    $files[] = $file;    
  }
}

sort($files);

foreach($files as $file){
  echo $file."\n";
  $fh = fopen($dirname.$file,'r');
  $file = fread($fh,filesize($dirname.$file));
  $file = explode("\n",$file);
  foreach($file as $line){
    $line = explode(' ',$line);
    if(isset($line[1])){
      $point = $line[1];      
      $sample = intval(round(($point / 100) * 65536)); // Sets a value from 0 to 65536.
      $data[] = $point;
      $audio->addSamples(pack($audio->bf,$sample));
    }
  }
}

echo "Total Files:  ".count($files)." files \n";
echo "Data length:  ".count($data)." readings\n";
echo "Audio length: ".(strlen($audio->wavdata) / 2)." 16-bit samples\n";

// Build audio and other files
file_put_contents('./tmp.wav',$audio->buildWAV());
// passthru('sox tmp.wav temper.wav highpass 40 gain 12');  // Install SOX if you want to run this filtering stage.
// file_put_contents('./samples.dat',print_r($data,1));

echo "Audio file constructed.\n\n";

?>
