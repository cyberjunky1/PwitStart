<?php /* Smarty version Smarty-3.1.13, created on 2014-04-30 16:42:36
         compiled from "/home/cyberjunky/workspace_php/pwit/app/pwView/debug.tpl" */ ?>
<?php /*%%SmartyHeaderCode:476085833535f98d0ce1661-35413423%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '624aa744d7e0abfd4091cb2bc7f810e758c6f801' => 
    array (
      0 => '/home/cyberjunky/workspace_php/pwit/app/pwView/debug.tpl',
      1 => 1398868952,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '476085833535f98d0ce1661-35413423',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_535f98d0dfb841_64826586',
  'variables' => 
  array (
    'debug1' => 0,
    'debug2' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535f98d0dfb841_64826586')) {function content_535f98d0dfb841_64826586($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 

<style type="text/css">
	/* Her your special CSS Code */
	body {
		
	}
</style>
</head>


<body>		

     <div class="container">
		<br>
      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
      	
      	<div class="row">
			<div class="col-md-9">
				<b><h2>Pwit Debug </h2></b>
				 <u><h3>Error:</h3></u>
				<p><?php echo $_smarty_tpl->tpl_vars['debug1']->value;?>
</p>

				 <u><h3>Details:</h3></u>
				<p><?php echo $_smarty_tpl->tpl_vars['debug2']->value;?>
</p>
			</div>
			
			<div class="col-md-3" align="center">
				<img alt="logo_pwit" width="150px" height="150px" src="../rsrc/img/logo.png"> <br>
			</div>
      	</div>
      

      </div>

    </div> <!-- /container -->
				

	
	<script type="text/javascript">
		/* Her your special JS Code */
	</script>
	 
	<?php echo $_smarty_tpl->getSubTemplate ("_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html>
<?php }} ?>