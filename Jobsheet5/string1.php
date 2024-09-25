<?php 

$loremIpsum = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem sit accusamus 
              molestiae nostrum fugit quia voluptatum earum obcaecati harum tempore fugiat quod consequatur 
              temporibus qui ipsa pariatur suscipit, neque accusantium.";

echo "<p>{$loremIpsum}</p>";
echo "Panjang karakter : " .strlen($loremIpsum) . "<br>";
echo "Panjang kata : ". str_word_count($loremIpsum) ."</p>";
echo "<p>" . strtoupper($loremIpsum) . "</p>";
echo "<p>" . strtolower($loremIpsum) . "</p>";
?>