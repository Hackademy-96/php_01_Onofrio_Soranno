<?php

// $num = readline("Quanti numeri vuoi inserire: ");
// echo "inserisci $num numeri:\n";
// $array1=[];
// // INSERIAMO SOLO GLI $num VALORI NELL' ARRAY $array1
// for($i=0 ; $i<$num ; $i++){
// $array1[]=intval(readline(""));
// }

// -Dato un array di numeri a scelta, scrivere un programma che calcoli la media solo dei numeri pari contenuti all’interno dell’array
// $count=0;
// $media=0;
// foreach($array1 as $pari){

// if($pari % 2==0){
//     $count++;
//      $media=$media + $pari;
//     // $media+=$pari;
// }
// }
// $media=$media/$count;
// echo $media;

// 2*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*

// -Dato un array contenente una serie di array associativi di utenti con nome, cognome e genere, per ogni utente stampare “Buongiorno Sig. Nome Cognome” o “Buongiorno Sig.ra Nome Cognome” o “Buongiorno Nome Cognome” a seconda del genere

// $people=[
// 'Nome' => ['Francesco','Lorenzo','Gioacchino','Sara', 'Sabrina'],
// 'Cognome' =>['Rossi','Bianchi','Verdi','Neri','Esposito'],
// 'Genere' =>['M','M','M','F','F']
// ];

// foreach($people as $index => $el){
//     for($i=0; $i<count($el); $i++){
//         if($el[$i]=="M"){
//             echo "Buongiorno sign.". $people["Nome"][$i].".\n";
//         }
//         if($el[$i]=="F"){
//             echo "Buongiorno signra.". $people["Nome"][$i].".\n";
//         }
//     }
// }

// 3*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*

// -Scrivere un programma che stampi in console tutti i numeri da uno a cento. Se il numero è multiplo di 3 stampare “PHP” al posto del numero; se multiplo di 5 stampare “JAVASCRIPT”; se multiplo di 3 e 5 contemporaneamente deve stampare “HACKADEMY96".

for($i=1; $i<=100; $i++){
if($i%15==0){
    echo "HACKADEMY96\n";
}else{
    if($i%5==0){
        echo "JAVASCRIPT\n";
    }else{
    if($i%3==0){
        echo "PHP\n";
    }else{
        echo "$i\n";
    }}
}
}

?>