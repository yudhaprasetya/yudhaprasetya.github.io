<div class="w3-border w3-round">
  <div class="w3-bar w3-border-bottom">
    <button class="w3-bar-item w3-button tablink" onclick="openCity(event,'pulsa')">Pulsa</button>
    <button class="w3-bar-item w3-button tablink" onclick="openCity(event,'paket-data')">Paket Data</button>
    <button class="w3-bar-item w3-button tablink" onclick="openCity(event,'pln')">Listrik PLN</button>
    <button class="w3-bar-item w3-button tablink" onclick="openCity(event,'pdam')">AIR PDAM</button>
  </div>

  <div id="pulsa" class="w3-padding city">
    <table class="w3-table">
      <tr>
        <td>Nomor HP</td>
        <td>Nominal Pulsa</td>
        <td></td>
      </tr>
      <tr>
        <td><input class="w3-input w3-border w3-round" placeholder="Nomor Hp" type="text" name="" value=""> </td>
        <td><input class="w3-input w3-border w3-round" placeholder="Nominal Pulsa" type="text" name="" value=""></td>
        <td><a class="w3-button w3-blue w3-round" href="#">Beli</a></td>
      </tr>
    </table>
  </div>

  <div id="paket-data" class="w3-padding city" style="display:none">
    <table class="w3-table">
      <tr>
        <td>Nomor HP</td>
        <td>Pilih Paket</td>
        <td></td>
      </tr>
      <tr>
        <td><input class="w3-input w3-border w3-round" placeholder="Nomor Hp" type="text" name="" value=""> </td>
        <td><input class="w3-input w3-border w3-round" placeholder="Jenis Paket" type="text" name="" value=""></td>
        <td><a class="w3-button w3-blue w3-round" href="#">Beli</a></td>
      </tr>
    </table>
  </div>

  <div id="pln" class="w3-padding city" style="display:none">
    <table class="w3-table">
      <tr>
        <td>Nomor Token Listrik</td>
        <td>Nominal Pulsa Listrik</td>
        <td></td>
      </tr>
      <tr>
        <td><input class="w3-input w3-border w3-round" placeholder="Nomor Token Listrik" type="text" name="" value=""> </td>
        <td><input class="w3-input w3-border w3-round" placeholder="Nominal Pulsa Listrik" type="text" name="" value=""></td>
        <td><a class="w3-button w3-blue w3-round" href="#">Beli</a></td>
      </tr>
    </table>
  </div>

  <div id="pdam" class="w3-padding city" style="display:none">
    <table class="w3-table">
      <tr>
        <td>Nomor Meteran AIR</td>
        <td>Nominal Pulsa</td>
        <td></td>
      </tr>
      <tr>
        <td><input class="w3-input w3-border w3-round" placeholder="Nomor Hp" type="text" name="" value=""> </td>
        <td><input class="w3-input w3-border w3-round" placeholder="Nomor Hp" type="text" name="" value=""></td>
        <td><a class="w3-button w3-blue w3-round" href="#">Beli</a></td>
      </tr>
    </table>
  </div>
</div>
