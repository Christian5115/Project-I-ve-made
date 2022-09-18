<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Pemesanan Roti 
        <small>(1 Pack = 5 Roti)</small>
      </h1>
      
    </section>
    <section class="content">

    <div class="row">
      <div class="col-md-6">
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Isikan Data Pemesanan Anda</h3>
            </div>
            <div class="box-body">
              <form id="form_pemesanan" name="form_pemesanan">
                <div class="form-group">
                  <label for="nama">Nama</label>
                  <input type="text" class="form-control" id="nama" name="nama" placeholder="isikan Nama Anda disini..." value="<?php if($editmhs)echo $editmhs[0]['nama']; ?>">
                </div>
                <div class="form-group">
                  <label for="metode">Metode Pengambilan</label>
                  <small>(Biaya pengantaran akan ditanggung oleh kami)</small>
                  <div class="input-group">
                    <input class="flat-green" type="radio" id="metode" name="metode" value="self-pickup" <?php if(!$editmhs){echo 'checked';}else{if($editmhs[0]['metode']=='self-pickup')echo 'checked';} ?>> Self-pickup</input>
                    &emsp;
                    <input class="flat-green" type="radio" id="metode" name="metode" value="GoSend" <?php if($editmhs){if($editmhs[0]['metode']=='GoSend')echo 'checked';} ?>> GoSend</input>
                  </div>
                </div>
                <div class="form-group">
                  <label for="alamat">Alamat</label>
                  <input type="text" class="form-control" id="alamat" name="alamat" placeholder="isikan alamat Anda disini..." value="<?php if($editmhs)echo $editmhs[0]['alamat']; ?>">
                </div>
                <div class="form-group">
                  <label for="notelp">No.HP</label>
                  <input type="text" class="form-control" id="notelp" name="notelp" placeholder="isikan No.HP Anda disini..." value="<?php if($editmhs)echo $editmhs[0]['notelp']; ?>">
                </div>
                <div class="form-group">
                  <label for="tgl_peng">Tanggal Pengambilan</label>
                  <div class="input-group date">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" class="form-control" id="tgl_peng" name="tgl_peng" value="<?php if($editmhs)echo $editmhs[0]['tgl_peng']; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="roti1">Roti 1</label>
                  <select id="roti1" name="roti1" class="form-control">
                    <option value="Roti Kacang" <?php if(!$editmhs){echo 'selected';}else{if($editmhs[0]['roti1']=='Roti Kacang')echo 'selected';} ?>>Roti Kacang</option>
                    <option value="Roti Keju" <?php if($editmhs){if($editmhs[0]['roti1']=='Roti Keju')echo 'selected';} ?>>Roti Keju</option>
                    <option value="Roti Srikaya" <?php if($editmhs){if($editmhs[0]['roti1']=='Roti Srikaya')echo 'selected';} ?>>Roti Srikaya</option>
                    <option value="Roti Abon" <?php if($editmhs){if($editmhs[0]['roti1']=='Roti Abon')echo 'selected';} ?>>Roti Abon</option>
                    <option value="Roti 3Rasa" <?php if($editmhs){if($editmhs[0]['roti1']=='Roti 3Rasa')echo 'selected';} ?>>Roti 3Rasa</option>
                    <option value="Pizza" <?php if($editmhs){if($editmhs[0]['roti1']=='Pizza')echo 'selected';} ?>>Pizza</option>
                    <option value="Roti Sosis" <?php if($editmhs){if($editmhs[0]['roti1']=='Roti Sosis')echo 'selected';} ?>>Roti Sosis</option>
                    <option value="Roti Cokelat" <?php if($editmhs){if($editmhs[0]['roti1']=='Roti Cokelat')echo 'selected';} ?>>Roti Cokelat</option>
                    </select>
                </div>
                <div class="form-group">
                  <label for="roti2">Roti 2</label>
                  <select id="roti2" name="roti2" class="form-control">
                    <option value="Roti Kacang" <?php if(!$editmhs){echo 'selected';}else{if($editmhs[0]['roti2']=='Roti Kacang')echo 'selected';} ?>>Roti Kacang</option>
                    <option value="Roti Keju" <?php if($editmhs){if($editmhs[0]['roti2']=='Roti Keju')echo 'selected';} ?>>Roti Keju</option>
                    <option value="Roti Srikaya" <?php if($editmhs){if($editmhs[0]['roti2']=='Roti Srikaya')echo 'selected';} ?>>Roti Srikaya</option>
                    <option value="Roti Abon" <?php if($editmhs){if($editmhs[0]['roti2']=='Roti Abon')echo 'selected';} ?>>Roti Abon</option>
                    <option value="Roti 3Rasa" <?php if($editmhs){if($editmhs[0]['roti2']=='Roti 3Rasa')echo 'selected';} ?>>Roti 3Rasa</option>
                    <option value="Pizza" <?php if($editmhs){if($editmhs[0]['roti2']=='Pizza')echo 'selected';} ?>>Pizza</option>
                    <option value="Roti Sosis" <?php if($editmhs){if($editmhs[0]['roti2']=='Roti Sosis')echo 'selected';} ?>>Roti Sosis</option>
                    <option value="Roti Cokelat" <?php if($editmhs){if($editmhs[0]['roti2']=='Roti Cokelat')echo 'selected';} ?>>Roti Cokelat</option>
                    </select>
                </div>
                <div class="form-group">
                  <label for="roti3">Roti 3</label>
                  <select id="roti3" name="roti3" class="form-control">
                    <option value="Roti Kacang" <?php if(!$editmhs){echo 'selected';}else{if($editmhs[0]['roti3']=='Roti Kacang')echo 'selected';} ?>>Roti Kacang</option>
                    <option value="Roti Keju" <?php if($editmhs){if($editmhs[0]['roti3']=='Roti Keju')echo 'selected';} ?>>Roti Keju</option>
                    <option value="Roti Srikaya" <?php if($editmhs){if($editmhs[0]['roti3']=='Roti Srikaya')echo 'selected';} ?>>Roti Srikaya</option>
                    <option value="Roti Abon" <?php if($editmhs){if($editmhs[0]['roti3']=='Roti Abon')echo 'selected';} ?>>Roti Abon</option>
                    <option value="Roti 3Rasa" <?php if($editmhs){if($editmhs[0]['roti3']=='Roti 3Rasa')echo 'selected';} ?>>Roti 3Rasa</option>
                    <option value="Pizza" <?php if($editmhs){if($editmhs[0]['roti3']=='Pizza')echo 'selected';} ?>>Pizza</option>
                    <option value="Roti Sosis" <?php if($editmhs){if($editmhs[0]['roti3']=='Roti Sosis')echo 'selected';} ?>>Roti Sosis</option>
                    <option value="Roti Cokelat" <?php if($editmhs){if($editmhs[0]['roti3']=='Roti Cokelat')echo 'selected';} ?>>Roti Cokelat</option>
                    </select>
                </div>
                <div class="form-group">
                  <label for="roti4">Roti 4</label>
                  <select id="roti4" name="roti4" class="form-control">
                    <option value="Roti Kacang" <?php if(!$editmhs){echo 'selected';}else{if($editmhs[0]['roti4']=='Roti Kacang')echo 'selected';} ?>>Roti Kacang</option>
                    <option value="Roti Keju" <?php if($editmhs){if($editmhs[0]['roti4']=='Roti Keju')echo 'selected';} ?>>Roti Keju</option>
                    <option value="Roti Srikaya" <?php if($editmhs){if($editmhs[0]['roti4']=='Roti Srikaya')echo 'selected';} ?>>Roti Srikaya</option>
                    <option value="Roti Abon" <?php if($editmhs){if($editmhs[0]['roti4']=='Roti Abon')echo 'selected';} ?>>Roti Abon</option>
                    <option value="Roti 3Rasa" <?php if($editmhs){if($editmhs[0]['roti4']=='Roti 3Rasa')echo 'selected';} ?>>Roti 3Rasa</option>
                    <option value="Pizza" <?php if($editmhs){if($editmhs[0]['roti4']=='Pizza')echo 'selected';} ?>>Pizza</option>
                    <option value="Roti Sosis" <?php if($editmhs){if($editmhs[0]['roti4']=='Roti Sosis')echo 'selected';} ?>>Roti Sosis</option>
                    <option value="Roti Cokelat" <?php if($editmhs){if($editmhs[0]['roti4']=='Roti Cokelat')echo 'selected';} ?>>Roti Cokelat</option>
                    </select>
                </div>
                <div class="form-group">
                  <label for="roti5">Roti 5</label>
                  <select id="roti5" name="roti5" class="form-control">
                    <option value="Roti Kacang" <?php if(!$editmhs){echo 'selected';}else{if($editmhs[0]['roti5']=='Roti Kacang')echo 'selected';} ?>>Roti Kacang</option>
                    <option value="Roti Keju" <?php if($editmhs){if($editmhs[0]['roti5']=='Roti Keju')echo 'selected';} ?>>Roti Keju</option>
                    <option value="Roti Srikaya" <?php if($editmhs){if($editmhs[0]['roti5']=='Roti Srikaya')echo 'selected';} ?>>Roti Srikaya</option>
                    <option value="Roti Abon" <?php if($editmhs){if($editmhs[0]['roti5']=='Roti Abon')echo 'selected';} ?>>Roti Abon</option>
                    <option value="Roti 3Rasa" <?php if($editmhs){if($editmhs[0]['roti5']=='Roti 3Rasa')echo 'selected';} ?>>Roti 3Rasa</option>
                    <option value="Pizza" <?php if($editmhs){if($editmhs[0]['roti5']=='Pizza')echo 'selected';} ?>>Pizza</option>
                    <option value="Roti Sosis" <?php if($editmhs){if($editmhs[0]['roti5']=='Roti Sosis')echo 'selected';} ?>>Roti Sosis</option>
                    <option value="Roti Cokelat" <?php if($editmhs){if($editmhs[0]['roti5']=='Roti Cokelat')echo 'selected';} ?>>Roti Cokelat</option>
                    </select>
                </div>
              
            </div>
            <div class="box-footer">
              <a name='submit' id='submit' href="javascript:void();" class="btn btn-primary pull-right" onclick='addPemesanan()'>Submit</a>
            </div>
            </form>
        </div>
      </div>
      <div class="col-md-5">
        <div class="box box-warning">
          <div class="box-header with-border">
            <h3 class="box-title">Data Pemesanan</h3>
          </div>
          <div class="box-body">
            <table id="table_pemesanan" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>NO</th>
                  <th>NAMA</th>
                  <th>METODE</th>
                  <th>ALAMAT</th>
                  <th>NO.HP</th>
                  <th>TGLPENGAMBILAN</th>
                  <th>ROTI1</th>
                  <th>ROTI2</th>
                  <th>ROTI3</th>
                  <th>ROTI4</th>
                  <th>ROTI5</th>
                  <th>ACTION</th>
                </tr>
              </thead>
              <tbody>
                
                  <?php
                      if(count($dtmhs) > 0)
                      {
                        for($i = 0; $i < count($dtmhs); $i++)
                        {
                          echo "<tr>";
                          echo '<td>'.($i+1).'</td>';
                          echo '<td>'.$dtmhs[$i]['nama'].'</td>';
                          echo '<td>'.$dtmhs[$i]['metode'].'</td>';
                          echo '<td>'.$dtmhs[$i]['alamat'].'</td>';
                          echo '<td>'.$dtmhs[$i]['notelp'].'</td>';
                          echo '<td>'.$dtmhs[$i]['tgl_peng'].'</td>';
                          echo '<td>'.$dtmhs[$i]['roti1'].'</td>';
                          echo '<td>'.$dtmhs[$i]['roti2'].'</td>';
                          echo '<td>'.$dtmhs[$i]['roti3'].'</td>';
                          echo '<td>'.$dtmhs[$i]['roti4'].'</td>';
                          echo '<td>'.$dtmhs[$i]['roti5'].'</td>';

                          echo '<td><a href="'.base_url('CPemesanan/edit?nama='.$dtmhs[$i]['nama']).'" class="btn btn-primary">edit</a>&emsp;';
                          echo '<a href="'.base_url('CPemesanan/hapus?nama='.$dtmhs[$i]['nama']).'" class="btn btn-danger" onClick='.'"return confirm('."'Apakah anda yakin ingin menghapus pesanan Anda ".$dtmhs[$i]['nama']."?')".'">hapus</a></td>';
                          echo '</tr>';
                        }
                      }
                      else
                      {
                        echo '<tr><td colspan="12" style="font-style:italic; text-align:center;">- tidak ada data -</td></tr>';
                      }
                  ?>
                  
                
              </tbody>
              </tfoot></tfoot>
            </table>
          </div>
          <div class="box-footer"></div>
        </div>
      </div>
    </div>

    </section>

  </div>  