<ul class="sidebar-menu" data-widget="tree">

<li>
	<a href="<?=site_url('bpay\dashboard')?>">
		<img src="<?= base_url('assets/images/svg-icon/sidebar-menu/dashboard.svg') ?>" class="svg-icon" alt="">
		<span>Dashboard</span>
		<span class="pull-right-container">
		</span>
	</a>
</li>

<li>
	<a href="<?=site_url('bpay\profile')?>">
		<img src="<?= base_url('assets/images/svg-icon/sidebar-menu/layout.svg') ?>" class="svg-icon" alt="">
		<span>Profile</span>
	</a>
	<ul class="treeview-menu">
		<li><a href="<?=site_url('bpay\profile')?>"><i class="ti-more"></i>Profile</a></li>
	</ul>
</li>

	<li>
		<a href="<?=site_url('bpay')?>">
			<img src="<?= base_url('assets/images/svg-icon/sidebar-menu/exchange.svg') ?>" class="svg-icon" alt="">
			<span>Transaction</span>
		</a>
	</li>

	<li>
		<a href="<?=site_url('bpay\logout')?>">
			<img src="<?= base_url('assets/images/svg-icon/sidebar-menu/logout.svg') ?>" class="svg-icon" alt="">
			<span>Deconnection</span>
		</a>
	</li>

</ul>
