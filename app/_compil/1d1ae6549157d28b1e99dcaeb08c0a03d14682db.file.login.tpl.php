<?php 
/*
       * Smarty version Smarty-3.1.13, created on 2014-04-01 11:35:05 compiled from "/home/kara/workspace_php/gttr/app/mwView/login.tpl"
       */
?>
<?php /*%%SmartyHeaderCode:767334338533a8849085c27-19220040%%*/if (! defined ( 'SMARTY_DIR' ))
	exit ( 'no direct access allowed' );
$_valid = $_smarty_tpl->decodeProperties ( array (
		'file_dependency' => array (
				'1d1ae6549157d28b1e99dcaeb08c0a03d14682db' => array (
						0 => '/home/kara/workspace_php/gttr/app/mwView/login.tpl',
						1 => 1396344267,
						2 => 'file' 
				) 
		),
		'nocache_hash' => '767334338533a8849085c27-19220040',
		'function' => array (),
		'has_nocache_code' => false,
		'version' => 'Smarty-3.1.13',
		'unifunc' => 'content_533a88490dd663_92797295' 
), false ); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533a88490dd663_92797295')) {function content_533a88490dd663_92797295($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<style type="text/css">
body {
	
}

.form-signin {
	max-width: 300px;
	padding: 19px 29px 29px;
	margin: 0 auto 20px;
	background-color: #fff;
	border: 1px solid #e5e5e5;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;
	-webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, .05);
	-moz-box-shadow: 0 1px 2px rgba(0, 0, 0, .05);
	box-shadow: 0 1px 2px rgba(0, 0, 0, .05);
}

.form-signin .form-signin-heading {
	margin-bottom: 10px;
}

.form-signin input[type="text"],.form-signin input[type="password"] {
	font-size: 16px;
	height: auto;
	margin-bottom: 15px;
	padding: 7px 9px;
}

select {
	margin-top: 0pt;
	height: 30px;
	vertical-align: middle;
}
</style>
</head>

<body>

	<div class="container">
		<div class="masthead">
			<div class="row">
				<div class="span10">
					<h1 style="color: #6FACE5">gttr</h1>
				</div>
				<div class="span2">
					<img alt="logo" src="../rsrc/img/ILAND-LOGO.png">
				</div>
			</div>
			<div class="navbar">
				<div class="navbar-inner">
					<div class="container">
						<ul class="nav">
							<li class="active"><a href="login>index">Connexion</a></li>
							<li><a href="apropos>index">A Propos</a></li>
							<li><a href="contact>index">Contact</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="alert alert-error" id="errorMessage" style="display: none"></div>
		<br>
		<form class="form-signin" name="connexionForm" id="connexionForm"
			method="POST" action="">
			<h3 class="form-signin-heading"><?php echo $_smarty_tpl->getConfigVariable('authentification');?>
</h3>
			<input type="text" class="input-block-level"
				placeholder="<?php echo $_smarty_tpl->getConfigVariable('user');?>
"
				name="login" id="login"> <input type="password"
				class="input-block-level"
				placeholder="<?php echo $_smarty_tpl->getConfigVariable('passwd');?>
"
				name="pass" id="pass">
			<div class="input-prepend">
				<span class="add-on"> <i class="icon-flag" data-placement="left"
					class="hasTooltip" title="Language"></i>
				</span> <select id="lang" name="lang" class="span3">
					<option value="fr" selected="selected">Français</option>
				</select>
			</div>

			<br> <br>
			<button style="width: 100%" class="btn btn-large btn-success"
				type="submit"><?php echo $_smarty_tpl->getConfigVariable('singin');?>
</button>
		</form>

	</div>


	<script type="text/javascript">
$(document).ready(
	
	function() {
		$("#connexionForm").submit(
			function() {
				$.ajax({
					type    : "POST",
					url     : '>login>Authentification',
					data    : "login="+ $("#login").val()+ "&pass="+ $("#pass").val()+ "&lang="+ $("#lang").val(),
					success : function(msg) {
						if (msg == 1) {							
							$("#errorMessage").hide();
							location.href = ">home>Index";
						} else {
							$("#errorMessage").html("<?php echo $_smarty_tpl->getConfigVariable('errorLogin');?>
");					
							$("#errorMessage").show();
						}
					},
					error:function(xhr, ajaxOptions, thrownError){
			  		 	alert(msg);
						alert ("Error getRdvlist");
						alert(xhr.statusText);
						alert(thrownError);
				   }
				});
				return false;
			});
	});
</script>

</body>
</html>
<?php }} ?>