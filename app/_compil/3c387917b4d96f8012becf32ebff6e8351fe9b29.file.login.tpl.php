<?php /* Smarty version Smarty-3.1.13, created on 2014-04-30 16:22:44
         compiled from "/home/cyberjunky/workspace_php/pwit/app/pwView/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:728357849535f9940aa3249-24857916%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c387917b4d96f8012becf32ebff6e8351fe9b29' => 
    array (
      0 => '/home/cyberjunky/workspace_php/pwit/app/pwView/login.tpl',
      1 => 1398867748,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '728357849535f9940aa3249-24857916',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_535f9940ad0567_85651339',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535f9940ad0567_85651339')) {function content_535f9940ad0567_85651339($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 

<style type="text/css">
	/* Her your special CSS Code */
	body {
		
	}
</style>
</head>


<body>		

     <div class="container">

      <!-- Static navbar -->
      <div class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Pwit</a>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li class="dropdown-header">Nav header</li>
                  <li><a href="#">Separated link</a></li>
                  <li><a href="#">One more separated link</a></li>
                </ul>
              </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="./">Default</a></li>
              <li><a href="../navbar-static-top/">Static top</a></li>
              <li><a href="../navbar-fixed-top/">Fixed top</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </div>

      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
      	<div class="row">
			<div class="col-md-9">
				        <h1>Pwit Project </h1>
        				<p>This example is a quick exercise to illustrate how the default Pwit Project. </p>
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