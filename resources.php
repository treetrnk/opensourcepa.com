<?php if ($_GET['tab']) {
  $tab = $_GET['tab'];
} else {
  $tab = 'distros';
} ?>
<div class="float">
	<br />
	<!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>-->
	<h2>RESOURCES</h2>


	<table width=100% cellpadding="0" cellspacing="0">
		<tr>
			<td width=33%>
      <div class='togglebtn' onClick='hidediv("distros")' id='distrosbtn' y<?php if ($tab == 'distros') { ?> style='color:#00AEFF; background-color:#424242;'<?php } ?> ><b>&nbsp;&nbsp;LINUX DISTRIBUTIONS</b> <span style='text-align:right;'></span>&nbsp;</div>
			</td>
			<td width=34%>
				<div class='togglebtn' onClick='hidediv("tutorials")' id='tutorialsbtn'<?php if ($tab == 'tutorials') { ?> style='color:#00AEFF; background-color:#424242;'<?php } ?> ><b>&nbsp;&nbsp;TUTORIALS</b> <span style='text-align:right;'></span>&nbsp;</div>
			</td>
			<td width=33%>
				<div class='togglebtn' onClick='hidediv("links")' id='linksbtn'<?php if ($tab == 'links') { ?> style='color:#00AEFF; background-color:#424242;'<?php } ?>> <b>&nbsp;&nbsp;OTHER LINKS</b> <span style='text-align:right;'></span>&nbsp;</div>
			</td>
		</tr>
	</table>

  <div id='distros' class='togglediv' <?php if ($tab == 'distros') { ?> style='display:block;' <?php } ?> >
    <?php include('distributions.php'); ?>
	</div>

  <div id='tutorials' class='togglediv'<?php if ($tab == 'tutorials') { ?> style='display:block;' <?php } ?> >
    <?php include('tutorials.php'); ?> 
  </div>

	<div id='links' class='togglediv'<?php if ($tab == 'links') { ?> style='display:block;' <?php } ?> >
    <?php include('links.php'); ?>
	</div>
</div>
