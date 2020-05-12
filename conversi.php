<?php
//Copyright WibuCode
system("clear");
echo "  / ____/___  ____ _   _____  __________(_)\n";
echo " / /   / __ \/ __ \ | / / _ \/ ___/ ___/ /\n";
echo "/ /___/ /_/ / / / / |/ /  __/ /  (__  ) /\n";
echo "\____/\____/_/ /_/|___/\___/_/  /____/_/\n";
echo " Author	: WibuCode\n";
echo " Github	: https://github.com/wibucode\n";
echo "\n";
echo "[1] Decimal > Biner\n";
echo "[2] Biner > Decimal\n";
echo "[3] Decimal > Octal\n";
echo "[4] Octal > Decimal\n";
echo "[5] Decimal > Hexa\n";
echo "[6] Hexa > Decimal\n";
echo "\n";
echo "Masukkan Bilangan: ";
$input = trim(fgets(STDIN));
echo "Pilih no: ";
$select = trim(fgets(STDIN));
if ($select == "1") {
	echo "Decimal > Binery: ".decbin($input);
} else if ($select =="2") {
	echo "Binery > Decimal: ".bindec($input);
} else if ($select =="3") {
	echo "Decimal > Octal: ".decoct($input);
} else if ($select =="4") {
	echo "Octal > Decimal: ".octdec($input);
} else if ($select =="5") {
	echo "Decimal > Hexa: ".dechex($input);
} else if ($select =="6") {
	echo "Hexa > Decimal: ".hexdec($input);
} else {
	echo "Pilih angka yang ada pada menu!";}
echo "\n";
