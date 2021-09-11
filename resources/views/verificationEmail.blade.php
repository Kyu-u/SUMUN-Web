<body class="body"
	style="padding:0 !important; margin:0 !important; display:block !important; min-width:100% !important; width:100% !important; -webkit-text-size-adjust:none;">
	<style type="text/css" media="screen">
		/* Linked Styles */
		body {
			padding: 0 !important;
			margin: 0 !important;
			display: block !important;
			min-width: 100% !important;
			width: 100% !important;
			-webkit-text-size-adjust: none
		}

		a {
			color: #66c7ff;
			text-decoration: none
		}

		p {
			padding: 0 !important;
			margin: 0 !important
		}

		img {
			-ms-interpolation-mode: bicubic;
			/* Allow smoother rendering of resized image in Internet Explorer */
		}

		.mcnPreviewText {
			display: none !important;
		}


		/* Mobile styles */
		@media only screen and (max-device-width: 480px),
		only screen and (max-width: 480px) {
			.mobile-shell {
				width: 100% !important;
				min-width: 100% !important;
			}

			.bg {
				background-size: 100% auto !important;
				-webkit-background-size: 100% auto !important;
			}

			.text-header,
			.m-center {
				text-align: center !important;
			}

			.center {
				margin: 0 auto !important;
			}

			.container {
				padding: 20px 10px !important
			}

			.td {
				width: 100% !important;
				min-width: 100% !important;
			}

			.m-br-15 {
				height: 15px !important;
			}

			.p30-15 {
				padding: 30px 15px !important;
			}

			.m-td,
			.m-hide {
				display: none !important;
				width: 0 !important;
				height: 0 !important;
				font-size: 0 !important;
				line-height: 0 !important;
				min-height: 0 !important;
			}

			.m-block {
				display: block !important;
			}

			.fluid-img img {
				width: 100% !important;
				max-width: 100% !important;
				height: auto !important;
			}

			.column,
			.column-top,
			.column-empty,
			.column-empty2,
			.column-dir-top {
				float: left !important;
				width: 100% !important;
				display: block !important;
			}

			.column-empty {
				padding-bottom: 10px !important;
			}

			.column-empty2 {
				padding-bottom: 30px !important;
			}

			.content-spacing {
				width: 15px !important;
			}
		}
	</style>
	<table width="50%" border="0" cellspacing="0" cellpadding="0" style="margin: auto; padding:40px 0; ">
		<tbody>
			<tr>
				<td style="padding-bottom:10px ">
					<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#57CA85"
						style="border-radius:10px 10px 10px 10px;">
						<tbody>
							<tr>
								<td style="padding:20px 77px ">
									<table width="100%" border="0" cellspacing="0" cellpadding="0">
										<tbody>
											<tr>
												<td
													style="color:white;font-family:'Cabin',sans-serif;font-size:30px;line-height:34px;text-align:center;padding-bottom:20px">
													Verify your email
												</td>
											</tr>
											<tr>
												<td
													style="color:white;font-family:'Cabin',sans-serif;font-size:14px;line-height:26px;text-align:center;padding-bottom:20px">
													Click the link bellow to verify your email
												</td>
											</tr>
											<tr>
												<td align="center" ">
										<table border=" 0" cellspacing="0" cellpadding="0">
										<tbody>
											<tr>
												<td
													style=" background:#469766;font-family:'Muli',Arial,sans-serif;font-size:14px;line-height:18px;padding:12px 30px;text-align:center;border-radius:10px 10px 10px 10px;font-weight:bold">
													<a href="{{ route('user.verify', $token) }}"><span
															style="color:#ffffff;text-decoration:none">Verify</span>
													</a>
												</td>
											</tr>
										</tbody>
									</table>
								</td>
							</tr>

						</tbody>
					</table>
					<!-- END Intro -->


</body>