<?php
echo 'Use of __DIR__ : <br>';
echo __DIR__;
echo '<br>Use of scandir(): <br>';
print_r(scandir(__DIR__));
echo '<br>Use of mkdir(): <br>';

if (!file_exists('NewDir')) {
    mkdir('NewDir');
}
if(file_exists('NewDir'))
{
    echo '<br>Success<br>';
}

echo '<br>Use of rmdir(): <br>';

rmdir('NewDir');

if(!file_exists('NewDir')){
    echo '<br> Successfully Deleetd The File<br>';
}

echo '<br>Use of filesize(): <br>';

echo filesize('p23.php');

echo '<br>Use of fopen(): <br>';

fopen('new.txt','w');
if(file_exists('new.txt'))
{
    echo '<br> New.txt created successfully<br>';
}

echo '<br>Use of file_put_contents(): <br>';

file_put_contents('new.txt', 'Hello World') or die("Not Success");
if(file_get_contents('new.txt',true))
{
    echo 'success';
}

// clearstatcache();

echo '<br>Use of fgets(): <br>';

echo fgets(fopen('new.txt','r'));

if(fgets(fopen('new.txt','r')) == true)
{
    echo '<br>Successfuly printed msg';
}

fclose(fopen('new.txt', 'r'));

echo '<br>Use of copy(): <br>';
copy('new.txt', 'copy.txt');


if(file_exists('copy.txt'))
{
    echo '<br> Copied!<br>';
}

echo '<br>Use of renaem(): <br>';
rename('copy.txt','newcopy.txt');


if(file_exists('newcopy.txt'))
{
    echo '<br> renamed!<br>';
}

