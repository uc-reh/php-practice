<?php

$new_collection = array('c++', 'PHP', 'Javascript', 'Python');

echo print_r($new_collection);

$another_array = ['Abdul', 'Rehman', 'Is', 'Learning', 'PHP'];

print_r($another_array);

echo '<br>';

echo $another_array[1][-2] . '<br>';

echo var_dump(isset($another_array[0])) . '<br>'; //checking if value exist

echo count($another_array) . '<br>';

$another_array[] = 'and Javascript';
echo $another_array[5] . '<br>';
echo count($another_array) . '<br>';

array_push($another_array, 'Hello');
echo count($another_array) . '<br>';
array_pop($another_array);
echo count($another_array) . '<br>';

$programming_info = [
    'language' =>
    [
        'name' => 'Javascript',
        'release_Date' => '2012',
        'version' => '2.5'
    ],
   'language2'=> [
        'name' => 'PHP',
        'release_Date' => '2014',
        'version' => '2.9'
    ]
];

print_r($programming_info);

echo '<br>' . " " . 'The Release Date of JS is : ' . $programming_info['language']['release_Date'].'<br>';
echo '<br>' . " " . 'The Version of PHP is : ' . $programming_info['language2']['version'].'<br>';

array_shift($another_array);
print_r($another_array);

if(array_key_exists('language3',$programming_info))
{
    echo '<br>True';
}
else{
    echo '<br>False';
}