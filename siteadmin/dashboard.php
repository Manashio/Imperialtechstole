<?php
	include("../config/config.inc.php");

if(!checkAdminLogin())
{
	echo "<script>document.location.href='index.php';</script>";
	exit;
}


$selectedPage=0;
?>



<?php include("common/admheader.php"); ?>

	<section class="middlepart">
		<div class="right-panel">
			<aside class="rightsection fleft dboard">
				<?php if($_SESSION['LoggedName']!="") { ?><h2>Welcome <?php echo $_SESSION['LoggedName']; ?>!</h2> <?php } ?>
				<?php if($_SESSION['AdminLastLogin']!="") { ?><h4 class="mtop">Last Login:<span> <?php echo $_SESSION['AdminLastLogin'];?></span></h4> <?php } ?>
				<?php if($_SESSION['AdminLastLoggedIP']!="") { ?><h4>Last Login IP:<span> <?php echo $_SESSION['AdminLastLoggedIP']; ?></span></h4> <?php } ?>

				<div class="tablebox table-responsive mtop dashboard">
					<table class="table table-bordered table-hover">
						<thead>
							<tr class="th-heading"><th colspan="2" class="pbsize">Icon Reference</th></tr>
						</thead>
						<tbody>
							<tr>
								<td class="text-center"><i class="fa fa-check-circle green bsize"></i></td>
								<td class="pbsize">This icon stands for "Active Status." By clicking on this icon a record can be Changed.</td>
							</tr>
							<tr>
								<td class="text-center"><i class="fa fa-times-circle red bsize"></i></td>
								<td class="pbsize">This icon stands for "Inactive." By clicking on this icon a record can be Changed.</td>
							</tr>
							<tr>
								<td class="text-center"><i class="fa fa fa-pencil bsize"></i></td>
								<td class="pbsize">This icon stands for "Edit." By clicking on this icon a record can be edited.</td>
							</tr>
						<!--	<tr>
								<td class="text-center"><i class="fa fa-cart-plus bsize"></i></td>
								<td class="pbsize">This icon stands for "add." By clicking on this icon a record can be added.</td>
							</tr>-->
							<tr>
								<td class="text-center"><i class="fa fa-trash bsize"></i></td>
								<td class="pbsize">This icon stands for "Delete." By clicking on this icon a record can be deleted.</td>
							</tr>
							<tr>
								<td class="text-center"><i class="fa fa-leanpub bsize"></i></td>
								<td class="pbsize">This icon stands for "add." By clicking on this icon a record can be added.</td>
							</tr>
							<tr>
								<td class="text-center"><i class="fa fa-file-pdf-o bsize"></i></td>
								<td class="pbsize">This icon stands for "PDF." By clicking on this icon its view pdf.</td>
							</tr>
							<tr>
								<td class="text-center"><i class="fa fa-file-word-o bsize"></i></td>
								<td class="pbsize">This icon stands for "Word." By clicking on this icon its view word file.</td>
							</tr>
							<tr>
								<td class="text-center"><i class="fa fa-file-excel-o bsize"></i></td>
								<td class="pbsize">This icon stands for "Excel." By clicking on this icon its view excel file.</td>
							</tr>
						</tbody>
					</table>
				</div>
			</aside>
		</div>
	</section>



<?php include("common/admfooter.php"); ?>
