<?php

$data = json_decode(file_get_contents("php://input"), true);
$data = $data['registro'];


// SQL
$insert = "insert into usuarios (
                      nombres,
                      apellidos,
                      correo,
                      password
                      ) values (
                      '{$data['nombres']}',
                      '{$data['apellidos']}',  
                      '{$data['correo']}',  
                      '{$data['password']}'                        
                      )";
if ($conn->query($insert)) {
  echo "ok";
} else {
  echo "no";
}

//$response = [
//  "status" => "ok",
//  "user" => [
//    "nombres"     =>  "Abraham Moises",
//    "apellidos"   =>  "Linares oscco",
//    "correo"      =>  "elnaufrago2009@gmail.com",
//    "password"    =>  "moiseslinar3s",
//    "repassword"  =>  "moiseslinar3s",
//    "empresa_ruc" =>  "10425162530",
//    "empresa_direccion" => "CM 40 LT 15 MZ 213 Ciudad Nueva"
//  ],
//  "empresa"   => [
//    "ruc" => "10425162531",
//    "razon" => "SURMOTRIZ S.R.L.",
//    "direccion" => "CM 40 LT 15 MZ 213 Ciudad Nueva"
//  ]
//];

//echo json_encode($data);


?>