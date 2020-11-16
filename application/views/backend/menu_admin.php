<?php
	$dash_active = '';
	$pems_active = '';
	$kat_active = '';
	$prod_active = '';
	$memb_active = '';
	$hal_active = ' class="last"';
	
	//cek untuk menu yg aktif
	switch($active)
	{
		case 'dashboard' : $dash_active = ' class="active"'; break;
		case 'pemesanan' : $pems_active = ' class="active"'; break;
		case 'kategori' : $kat_active = ' class="active"'; break;
		case 'produk' : $prod_active = ' class="active"'; break;
		case 'member' : $memb_active = ' class="active"'; break;
		case 'halaman' : $hal_active = ' class="active last"'; break;
	}
	
	$adm_link = 'index.php/administrator';
?>

<div id="cssmenu" class="grid_12">
<ul>
   <li<?php echo $dash_active; ?>><a href='<?php echo base_url() . $adm_link; ?>/dashboard'><span>Dashboard</span></a></li>
   <li<?php echo $pems_active; ?>><a href='<?php echo base_url() . $adm_link; ?>/pemesanan'><span>Pemesanan</span></a></li>
   <li<?php echo $kat_active; ?>><a href='<?php echo base_url() . $adm_link; ?>/kategori'><span>Kategori</span></a></li>
   <li<?php echo $prod_active; ?>><a href='<?php echo base_url() . $adm_link; ?>/produk'><span>Produk</span></a></li>
   <li<?php echo $memb_active; ?>><a href='<?php echo base_url() . $adm_link; ?>/member'><span>Members</span></a></li>
   <li<?php echo $hal_active; ?>><a href='<?php echo base_url() . $adm_link; ?>/halaman'><span>Halaman</span></a></li>
   <li<?php echo $hal_active; ?>><a href='<?php echo base_url() . $adm_link; ?>/kota'><span>Kota</span></a></li>
</ul>
</div>
<div class="clear"></div>
