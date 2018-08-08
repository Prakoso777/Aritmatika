<?php

// digunakan untuk merubah text menjadi suara dengan maximal karakter 100
   $words = substr('hasil'.$operator.$bil1.'dengan'.$bil2.'adalah'.$hasil, 0, 100);

// Ganti karakter non-alfanumerik
// The spaces in the sentence are replaced with the Plus symbol
   $words = urlencode('hasil'.$operator.$bil1.'dengan'.$bil2.'adalah'.$hasil);

// nama file suara dibuat dengan MD5 hash
   $file  = md5($words);
  
// menyimpan file suara dalam folder suara dengan format .mp3
   $file = "sound/" . $file . ".mp3";

// proses membuat suara dari google translate
   if (!file_exists($file)) {
     $mp3 = file_get_contents(
        'https://translate.google.com/translate_tts?ie=UTF-8&tl=id-ID&client=tw-ob&q=' . $words);
     file_put_contents($file, $mp3);
   }
?>
<!–memberi media player untuk mengulang suara->
<audio controls="controls" autoplay="autoplay">
  <source src="<?php echo $file; ?>" type="audio/mp3" />
</audio>