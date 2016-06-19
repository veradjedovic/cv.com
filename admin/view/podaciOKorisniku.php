<table class="table bg-success table-bordered table-striped table-hover">
<tr>
<td>ID korisnika:</td><td><?php echo isset($this->data ->korisnik_id) ? $this->data ->korisnik_id : "" ; ?></td>
</tr>
<tr>
<td>Datum prijave:</td><td> <?php echo isset($this->data ->datum_prijave) ? $this->data ->datum_prijave : "" ; ?></td>
</tr>
<tr>
<td>Datum rodjenja:</td><td> <?php echo isset($this->data ->godina) ? $this->data ->godina : "" ; ?></td>
</tr>
<tr>
<td>Ulica:</td><td> <?php echo isset($this->data ->adresa_stanovanja) ? $this->data ->adresa_stanovanja : "" ; ?></td>
</tr>
<tr>
<td>Opstina:</td><td> <?php echo isset($this->data ->opstina) ? $this->data ->opstina : "" ; ?>.</td>
</tr>
<tr>
<td>Oblast interesovanja:</td><td> <?php echo isset($this->data ->sektor) ? $this->data ->sektor : "" ; ?></td>
</tr>
<tr>
<td>Zeljenja vrsta angazmana:</td><td> <?php echo isset($this->data ->vrsta_angazmana) ? $this->data ->vrsta_angazmana : "" ; ?></td>
</tr>
<tr>
<td>Radno vreme:</td><td><?php echo isset($this->data ->radno_vreme) ? $this->data ->radno_vreme : "" ; ?></td>
</tr>
<tr>
<td>Strucna sprema:</td><td> <?php echo isset($this->data ->strucna_sprema) ? $this->data ->strucna_sprema : "" ; ?></td>
</tr>
<tr>
<td>Vozacka dozvola:</td><td> <?php echo isset($this->data ->vozacka_dozvola) ? $this->data ->vozacka_dozvola : "" ; ?></td>
</tr>
<tr>
<td>Kontakt telefon:</td><td> <?php echo isset($this->data ->telefon) ? $this->data ->telefon : "" ; ?></td>
</tr>
<tr>
<td>Email:</td><td> <?php echo isset($this->data ->email) ? $this->data ->email : "" ; ?></td>
</tr>
</table>
<h3>Ime i prezime kandidata: <?php echo (isset($this->data -> ime) ? $this->data -> ime : "") . " " . (isset($this->data ->prezime) ? $this->data ->prezime : "") ;?></h3>

<p>Ukoliko Vam odgovara kandidat,</p> 
<p>njegov CV mozete pogledati <a href='../documents/<?php echo isset($this->data ->dokument) ? $this->data ->dokument. ".pdf" : "" ; ?>' target='_blank'>ovde</a></p>

