<?php if ($_GET['tab']) {
  $tab = $_GET['tab'];
} else {
  $tab = 'refurbish';
} ?>
<div class="float">
	<br />
	<h2>SERVICES</h2>

<!--
<table width=100% border=0>
  <tr>
    <td align="center" width=33%>
      <a href="?page=refurbish">
        <img src="images/refurbish-icon.png" width="150" /> <br />
        <h3>We Refurbish</h3>
      </a>
    </td>
    <td align="center" width=33%>
      <a href="?page=simplify">
        <img src="images/simplify-icon.png" width="150" /> <br />
        <h3>We Simplify</h3>
      </a>
    </td>
    <td align="center" width=33%>
      <a href="?page=solve">
        <img src="images/solve-icon.png" width="150" /> <br />
        <h3>We Solve</h3>
      </a>
    </td>
  </tr>
  <tr>
    <td valign="top">
      <p>Need a budget computer that is eco-friendly? Looking for a place to get rid of your old computer in a "green" way? We work directly with <a href="http://www.ecoyork.com" taarget="_blank">Eco York</a> to recycle and refurbish computers and keep them out of the landfill.</p>
      <form><input type="submit" value="Learn more" /></form>
    </td>
    <td valign="top">
      <p>We can renew your current computer by installing a new operating system on it. Whether your computer is old and slow or you just want a modern and easy look and feel on your computer, we can do it.</p>
      <form><input type="submit" value="Learn more" /></form>
    </td>
    <td valign="top">
      <p>Anything from computer repair to cost effective business solutions, we can help you out!</p>
      <form><input type="submit" value="Learn more" /></form>
    </td>
  </tr>
</table>
-->
	<table width=100% cellpadding='0' cellspacing='0'>
		<tr>
			<td width=33%>
      <div class='togglebtn' onClick='hidediv("refurbish")' id='refurbishbtn' <?php if ($tab == 'refurbish') { ?> style='color:#00AEFF; background-color:#424242;'<?php } ?>><b>&nbsp;&nbsp;REFURBISH&nbsp;&nbsp;</b></div>
			</td>
			<td width=34%>
				<div class='togglebtn' onClick='hidediv("simplify")' id='simplifybtn'<?php if ($tab == 'simplify') { ?> style='color:#00AEFF; background-color:#424242;'<?php } ?>><b>&nbsp;&nbsp;SIMPLIFY&nbsp;&nbsp;</b></div>
			</td>
			<td width=33%>
				<div class='togglebtn' onClick='hidediv("solve")' id='solvebtn'<?php if ($tab == 'solve') { ?> style='color:#00AEFF; background-color:#424242;'<?php } ?>><b>&nbsp;&nbsp;SOLVE&nbsp;&nbsp;</b></div>
			</td>
		</tr>
	</table>

  <div <?php if ($tab == 'refurbish') { ?>style='display:block;' <?php } ?> class='togglediv' id='refurbish'>
    <?php include('refurbish.php'); ?>
		<br />
		<br />
	</div>

	<div class='togglediv' id='simplify' <?php if ($tab == 'simplify') { ?>style='display:block;' <?php } ?> >
    <?php include('simplify.php'); ?>
	</div>

	<div class='togglediv' id='solve' <?php if ($tab == 'solve') { ?>style='display:block;' <?php } ?> >
    <?php include('solve.php'); ?>
  </div>
</div>
