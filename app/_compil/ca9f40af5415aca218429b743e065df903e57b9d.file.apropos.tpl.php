<?php /* Smarty version Smarty-3.1.13, created on 2014-04-28 09:47:14
         compiled from "/home/cyberjunky/workspace_php/pwit/app/mwView/apropos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:82965820053578e0ce11241-88604848%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca9f40af5415aca218429b743e065df903e57b9d' => 
    array (
      0 => '/home/cyberjunky/workspace_php/pwit/app/mwView/apropos.tpl',
      1 => 1398671212,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '82965820053578e0ce11241-88604848',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_53578e0ce20c88_20595011',
  'variables' => 
  array (
    'v1' => 0,
    'v2' => 0,
    'v3' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53578e0ce20c88_20595011')) {function content_53578e0ce20c88_20595011($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 
<style type="text/css">
body {

}
</style>
</head>


<body>
		<div class="container">
		<div class="masthead">
			<div class="row">
				    <div class="span10"><h1 style="color: #6FACE5">gttr</h1></div>
				    <div class="span2"><img alt="logo" src="../rsrc/img/ILAND-LOGO.png"> </div>
    		</div>
			<div class="navbar">
				<div class="navbar-inner">
					<div class="container">
						<ul class="nav">
							<li><a href="login>index">Connexion</a></li>
							<li class="active" ><a href="apropos>index">A Propos</a></li>
							<li><a href="contact>index">Contact</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		

		<h2>A Propos</h2>
		<p>
			GPL V3
			<br>
			V1 : <?php echo $_smarty_tpl->tpl_vars['v1']->value;?>

			<br>
			V2 : <?php echo $_smarty_tpl->tpl_vars['v2']->value;?>

			<br>
			V3 : <?php echo $_smarty_tpl->tpl_vars['v3']->value;?>

		</p>

	</div>
</body>
</html>
<?php }} ?>