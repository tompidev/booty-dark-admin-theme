    <!-- top logo -->
	<div class="admin-logo admin-logo-dark shadow-sm py-2 mb-1">
        <img src="<?php echo HTML_PATH_CORE_IMG ?>logo.svg" width="35" height="35" alt="bludit-logo">
        <span class="ml-2 align-middle"><?php echo (defined('BLUDIT_PRO'))?'BLUDIT PRO':'BLUDIT' ?></span>
	</div>
   
    <!-- control icons displayed by the choosen position top or bottom -->
    <div id="control-icons" class="border-top bg-dark control-icons-bottom">
        <div id="titletext" class="icon-hint"></div>
        <div class="list-group list-group-horizontal-sm control-icons">
            <span class="list-group-item px-2 py-0 border-0 text-center control-icons-dark">
                <a id="edit-user" href="<?php $logged = new Login; echo HTML_PATH_ADMIN_ROOT.'edit-user/'. $logged->username() ?>">
                    <i class="fa fa-user fa-2x d-none d-xl-block" aria-hidden="true"></i>
                    <i class="fa fa-user fa-sm d-xl-none" aria-hidden="true"></i>
                </a>
            </span>
            <span class="list-group-item px-2 py-0 border-0 text-center control-icons-dark">
                <a id="logout" href="<?php echo HTML_PATH_ADMIN_ROOT.'logout' ?>">
                    <i class="fa fa-arrow-circle-right fa-2x d-none d-xl-block" aria-hidden="true"></i>
                    <i class="fa fa-arrow-circle-right fa-sm d-xl-none" aria-hidden="true"></i>
                </a>
            </span>
            <span class="separator m-2 py-3 text-muted"></span>
            <span class="list-group-item px-2 py-0 border-0 text-center control-icons-dark">
                <a id="dashboard" href="<?php echo HTML_PATH_ADMIN_ROOT.'dashboard' ?>">
                    <i class="fa fa-dashboard fa-2x d-none d-xl-block" aria-hidden="true"></i>
                    <i class="fa fa-dashboard fa-sm d-xl-none" aria-hidden="true"></i>
                </a>
            </span>
            <span class="list-group-item px-2 py-0 border-0 text-center control-icons-dark">
                <a id="website" target="_blank" href="<?php echo HTML_PATH_ROOT ?>">
                    <i class="fa fa-home fa-2x d-none d-xl-block" aria-hidden="true"></i>
                    <i class="fa fa-home fa-sm d-xl-none" aria-hidden="true"></i>
                </a>
            </span>
        </div>
    </div>

<ul id="sidenav" class="nav flex-column h-auto">
    <!-- content menu items for other users -->
	<?php if (!checkRole(array('admin'),false)): ?>
	<li class="nav-item mt-3">
		<a class="nav-link" href="<?php echo HTML_PATH_ADMIN_ROOT.'new-content' ?>"><span class="fa fa-plus-circle new-content-icon"></span><?php $L->p('New content') ?></a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="<?php echo HTML_PATH_ADMIN_ROOT.'content' ?>"><span class="fa fa-archive"></span><?php $L->p('Content') ?></a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="<?php echo HTML_PATH_ADMIN_ROOT.'edit-user/'.$login->username() ?>"><span class="fa fa-user"></span><?php $L->p('Profile') ?></a>
	</li>
	<?php endif; ?>

    <!-- content menu items for admin users -->
	<?php if (checkRole(array('admin'),false)): ?>   
    <li class="mt-4 mr-3 mb-2 border-bottom">
		<h4 class=" ml-3"><?php $L->p('Manage') ?></h4>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="<?php echo HTML_PATH_ADMIN_ROOT.'new-content' ?>"><span class="fa fa-plus-circle new-content-icon"></span><?php $L->p('New content') ?></a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="<?php echo HTML_PATH_ADMIN_ROOT.'content' ?>"><?php $L->p('Content') ?>
           <span id="itemsBadge" class="badge badge-pill float-right badge-secondary sidebar-badge">
              <?php print (
                  (count($pages->getPublishedDB()))+
                  (count($pages->getStaticDB()))+
                  (count($pages->getStickyDB()))+
                  (count($pages->getScheduledDB()))+
                  (count($pages->getDraftDB()))
                  ); 
              ?>
           </span>
       </a>
	</li>

	<li class="nav-item">
		<a class="nav-link" href="<?php echo HTML_PATH_ADMIN_ROOT.'categories' ?>"><?php $L->p('Categories') ?>
           <span id="categoriesBadge" class="badge badge-pill float-right badge-secondary sidebar-badge">
              <?php print count($categories->keys()); ?>
           </span>
       </a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="<?php echo HTML_PATH_ADMIN_ROOT.'users' ?>"><?php $L->p('Users') ?>
           <span id="usersBadge" class="badge badge-pill float-right badge-secondary sidebar-badge">
              <?php print count($users->keys()); ?>
           </span></a>
	</li>
    
    <!-- settings menu items -->
	<li class="mt-4 mr-3 mb-2 border-bottom">
		<h4 class=" ml-3"><?php $L->p('Settings') ?></h4>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="<?php echo HTML_PATH_ADMIN_ROOT.'settings' ?>"><?php $L->p('General') ?></a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="<?php echo HTML_PATH_ADMIN_ROOT.'plugins' ?>"><?php $L->p('Plugins') ?></a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="<?php echo HTML_PATH_ADMIN_ROOT.'themes' ?>"><?php $L->p('Themes') ?></a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="<?php echo HTML_PATH_ADMIN_ROOT.'about' ?>"><?php $L->p('About') ?></a>
	</li>

	<?php endif; ?>
<?php //echo $users->role() ?>
	<?php if (checkRole(array('admin', 'editor'),false)): ?>

		<?php
			if (!empty($plugins['adminSidebar'])) {
				echo '<li class="mt-4 mr-3 mb-2 border-bottom"><h4 class=" ml-3">'.$L->g('Plugins').'</li>';
				foreach ($plugins['adminSidebar'] as $pluginSidebar) {
					echo '<li class="nav-item">';
					echo $pluginSidebar->adminSidebar();
					echo '</li>';
				}
			}
		?>

	<?php endif; ?>
</ul>
        
<script>
// Preparing selected menu item 
var url = window.location;
$('ul.nav a').filter(function() {
    return this.href == url;
}).parent().addClass('selected');

// hover effect on control icons
$("#edit-user").mouseenter(function(){
    $("#titletext").text("<?php echo $L->g('Edit user') ?>");
})
$("#logout").mouseenter(function(){
    $("#titletext").text("<?php echo $L->g('Logout') ?>");
})
$("#dashboard").mouseenter(function(){
    $("#titletext").text("<?php echo $L->g('Dashboard') ?>");
})
$("#website").mouseenter(function(){
    $("#titletext").text("<?php echo $L->g('site') ?>");
})
$(".fa").mouseout(function() {
    $("#titletext").text("");
})
</script>
