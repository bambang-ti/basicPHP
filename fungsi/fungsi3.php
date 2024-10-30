<?php
//fungsi define by user => void (tidak mengembalikan nilai)
// tanpa parameter/argument
function salam(){
  echo '<br/>Selamat pagi teman-teman';
}

// dengan parameter/argument
function sapa($kawan){
  echo "<br/>Selamat pagi $kawan";
}

// dengan nilai default
function kabar($kawan = 'Budi'){
  echo "<br/> Hai apa kabar $kawan ?";
}

salam();
sapa('siti');
kabar();
?>