<?php

for( $i=1; $i<=50; $i++ ){
	
	if($i%3==0 && $i%5!=0){
		echo "Foo";
	}
	if($i%5==0 && $i%3!=0){
		echo "Bar";
	}
	if($i%3==0 && $i%5==0){
		echo "FooBar";
	}
	echo $i."<br>";
	
}
?>  