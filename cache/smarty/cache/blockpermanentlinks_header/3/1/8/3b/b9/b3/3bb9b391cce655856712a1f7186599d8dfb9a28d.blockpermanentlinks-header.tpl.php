<?php /*%%SmartyHeaderCode:702117075825e69ad9ef28-46391536%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3bb9b391cce655856712a1f7186599d8dfb9a28d' => 
    array (
      0 => '/home/koomaakiey/pprod/modules/blockpermanentlinks/blockpermanentlinks-header.tpl',
      1 => 1478870039,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '702117075825e69ad9ef28-46391536',
  'variables' => 
  array (
    'link' => 0,
    'come_from' => 0,
    'meta_title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5825e69adc6609_95377440',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5825e69adc6609_95377440')) {function content_5825e69adc6609_95377440($_smarty_tpl) {?>
<!-- Block permanent links module HEADER -->
<ul id="header_links">
	<li id="header_link_contact"><a href="http://pprod.koomaakiti.com/index.php?controller=contact" title="contact">contact</a></li>
	<li id="header_link_sitemap"><a href="http://pprod.koomaakiti.com/index.php?controller=sitemap" title="plan du site">plan du site</a></li>
	<li id="header_link_bookmark">
		<script type="text/javascript">writeBookmarkLink('http://pprod.koomaakiti.com/index.php', 'KoomaaKiti', 'favoris');</script>
	</li>
</ul>
<!-- /Block permanent links module HEADER -->
<?php }} ?>
