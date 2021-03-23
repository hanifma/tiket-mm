<div class="flight-wrapper">

	<!-- ###### -->
	<div class="flight-booking-info row">
		<div class="col-lg-12 animated fadeIn">
			<div class="customer-data">
				<div class="booking-title">
					<h4>
						<span class="glyphicon glyphicon-modal-window"></span>
						Reservasi
					</h4>
					<div class="booking-line"></div>
					<h3 class="booking-code">Kode Reservasi Anda <span><?php echo $_GET['reservation_code'] ?></span></h3>
				</div>
			</div>
		</div>
		<div class="col-lg-7 animated fadeInLeft">
			<?php $i=1 ?>
			<?php foreach ( $customer as $value ): ?>
			<div class="customer-data">
				<div class="booking-title">
					<h4>
						<span class="glyphicon glyphicon-user"></span>
						Penumpang
						<?php echo $i ?>
					</h4>
					<div class="booking-line"></div>
				</div>
				<table class="table-customer">
					<tr>
						<td class="h">Nama</td>
						<td>:</td>
						<td class="c">
							<?php echo $value['name'] ?>
						</td>
					</tr>
					<tr>
						<td class="h">Alamat</td>
						<td>:</td>
						<td class="c">
							<?php echo $value['address'] ?>
						</td>
					</tr>
					<tr>
						<td class="h">Nomer Telepon</td>
						<td>:</td>
						<td class="c">
							<?php echo $value['phone'] ?>
						</td>
					</tr>
					<tr>
						<td class="h">Email</td>
						<td>:</td>
						<td class="c">
							<?php echo $value['email'] ?>
						</td>
					</tr>
					<tr>
						<td class="h">Kelamin</td>
						<td>:</td>
						<td class="c">
							<?php echo $value['gender'] ?>
						</td>
					</tr>
					<tr class="s">
						<td class="h">Seat</td>
						<td>:</td>
						<td class="c">
							<?php echo $value['seat'] ?>
						</td>
					</tr>
				</table>
			</div>
			<?php $i++ ?>
			<?php endforeach; ?>

		</div>

		<div class="col-lg-5 animated fadeInRight">
			<div class="flight-booking-1">
				<div class="booking-title">
					<h4>
						<span class="glyphicon glyphicon-plane"></span> Detail Penerbangan</h4>
					<div class="booking-line"></div>
				</div>
				<table class="flight-table table-customer">
					<tr>
						<td>Pesawat</td>
						<td> : </td>
						<td class="c">
							<?php echo $rute['code'] ?>
						</td>
					</tr>
					<tr>
						<td>Tanggal Berangkat</td>
						<td> : </td>
						<td class="c">
							<?php 
                echo date('G:i:s, D d M Y', strtotime($rute['depart']));
                ?>
						</td>
					</tr>
					<tr>
						<td>Tanggal Sampai</td>
						<td> : </td>
						<td class="c">
							<?php 
                echo date('G:i:s, D d M Y', strtotime($rute['arrive']));
                ?>
						</td>
					</tr>
					<tr>
						<td>Lama Perjalanan</td>
						<td> : </td>
						<td class="c">
							<?php
            $datetime1 = new DateTime($rute['depart']); //convert to datetime
            $datetime2 = new DateTime($rute['arrive']); //convert to datetime
            $interval = $datetime1->diff($datetime2); //get interval from two datetime
            echo $interval->format('%d d %H h %i m'); //convert interval to  day hours and minute
            //materikita.com
            ?>
						</td>
					</tr>
					<tr>
						<td>Kelas</td>
						<td> : </td>
						<td class="c">
							<?php echo $rute['class'] ?>
						</td>
					</tr>
				</table>
			</div>

			<div class="flight-booking-2">
				<div class="booking-title">
					<h4>
						<span class="glyphicon glyphicon-pencil"></span> Total</h4>
					<div class="booking-line"></div>
				</div>

				

				<table class="summary-table table-customer">
					<tr>
						<td>Harga Tiket</td>
						<td> : </td>
						<td class="c">
							<?php 
            echo "Rp." . strrev(implode('.', str_split(strrev(strval($rute['price'])), 3)));
            ?>
						</td>
					</tr>
					<tr>
						<td>Jumlah Penumpang</td>
						<td> : </td>
						<td class="c">
							<?php echo count($customer) ?>
						</td>
					</tr>
					<tr class="price-you-pay">
						<td>Total yang harus dibayar</td>
						<td> : </td>
						<td class="c">
							<?php 
            echo "Rp." . strrev(implode('.', str_split(strrev(strval(count($customer)*$rute['price'])), 3)));
            ?>
						</td>
					</tr>
				</table>
				<?php if ( $rute['status'] == 0 ): ?>
				<div class="booking-unpaid">
					<h4>
						 Silahkan melakukan pembayaran via transfer ke : 
					</h4>
					<table class="table-payment">
						<tr>
							<td>Mandiri</td>
							<td>:</td>
							<td>900981231</td>
						</tr>
						<tr>
							<td>BCA</td>
							<td>:</td>
							<td>900138234</td>
						</tr>
						<tr>
							<td>BNI</td>
							<td>:</td>
							<td>400437834</td>
						</tr>
					</table>
				</div>
				<div class="booking-paid">
					<!-- <div class="booking-line"></div> -->
					<?php if ( $proof_of_payment !== null ): ?>
						<div style="background-image:url(<?php echo base_url() ?>_assets/proof_of_payment/<?php echo $proof_of_payment ?>)" class="booking-img-proof"></div>
						<br/><h3 class="status-unpaid">Sedang di Konfirmasi</h3>
					<?php endif; ?>

					<h4>Kirim bukti pembayaran</h4>
					<form action="<?php echo base_url() ?>reservation/proof_of_payment" method="POST" enctype="multipart/form-data">
						<input type="hidden" name="reservation_code" value="<?php echo $_GET['reservation_code'] ?>">
						<input class="form-control" name="image" type="file">
						<button class="choose-btn">Konfirmasi</button>
					</form>
				</div>

				<?php else: ?>
				<div class="booking-paid">
						<?php if ( $rute['status'] == 0 ): ?>
						
						<?php else: ?>
						<h3 class="status-paid">Pemesanan Tiket Berhasil</h3>
						<?php endif; ?>
				</div>
				<?php endif; ?>
				
			</div>


		</div>
	</div>
</div>
</div>
