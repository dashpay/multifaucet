<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
	<meta name="author" content="tuaris" />
	<link rel="stylesheet" href="<?php echo theme_dir(); ?>css/default.css" type="text/css" />
	<link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
	<link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="images/favicon-96x96.png">
	<title><?php print($title); ?></title>
</head>
<body>
	<div id="wrapper">
		<h1><?php print($title); ?></h1>
		<div class="container main-cont">
			<?php print($content); ?>
		</div>
		<?php if(get_setting('donation_address')) { ?>
		<div class="container">
			<p><?php print translate('faucet_donate'); ?>:</p>
			<p class="big"><?php print(get_setting('donation_address')); ?></p>
		</div>
		<?php } ?>
		<div id="poweredby">
			<!-- Before removing this link please see README -->
			<a href="http://cur.lv/99zcp" title="<?php echo APPLICATION_WEBSITE; ?>" target="_blank">
				<?php echo APPLICATION_NAME . ' ' . APPLICATION_VERSION; ?>
			</a>
		</div>
		<?php if(isset($stats)) { ?>
		<div id="stats">
			<p><?php print translate('faucet_balance'); ?>: <?php print($stats['balance']); ?></p>
			<p><?php print translate('average_payout'); ?>: <?php print($stats['average_payout']); ?></p>
			<p><?php print($stats['number_of_payouts']); ?> <?php print translate('payouts'); ?></p>
			<br />
			<p><?php print translate('core_version'); ?>: <?php print($stats['core_version']); ?></p>
			<p><?php print translate('block_height'); ?>: <?php print($stats['block_height']); ?></p>
		</div>
		<?php } ?>
		<img src="<?php echo theme_dir(); ?>images/dash-d.png" class="droplet" alt=""/>
		<img src="<?php echo theme_dir(); ?>images/dash-d.png" class="droplet" alt=""/>
		<img src="<?php echo theme_dir(); ?>images/dash-d.png" class="droplet" alt=""/>
	</div>
	<script async src="https://www.google.com/recaptcha/api.js?onload=onloadCallback"></script>
<script>
	var recaptcha_response = '';
function submitUserForm() {
    if(recaptcha_response.length == 0) {
        document.getElementById('g-recaptcha-error').innerHTML = '<span>This field is required.</span>';
        return false;
    }
    return true;
}
 
function verifyCaptcha(token) {
    recaptcha_response = token;
    document.getElementById('g-recaptcha-error').innerHTML = '';
}
</script>
<script>
  const onloadCallback = function() {
    console.log("reCAPTCHA has loaded!");
    grecaptcha.reset();
  };
</script>
</body>
</html>
