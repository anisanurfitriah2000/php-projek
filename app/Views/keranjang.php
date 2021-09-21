
<table border=1>

	<tr>
			<td>
		NAMA IKAN
</td><td>
		QTY
</td><td>
		HARGA
</td><td>
		JUMLAH
</td>
</tr>
<?php $total = 0; foreach($cartt as $c){
	?>
	<tr>
			<td>
		<?php echo $c['name'];?>
</td><td>
		<?php echo $c['qty'];?>
</td><td>
		<?php echo $c['price'];?>
</td><td>
		<?php echo $c['qty'] *   $c['price'];   $total = $total + ( $c['qty'] *   $c['price'] );?>
</td>
</tr>

<?php	
}?>

	<tr>
			<td>
		
</td><td>
		 
</td>
</tr>
	<tr>
			<td>
		
</td><td>
		
</td><td>
	TOTAL BELANJAAN	
</td><td>
<?php echo $total?>
</td>
</tr>
</tr>
	<tr>
			<td>
		
</td><td>
		<a href='co'>CHECK OUT</a>
</td>
</tr>
	<tr>
			<td>
		
</td><td>
		<a href='koson'>KOSONGKAN KERANJANG</a>
</td>
</tr>
</table>
