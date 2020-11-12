<?php
// membuat array
 
$data = array(

    array("Nama"=>"Satria", 
          "Kelas"=>"RPL 1"),
          

    array("Nama"=>"Arsyidan", 
          "Kelas"=>"RPL 2"),
);

// Menampilkan data
echo "<pre>";
print_r($data);
echo "</pre>";
?>
<hr>
<?php
$Data= array(
     1=>"Satria",
     2=>"Arsyidan",
     3=>"Dhika",
     4=>"Evan",
     5=>"Fabian",
     6=>"Irfan"
);

foreach ($Data as $key=> $value)
{
echo "Nama ".$value." Kelas RPL ".$key."<br>";
echo "<br />";
}
?>