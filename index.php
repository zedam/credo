<html>
	<head>
		<link rel="stylesheet/less" type="text/css" href="styles.less" />
		<script src="less.js" type="text/javascript"></script>
	</head>
	<body>


		<div class="block_container_container">
			<?php for ($j = 0; $j < 4; $j ++) { ?>
			<div class="block_container">
			<?php for ($i = 0; $i < 20; $i ++) { ?>
				<div class="block<?= ' block_' . $i ?>" style="background: #<?= '00'.$i.$i.(($i < 10)? $i : '').(($i < 10)? $i : '')?>">

				</div>
			<?php } ?>
		</div>
			<?php } ?>

	</body>
</html>
