<!doctype html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<title>Tienda Virtual - Rayitas S.A.</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
	<!--escribir aquí-->
	<header class="container-fluid  bg-primary text-white">
		<div class="container p-2 ">
			<h1>Tienda Virtual<br>
				<small>Rayitas S.A. </small>
			</h1>
		</div>

	</header>
	<table class="container table table-dark table-bordered border-primary mt-3">
		<thead>
			<tr class="text-primary">
				<th>Producto</th>
				<th>Precio</th>
				<th>Cantidad</th>
				<th>Total</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Rayas Verticales</td>
				<td>
					<?php echo '$' . number_format($precio = $_GET['precio']); ?>
				</td>
				<td>
					<?php echo number_format($cantidad = $_GET['cantidad']); ?>
				</td>
				<td>
					<?php echo '$' . number_format($subtotal = $precio * $cantidad); ?>
				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td class="text-primary">ENVIO</td>
				<td>
					<?php if ($subtotal > 50000) {
						$envio = 0;
					} elseif ($cantidad < 1) {
						$envio = 0;
					}
					 elseif ($subtotal > 25000) {
						$envio = 2000;
					} else {
						$envio = 5000;
					}
					echo '$' . number_format($envio); ?>
				</td>
			</tr>
			<?php 
			if ($subtotal > 50000){
				$descuento = $subtotal *0.1 ;
				echo "<tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td class=\"text-primary\">DESCUENTO 10%</td>
				<td>".'$'. number_format($descuento) ."</td>
				</td>
				</tr>";
			} else {
				$descuento = 0;
			}  ?>
			
			<tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td class="text-primary">SUBTOTAL</td>
				<td>
					<?php echo '$' . number_format($subtotal = $subtotal - $descuento + $envio); ?>
				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td class="text-primary">IVA</td>
				<td>
					<?php echo '$' . number_format($iva = $subtotal * 0.19); ?>
				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td class="text-primary">TOTAL</td>
				<td>
					<?php echo '$' . number_format($total = $iva + $subtotal); ?>
				</td>
			</tr>
		</tbody>
	</table>
	<p>&nbsp;</p>
	<!-- Julián Araya LPD3111-003D -->
	<!--escribir aquí-->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
		crossorigin="anonymous"></script>
</body>

</html>