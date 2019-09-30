<?php

system("clear");
echo "

=======================================================
=                 Selamat Datang                      =
=                 --------------                      =
=    Script    = New Button                           =
=    Author    = Wisnu Saputra                        =
=    Instagram = wisnu_as123                          =
=    Youtube   = DSV plankton.                        =
=    Github.   = https://github.com/wisnusaputra123   =
=======================================================
";

echo "\e[0;36m Tekan Enter untuk Menjalankan Program\n Start : ";
$gaada = trim(fgets(STDIN));
$dir = "/data/data/com.termux/files/home/.termux";
$file_to_write = 'termux.properties';
$content_to_write = "extra-keys = [['ESC','/','-','HOME','UP','END','PGUP'],['TAB','CTRL','ALT','LEFT','DOWN','RIGHT','PGDN']]";
if( is_dir($dir) === false )
{
    mkdir($dir);
}
$file = fopen($dir . '/' . $file_to_write,"w");
fwrite($file, $content_to_write);
fclose($file);
include $dir . '/' . $file_to_write;
system('termux-reload-settings');
system("clear");
echo "\e[0;41m#####################
## [+] BERHASIL [+] ##
####################\e[0;36m

Silahkan Login ulang termux anda!

 Author : Wisnu Saputra
   Team : BERMUDA-CYBER-TEAM
     Github : https://github.com/wisnusaputra123
       Contack : +6285718945758

TERIMA KASIH TELAH MENGGUNAKAN SCRIPT INI
     FOLLOW INSTAGRAM @wisnu_as123
";
?>
