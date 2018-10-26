 <h3 align="center">Laporan Hasil Diagnosa Pengguna</h3>   
  <p align="center">
     <table border="1">
 <br>
 <br>
 <br>

<table style="border:solid 1px;">

		<thead>	
				<tr>
				<!-- 	<th style="border:solid 1px;">No</th> -->
				 <td width="30"><strong>No</strong></div></td>
				
					<th style="border:solid 1px;">Nama </th>
					<th style="border:solid 1px;">Jenis kelamin </th>
					<th style="border:solid 1px;">Umur </th>
					<th style="border:solid 1px;">Alamat </th>
					<th style="border:solid 1px;">Tanggal </th>
				</tr>
		</thead>

		<tbody>	 

		<?php foreach($user as $list => $value): ?>
				
				<tr style="border:solid 1px;">
					<!-- <td style="border:solid 1px;"><?php echo  $no++ ?></td> -->
					<td><?php echo $no; ?></td>
					<td  style="border:solid 1px;"><?php echo $value->nama ?></td>
					<td  style="border:solid 1px;"><?php echo $value->jenis_kelamin ?></td>
					<td  style="border:solid 1px;"><?php echo $value->umur ?></td>
					<td  style="border:solid 1px;"><?php echo $value->alamat ?></td>
					<!-- <td  style="border:solid 1px;"><?php echo $value->alamat ?></td> -->
					
					 <!-- <?php
                    
                    ?>

                </table><br><br><br>
                <table border="0">
                <tr>
                  <td width="600"></td>
                  <td width="0">Makassar<?php echo date(", d F Y") ?></td>
                </tr>
                <tr> 
                <td width="600"></td>
                <td width="0">Kepala Balai,<br><br><br><br><br>---------------------------------</td>
                </tr>
                
                </table>
                </p> -->

				</tr>
		<?php endforeach ?>
		</tbody>
</table>

</table>
