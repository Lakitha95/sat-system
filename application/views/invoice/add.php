<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
	<?php $this->load->view("header-css"); ?>
	<link rel="stylesheet" href="<?php echo base_url(); ?>/theme/plugins/datatables/dataTables.bootstrap.css">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
	<?php $this->load->view("header"); ?>
	<?php $this->load->view("leftmenu"); ?>
	<div class="content-wrapper">
		<section class="content-header">
			<h1>
				<b>Invoice</b>
				<small>Control panel</small>
			</h1>
			<ol class="breadcrumb">
				<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
				<li class="active">Dashboard</li>
			</ol>
		</section>

		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<div class="box-header">

						<?php
						//
						if (isset($_SESSION['success_msg'])) {
							echo '<h4 class="btn-success" id="success">' . $this->session->flashdata('success_msg') . '</h4>';
						} else if (isset($_SESSION['fail_msg'])) {
							echo '<h4 class="btn-danger">' . $this->session->flashdata('fail_msg') . '</h4>';
						}
						?>

						<h3 class="box-title">Invoice </h3>
					</div>
					<form action="<?php echo base_url(); ?>index.php/invoice/addNewInvoice" method="post"
						  enctype="multipart/form-data">
						<div class="box-body">
							<ul>
								<div class="row">
									<div class="col-md-3">
									</div>
									<div class="col-md-3">
									</div>
									<div class="col-md-3">
										<input class="form-control input-sm btn btn-success" type="submit"
											   style="display: block" value="Print">
										</br>
									</div>
									<div class="col-md-3">
										<input class="form-control input-sm btn btn-info" type="submit"
											   style="display: block" value="Save">
										<br/>
									</div>
								</div>
								<br/>
								<div class="row">
									<div class="col-md-4">
										<div class="row">
											<div class="col-md-5">
												<label>Customer Name</label></br></br>
												<label>Address</label></br></br>
												<label>Customer Name</label>
											</div>
											<div class="col-md-7">
												<input class="form-control input-sm" style="width: 100%"
													   name="txtCustomer"
													   type="text"
													   placeholder="Item Name">
												<br/>
												<input class="form-control input-sm" style="width: 100%"
													   name="txtCustomerAddress" type="text"
													   placeholder="Item Description">
												<br/>
												<input class="form-control input-sm" style="width: 100%"
													   name="txtCustomerContact"
													   type="text"
													   placeholder="Item Type">
											</div>
										</div>
									</div>
									<div class="col-md-4">
									</div>
									<div class="col-md-4">
										<div class="row">
											<div class="col-md-5">
												<label>Invoice number</label></br></br>
												<label>Date</label></br></br></br>
												<label>Condition</label></br></br>
												<label id="creditPeriodLabel">Credit Period</label>
											</div>
											<div class="col-md-7">
												<input class="form-control input-sm" style="width: 100%"
													   name="txtInvoiceId"
													   type="text"
													   value="<?php echo $invoice_serial; ?>" disabled>
												<br/>
												<input class="form-control input-sm" id="datepicker" style="width: 100%"
													   name="txtDate" type="text"
													   placeholder="<?php echo date('Y-m-d'); ?>">
												</br>
												<select class="form-control input-sm " id="invoiceType"
														style="width: 100%"
														name="drpCondition">
													<option>Cash</option>
													<option>Credit</option>
												</select>
												</br>
												<select class="form-control input-sm " id="creditPeriod"
														style="width: 100%"
														name="drpCreditPeriod">
													<option>15 Days</option>
													<option>30 days</option>
													<option>45 days</option>
												</select>
											</div>
										</div>
									</div>
								</div>

							</ul>
							<!--								new row-->
							<ul>
								<div class="row">
									<div class="col-md-2">
										<label>Item Name</label>
									</div>
									<div class="col-md-3">
										<label>Item description</label>
									</div>
									<div class="col-md-1">
										<label>Warranty</label>
									</div>
									<div class="col-md-1">
										<label>Quantity</label>
									</div>
									<div class="col-md-2">
										<label>Unit Price</label>
									</div>
									<div class="col-md-2">
										<label>Total Price</label>
									</div>
									<div class="col-md-1">
									</div>

								</div>
								<div class='row form-group fieldGroup'>
									<div class="col-md-2">
										<br/>
										<input class='form-control input-sm' name='txtItemName[]' type='text'
											   placeholder='Item Name'>
									</div>
									<div class='col-md-3'>
										<br/>
										<input class='form-control input-sm' name='txtDescription[]' type='text'
											   placeholder='Item Name'>
									</div>
									<div class='col-md-1'>
										<br/>
										<input class='form-control input-sm' name='txtWarranty[]' type='text'
											   placeholder='Item Name'>
									</div>
									<div class='col-md-1'>
										<br/>
										<input class='form-control input-sm' name='txtQuantity[]' type='text'
											   placeholder='Item Name' id="quantity" onkeyup="sum();">
                                                                                <button class='btn btn-info' name='txtItemSerial[]' type='text'
                                                                                        placeholder='Item Name' id="quantity" onkeyup=""></button>
									</div>
									<div class='col-md-2'>
										<br/>
										<input class='form-control input-sm' name='txtUnitPrice[]' type='text'
											   placeholder='Item Name' id="unitPrice" onkeyup="sum();">

									</div>
									<div class='col-md-2'>
										<br/>
										<input class='form-control input-sm' id="itemTotal" name='txtTotalPrice[]'
											   type='text'
											   placeholder='Item Total' >

									</div>
									<div class='col-md-1'>

									</div>

								</div>

								<div class='row form-group fieldGroupCopy' style="display: none;">
									<div class="col-md-2">
										<br/>
										<input class='form-control input-sm' name='txtItemName[]' type='text'
											   placeholder='Item Name'>
									</div>
									<div class='col-md-3'>
										<br/>
										<input class='form-control input-sm' name='txtDescription[]' type='text'
											   placeholder='Item Name'>
									</div>
									<div class='col-md-1'>
										<br/>
										<input class='form-control input-sm' name='txtWarranty[]' type='text'
											   placeholder='Item Name'>
									</div>
									<div class='col-md-1'>
										<br/>
										<input class='form-control input-sm' name='txtQuantity[]' type='text'
											   placeholder='Item Name' id="quantity" onkeyup="sum();">
									</div>
									<div class='col-md-2'>
										<br/>
										<input class='form-control input-sm' name='txtUnitPrice[]' type='text'
											   placeholder='Item Name' id="unitPrice" onkeyup="sum();">

									</div>
									<div class='col-md-2'>
										<br/>
										<input class='form-control input-sm ' id="itemTotal" name='txtTotalPrice[]'
											   type='text'
											   placeholder='Item Name'>

									</div>
									<div class='col-md-1'>
										<br/>
										<a class="btn btn-danger remove glyphicon glyphicon glyphicon-remove "></a>
										<br/>
									</div>
								</div>
								<div class='row'>
									<div class='col-md-3'>
									</div>
									<div class='col-md-3'>
									</div>
									<div class="col-md-3">
									</div>
									<div class="col-md-3">
										<a class="btn btn-success addMore glyphicon glyphicon glyphicon-plus"></a>
									</div>
								</div>
								</br>
								<div class='row'>
									<div class='col-md-3'>
									</div>
									<div class='col-md-3'>
									</div>
									<div class="col-md-3">
										<label>Sub Total</label>
									</div>
									<div class="col-md-3">
										<input class='form-control input-sm' id="subTotal" name='txtSubTotal'
											   type='text'
											   placeholder='Sub Total'>
									</div>
								</div>
								<div class='row'>
									<div class='col-md-3'>
									</div>
									<div class='col-md-3'>
									</div>
									<div class="col-md-3">
										<label>Discount</label>
									</div>
									<div class="col-md-3">
										<input class='form-control input-sm' name='txtInvoiceTotal' type='text'
											   placeholder='Discount'>
									</div>
								</div>
								<div class='row'>
									<div class='col-md-3'>
									</div>
									<div class='col-md-3'>
									</div>
									<div class="col-md-3">
										<label>Total</label>
									</div>
									<div class="col-md-3">
										<input class='form-control input-sm' name='txtInvoiceTotal' type='text'
											   placeholder='Total' id="total">
									</div>
								</div>

								</br>
								<div class="row">
									<div class="col-md-3">
									</div>
									<div class="col-md-3">
									</div>
									<div class="col-md-3">
										<input class="form-control input-sm btn btn-success" type="submit"
											   style="display: block" value="Print">
										</br>
									</div>
									<div class="col-md-3">
										<input class="form-control input-sm btn btn-info" type="submit"
											   style="display: block" value="Save">
										<br/>
									</div>
								</div>
							</ul>
					</form>
				</div>
			</div>
		</div>
	</div>
	</section>
</div>
<?php $this->load->view("footer"); ?>
<?php $this->load->view("rightsidebar"); ?>
<div class="control-sidebar-bg"></div>
</div>
<?php $this->load->view("header-js"); ?>
<script src="<?php echo base_url(); ?>/theme/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>/theme/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script>
	//
	function sum() {
		var result=0;
		var txtFirstNumberValue = document.getElementById('quantity').value;
		var txtSecondNumberValue = document.getElementById('unitPrice').value;
		if (txtFirstNumberValue !="" && txtSecondNumberValue ==""){
			result = parseFloat(txtFirstNumberValue);
		}else if(txtFirstNumberValue == "" && txtSecondNumberValue != ""){
			result= parseFloat(txtSecondNumberValue);
		}else if (txtSecondNumberValue != "" && txtFirstNumberValue != ""){
			result = parseFloat(txtFirstNumberValue) * parseFloat(txtSecondNumberValue);
		}
		if (!isNaN(result)) {
			document.getElementById('itemTotal').value = result.toString()+".00";
		}
	}

	//Date picker
	$(document).ready(function () {
		$(function () {
			$("#datepicker").datepicker({
				format: 'yyyy-mm-dd',
				todayHighlight: true,
				autoClose: true,
				clearBtn: true,
				// todayBtn: "linked",
				startDate: '-10d',
				endDate: '+1d'
			});
		});
		// function to payment type select
		// $(window).load(function () {
		$("#creditPeriodLabel").hide();
		$("#creditPeriod").hide();
		// });

		$("#invoiceType").change(function () {
			if ($("#invoiceType option:selected").text() == "Credit") {
				$("#creditPeriodLabel").show();
				$("#creditPeriod").show();
			}
			else {
				$("#creditPeriodLabel").hide();
				$("#creditPeriod").hide();
			}
		});

		$(function () {
			$('#tblItemDet').DataTable({
				"paging": true,
				"lengthChange": false,
				"searching": false,
				"ordering": true,
				"info": true,
				"autoWidth": false
			});
		});
		//group add limit
		var maxGroup = 30;
		var htmlRow = '';
		//add more fields group
		$(".addMore").click(function () {
			if ($('body').find('.fieldGroup').length < maxGroup) {
				var fieldHTML = '<div class="row fieldGroup">' + $(".fieldGroupCopy").html() + '</div>';
				$('body').find('.fieldGroup:last').after(fieldHTML);
			} else {
				alert('Maximum ' + maxGroup + ' items are allowed.');
			}
		});

		//remove fields group
		$("body").on("click", ".remove", function () {
			$(this).parents(".fieldGroup").remove();
		});
		// $("body").on("blur", "#itemTotal", function () {
		// 	var subTotal = 0;
		// 	$('#itemTotal').each(function () {
		// 		subTotal += parseInt($(this).attr('value'));
		// 	});
		// 	$('#subTotal').val(subTotal);
		// });
		// //-----------------------------------------------
		// $('.item-qty input').bind('keyup', function(){
        //
		// 	var subTotal = 0.0;
        //
		// 	$('#itemTotal').each(function(){
		// 		var priceStr = $(this).attr('value');
		// 		var price = parseInt(priceStr);
		// 		subTotal = subTotal + parseInt(price);
		// 	});
        //
		// 	$('#subTotal').val(subTotal);
		// });
		// sum of all
		// $('#itemTotal').blur(function () {
		// 	var subTotal = 0;
		// 	$('#itemTotal').each(function() {
		// 		subTotal += Number($(this).attr('value'));
		// 	});
		// 	$('#subTotal').val(subTotal);
		// });​​​​​​​​​
	});

</script>

</body>
</html>
