<?
  session_start();
  if (!isset($_SESSION['username'])) {
    header("Location: index2.php");
  }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<TITLE>Website ALOHA Telkom Sisfo Jakarta Utara</TITLE>
<LINK href="style/style.css" type=text/css 
rel=StyleSheet></HEAD>
<BODY leftMargin=0 topMargin=0 marginwidth="0" marginheight="0">
<TABLE cellSpacing=0 cellPadding=0 width="100%" align=center bgColor=#6487dc 
border=0>
  <TBODY>
  <TR>

    <TD vAlign=top align=left width="74%" bgColor=#6487dc><img src="gambar/logo1.jpg" width="270" height="52"></TD>
    <TD vAlign=top align=right bgColor=#6487dc><A 
      href="utama.php"><IMG alt=Utama 
      src="gambar/forums.gif" 
  border=0></A><A 
      href="bukutamu.php"><IMG alt=Buku_Tamu 
      src="gambar/screenshots.gif" border=0></A><A 
      href="ambil.php"><IMG alt=Ambil 
      src="gambar/download.gif" border=0></A><A 
      href="forum.php"><IMG alt=Forum 
      src="gambar/maillist.gif" border=0></A><A 
      href="pertanyaan.php"><IMG alt=Pertanyaan 
      src="gambar/faq.gif" border=0></A></TD>
  </TR></TBODY></TABLE>
<TABLE cellSpacing=0 cellPadding=0 width="100%" align=center bgColor=#f3f4f7 
border=0>
  <TBODY>
  <TR>
    <TD bgColor=#6487dc colSpan=5><IMG height=1 alt="" hspace=0 
      src="gambar/pixel.gif" width=1 border=0></TD></TR>
  <TR vAlign=center bgColor=#eae7d1>
    <TD vAlign=top align=left width="1%" height=22><IMG 
      src="gambar/topnav-left.gif"></TD>
    <TD noWrap align=left 
    background="gambar/topnav-bg.gif" width="81%"><FONT 
      class=content color=#363636>&nbsp;&nbsp;<B>Website ALOHA Telkom Sisfo Jakarta Utara</B></FONT></TD></TD>
    <TD vAlign=top align=left width="1%" height=22><IMG 
      src="gambar/topnav-left.gif"></TD>
    <TD align=right width="17%" 
    background="gambar/topnav-bg.gif"><FONT 
      class=content>
      <SCRIPT type=text/javascript>

<!--   // Array ofmonth Names
var monthNames = new Array( "Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
var now = new Date();
thisYear = now.getYear();
if(thisYear < 1900) {thisYear += 1900}; // corrections if Y2K display problem
document.write( now.getDate() + " " + monthNames[now.getMonth()] + " " + thisYear + " " );
document.write( now.getHours() + ":" + now.getMinutes() + ":" + now.getSeconds() + " " );

// -->

</SCRIPT>
      </FONT>&nbsp;&nbsp;</TD></TR>
  <TR>
    <TD bgColor=#eae7d1 colSpan=5><IMG height=3 alt="" hspace=0 
      src="gambar/pixel.gif" width=1 border=0></TD></TR>
  <TR>
    <TD bgColor=#aca899 colSpan=5><IMG height=1 alt="" hspace=0 
      src="gambar/pixel.gif" width=1 border=0></TD></TR>
  <TR>
    <TD bgColor=#716f64 colSpan=5><IMG height=1 alt="" hspace=0 
      src="gambar/pixel.gif" width=1 
  border=0></TD></TR></TBODY></TABLE><!----- Begin Main Content Table ----->
<TABLE cellSpacing=0 cellPadding=0 width="100%" align=center bgColor=#ffffff 
border=0>
  <TBODY>
  <TR vAlign=top bordercolor="1" border="1">
    <TD height="610">&nbsp;</TD>
    <TD width=150 vAlign=top bordercolor="1"><BR>
	<TABLE cellSpacing=0 cellPadding=0 width=175 border=0>
        <TBODY>
        <TR>
          <TD>
            <TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
              <TBODY>
              <TR>
                <TD vAlign=top align=left width=26 height=30><IMG 
                  src="gambar/sidebox-title-left.gif"></TD>
                <TD vAlign=center align=left width=143 
                background="gambar/sidebox-title-bg.gif" 
                height=30><FONT class=option 
                  color=#ffffff>&nbsp;&nbsp;Otentifikasi  </FONT></TD>
                <TD vAlign=top align=left width=6 height=30><IMG 
                  src="gambar/sidebox-title-right.gif"></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE><!----- Side Box Content ----->
      <TABLE cellSpacing=0 cellPadding=0 width=175 border=0>
        <TBODY>
        <TR vAlign=top>
          <TD vAlign=top align=left width=4 
          background="gambar/sidebox-bar-left.gif"><IMG 
            src="gambar/sidebox-bar-px.gif"></TD>
          <TD vAlign=top align=left width=166 bgColor=#d6dff7>
            <TABLE cellSpacing=0 cellPadding=3 width=167 border=0>
              <TBODY>
              <TR>
                <TD>
				<center>
				  Anda Berhasil Login sebagai <br>
				  <b>"<? echo $_SESSION['username']; ?>"</b></center>
				<div align="center"><br>				
				    <A 
                  href="keluar.php">KELUAR</A></div></TD>
              </TR></TBODY></TABLE></TD>
          <TD vAlign=top align=left width=4 
          background="gambar/sidebox-bar-right.gif"><IMG 
            src="gambar/sidebox-bar-px.gif"></TD></TR></TBODY></TABLE>
      <TABLE cellSpacing=0 cellPadding=0 width=175 border=0>
        <TBODY>
        <TR>
          <TD vAlign=top align=left width=175 height=29><IMG 
            src="gambar/sidebox-bottom.gif"> 
        </TD></TR></TBODY></TABLE><BR>
      <TABLE cellSpacing=0 cellPadding=0 width=175 border=0>
        <TBODY>
        <TR>
          <TD>
            <TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
              <TBODY>
              <TR>
                <TD vAlign=top align=left width=26 height=30><IMG 
                  src="gambar/sidebox-title-left.gif"></TD>
                <TD vAlign=center align=left width=143 
                background="gambar/sidebox-title-bg.gif" 
                height=30><FONT class=option 
                  color=#ffffff>&nbsp;&nbsp;Lihat Data <B> </B></FONT></TD>
                <TD vAlign=top align=left width=6 height=30><IMG 
                  src="gambar/sidebox-title-right.gif"></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE><!----- Side Box Content ----->
      <TABLE cellSpacing=0 cellPadding=0 width=175 border=0>
        <TBODY>
        <TR vAlign=top>
          <TD vAlign=top align=left width=4 
          background="gambar/sidebox-bar-left.gif"><IMG 
            src="gambar/sidebox-bar-px.gif"></TD>
          <TD vAlign=top align=left width=166 bgColor=#d6dff7>
            <TABLE cellSpacing=0 cellPadding=3 width=167 border=0>
              <TBODY>
              <TR>
                <TD><STRONG><BIG>&middot;</BIG></STRONG>&nbsp;<A 
                  href="hw_lihat_ip2.php">Alamat IP</A><BR>
                  <STRONG><BIG>&middot;</BIG></STRONG>&nbsp;<A 
                  href="hw_lihat_master2.php">Data Hardware</A><BR>
                  <STRONG><BIG>&middot;</BIG></STRONG>&nbsp;<A 
                  href="lihat_data_pegawai2.php">Data Pegawai</A><BR>
                  <STRONG><BIG>&middot;</BIG></STRONG>&nbsp;<A 
                  href="lihat_hw_pegawai2.php">Hardware Pegawai</A><BR>
                  <STRONG><BIG>&middot;</BIG></STRONG>&nbsp;<A 
                  href="lihat_hw_idle2.php">Hardware IDLE</A><BR>
                  <STRONG><BIG>&middot;</BIG></STRONG>&nbsp;<A 
                  href="lihat_loker_hw2.php">Lokasi Kerja</A></TD>
              </TR></TBODY></TABLE></TD>
          <TD vAlign=top align=left width=4 
          background="gambar/sidebox-bar-right.gif"><IMG 
            src="gambar/sidebox-bar-px.gif"></TD></TR></TBODY></TABLE>
      <TABLE cellSpacing=0 cellPadding=0 width=175 border=0>
        <TBODY>
        <TR>
          <TD vAlign=top align=left width=175 height=29><IMG 
            src="gambar/sidebox-bottom.gif"> 
        </TD></TR></TBODY></TABLE><BR>
      <TABLE cellSpacing=0 cellPadding=0 width=175 border=0>
        <TBODY>
        <TR>
          <TD>
            <TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
              <TBODY>
              <TR>
                <TD vAlign=top align=left width=26 height=30><IMG 
                  src="gambar/sidebox-title-left.gif"></TD>
                <TD vAlign=center align=left width=143 
                background="gambar/sidebox-title-bg.gif" 
                height=30><FONT class=option 
                  color=#ffffff>&nbsp;&nbsp;Masukan Data <B> </B></FONT></TD>
                <TD vAlign=top align=left width=6 height=30><IMG 
                  src="gambar/sidebox-title-right.gif"></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE><!----- Side Box Content ----->
      <TABLE cellSpacing=0 cellPadding=0 width=175 border=0>
        <TBODY>
        <TR vAlign=top>
          <TD vAlign=top align=left width=4 
          background="gambar/sidebox-bar-left.gif"><IMG 
            src="gambar/sidebox-bar-px.gif"></TD>
          <TD vAlign=top align=left width=166 bgColor=#d6dff7>
            <TABLE cellSpacing=0 cellPadding=3 width=167 border=0>
              <TBODY>
              <TR>
                <TD><STRONG><BIG>·</BIG></STRONG>&nbsp;<A 
                  href="tambah_alamat_ip.php">Alamat IP</A><BR>
				  <STRONG><BIG>·</BIG></STRONG>&nbsp;<A 
                  href="tambah_data_pegawai.php">Data Pegawai</A><BR>
                  <STRONG><BIG>·</BIG></STRONG>&nbsp;<A 
                  href="tambah_hardware_pegawai.php">Hardware</A><BR>
				  <STRONG><BIG>·</BIG></STRONG>&nbsp;<A 
                  href="tambah_hardware_idle.php">Hardware IDLE</A></TD>
              </TR></TBODY></TABLE></TD>
          <TD vAlign=top align=left width=4 
          background="gambar/sidebox-bar-right.gif"><IMG 
            src="gambar/sidebox-bar-px.gif"></TD></TR></TBODY></TABLE>
      <TABLE cellSpacing=0 cellPadding=0 width=175 border=0>
        <TBODY>
        <TR>
          <TD vAlign=top align=left width=175 height=29><IMG 
            src="gambar/sidebox-bottom.gif"> 
        </TD></TR></TBODY></TABLE><BR>
      <TABLE cellSpacing=0 cellPadding=0 width=175 border=0>
        <TBODY>
        <TR>
          <TD>
            <TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
              <TBODY>
              <TR>
                <TD vAlign=top align=left width=26 height=30><IMG 
                  src="gambar/sidebox-title-left.gif"></TD>
                <TD vAlign=center align=left width=143 
                background="gambar/sidebox-title-bg.gif" 
                height=30><FONT class=option 
                  color=#ffffff>&nbsp;&nbsp;Ubah Data <B> </B></FONT></TD>
                <TD vAlign=top align=left width=6 height=30><IMG 
                  src="gambar/sidebox-title-right.gif"></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE><!----- Side Box Content ----->
      <TABLE cellSpacing=0 cellPadding=0 width=175 border=0>
        <TBODY>
        <TR vAlign=top>
          <TD vAlign=top align=left width=4 
          background="gambar/sidebox-bar-left.gif"><IMG 
            src="gambar/sidebox-bar-px.gif"></TD>
          <TD vAlign=top align=left width=166 bgColor=#d6dff7>
            <TABLE cellSpacing=0 cellPadding=3 width=167 border=0>
              <TBODY>
              <TR>
                <TD><STRONG><BIG>·</BIG></STRONG>&nbsp;<A 
                  href="ubah_alamat_ip.php">Alamat IP</A><BR>
                  <STRONG><BIG>·</BIG></STRONG>&nbsp;<A 
                  href="ubah_data_pegawai.php">Data Pegawai</A><BR>
                  <STRONG><BIG>·</BIG></STRONG>&nbsp;<A 
                  href="ubah_hardware_pegawai.php">Hardware</A><BR>
				  <STRONG><BIG>·</BIG></STRONG>&nbsp;<A 
                  href="ubah_hardware_idle.php">Hardware IDLE</A></TD>
              </TR></TBODY></TABLE></TD>
          <TD vAlign=top align=left width=4 
          background="gambar/sidebox-bar-right.gif"><IMG 
            src="gambar/sidebox-bar-px.gif"></TD></TR></TBODY></TABLE>
      <TABLE cellSpacing=0 cellPadding=0 width=175 border=0>
        <TBODY>
        <TR>
          <TD vAlign=top align=left width=175 height=29><IMG 
            src="gambar/sidebox-bottom.gif"> 
        </TD></TR></TBODY></TABLE><BR>
      <TABLE cellSpacing=0 cellPadding=0 width=175 border=0>
        <TBODY>
        <TR>
          <TD>
            <TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
              <TBODY>
              <TR>
                <TD vAlign=top align=left width=26 height=30><IMG 
                  src="gambar/sidebox-title-left.gif"></TD>
                <TD vAlign=center align=left width=143 
                background="gambar/sidebox-title-bg.gif" 
                height=30><FONT class=option 
                  color=#ffffff>&nbsp;&nbsp;<B>Hapus Data </B></FONT></TD>
                <TD vAlign=top align=left width=6 height=30><IMG 
                  src="gambar/sidebox-title-right.gif"></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE><!----- Side Box Content ----->
      <TABLE cellSpacing=0 cellPadding=0 width=175 border=0>
        <TBODY>
        <TR vAlign=top>
          <TD vAlign=top align=left width=4 
          background="gambar/sidebox-bar-left.gif"><IMG 
            src="gambar/sidebox-bar-px.gif"></TD>
          <TD vAlign=top align=left width=166 bgColor=#d6dff7>
            <TABLE cellSpacing=0 cellPadding=3 width=167 border=0>
              <TBODY>
              <TR>
                <TD><STRONG><BIG>&middot;</BIG></STRONG>&nbsp;<A 
                  href="hapus_alamt_ip.php">Alamat IP</A><BR>
                  <STRONG><BIG>&middot;</BIG></STRONG>&nbsp;<A 
                  href="hapus_data_pegawai.php">Data Pegawai</A><BR>
                  <STRONG><BIG>&middot;</BIG></STRONG>&nbsp;<A 
                  href="hapus_hardware_pegawai.php">Hardware</A><BR>
                  <STRONG><BIG>&middot;</BIG></STRONG>&nbsp;<A 
                  href="hapus_hardware_idle.php">Hardware IDLE</A></TD>
              </TR></TBODY></TABLE></TD>
          <TD vAlign=top align=left width=4 
          background="gambar/sidebox-bar-right.gif"><IMG 
            src="gambar/sidebox-bar-px.gif"></TD></TR></TBODY></TABLE>
      <TABLE cellSpacing=0 cellPadding=0 width=175 border=0>
        <TBODY>
        <TR>
          <TD vAlign=top align=left width=175 height=29><IMG 
            src="gambar/sidebox-bottom.gif"> 
      </TD></TR></TBODY></TABLE><BR></TD>
    <TD width="90%" vAlign=top bordercolor="1"><BR>
      <TABLE cellSpacing=1 cellPadding=0 width="90%" align=center 
      bgColor=#6487dc border=0>
        <TBODY>
        <TR>
          <TD>
            <TABLE cellSpacing=1 cellPadding=8 width="100%" bgColor=#d6dff7 
            border=0>
              <TBODY>
              <TR>
                <TD>
				<p align="center"><b>TAMBAH DATA HARDWARE</b></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE><BR>
                  <span style="background-color: #D6DFF7">
                  <BR>
      </span>
	<div align="center">
	
      <TABLE cellSpacing=1 cellPadding=0 width="90%" 
      bgColor=#D6DFF7 border=1>
        <TBODY>
        <form method="post" action="simpan_tambah_hardware_pegawai.php">
        <TR>
          <TD>
          
            <table height="450" width="100%" border="0">
				<tr>
					<td width="18%" height="17" align="left" bgcolor="#D6DFF7"><font color="#000080">
					<span style="background-color: #D6DFF7">NOMOR SERIAL</span></font></td>
					<td width="3%" height="17" bgcolor="#D6DFF7">
					<span style="background-color: #D6DFF7">:</span></td>
					<td width="78%" height="17" bgcolor="#D6DFF7">
					<p align="left"><input size="50" name="no_sn"></td>
				</tr>
				
				<tr>
					<td width="18%" height="7" align="left" bgcolor="#D6DFF7"><font color="#000080">
					<span style="background-color: #D6DFF7">JENIS</span></font></td>
					<td width="3%" height="7" bgcolor="#D6DFF7">
					<span style="background-color: #D6DFF7">:</span></td>
					<td width="78%" height="7" bgcolor="#D6DFF7">
					<select size="1" name="jenis_hw">
					<option value=" " selected></option>
					<option value="CPU">CPU</option>
					<option value="MONITOR">MONITOR</option>
					<option value="PRINTER">PRINTER</option>
					<option value="HUB">HUB</option>
					<option value="ROUTER">ROUTER</option>
					<option value="CATLYST">CATALYST</option>
					<option value="LAP_TOP">LAP TOP</option>
					<option value="MODEM">MODEM</option>
					<option value="SCANNER">SCANNER</option>
					<option value="LAIN LAIN">LAIN-LAIN</option>
					</select></td>
				</tr>
				
				<tr>
					<td width="18%" height="17" align="left" bgcolor="#D6DFF7"><font color="#000080">
					<span style="background-color: #D6DFF7">MEREK</span></font></td>
					<td width="3%" height="17" bgcolor="#D6DFF7">
					<span style="background-color: #D6DFF7">:</span></td>
					<td width="78%" height="17" bgcolor="#D6DFF7">
					<input size="50" name="merk_hw"></td>
				</tr>
				
				<tr>
					<td width="18%" height="17" align="left" bgcolor="#D6DFF7"><font color="#000080">
					<span style="background-color: #D6DFF7">TIPE</span></font></td>
					<td width="3%" height="17" bgcolor="#D6DFF7">
					<span style="background-color: #D6DFF7">:</span></td>
					<td width="78%" height="17" bgcolor="#D6DFF7">
					<input size="50" name="type_hw"></td>
				</tr>
				
				<tr>
					<td width="18%" height="4" align="left" bgcolor="#D6DFF7"><font color="#000080">
					<span style="background-color: #D6DFF7">SPESIFIK</span></font></td>
					<td width="3%" height="4" bgcolor="#D6DFF7">
					<span style="background-color: #D6DFF7">:</span></td>
					<td width="78%" height="4" bgcolor="#D6DFF7">
					<input size="50" name="spesifik_hw"></td>
				</tr>
				<tr>
					<td width="18%" height="32" align="left" bgcolor="#D6DFF7"><font color="#000080">
					<span style="background-color: #D6DFF7">TANGGAL 
					PEROLEH</span></font></td>
					<td width="3%" height="32" bgcolor="#D6DFF7">
					<span style="background-color: #D6DFF7">:</span></td>
					<td width="78%" height="32" bgcolor="#D6DFF7">
					<FONT color=#000000
      face="Arial Narrow" size=2>
					<INPUT name=tgl_perolehan size=50
      style="TEXT-ALIGN: center"--><span style="background-color: #D6DFF7"> 
					&gt;&gt; dd/mm/yyyy</span></FONT></td>
				</tr>

				<tr>
					<td width="18%" height="3" align="left" bgcolor="#D6DFF7"><font color="#000080">
					<span style="background-color: #D6DFF7">NILAI 
					PEROLEH</span></font></td>
					<td width="3%" height="3" bgcolor="#D6DFF7">
					<span style="background-color: #D6DFF7">:</span></td>
					<td width="78%" height="3" bgcolor="#D6DFF7">
					<input size="50" name="nilai_perolehan"></td>
				</tr>
				
				<tr>
					<td width="18%" height="1" align="left" bgcolor="#D6DFF7"><font color="#000080">
					<span style="background-color: #D6DFF7">LOKASI</span></font></td>
					<td width="3%" height="1" bgcolor="#D6DFF7">
					<span style="background-color: #D6DFF7">:</span></td>
					<td width="78%" height="1" bgcolor="#D6DFF7"><select size="1" name="lokasi">
					<option value=" " selected></option>
					<option value="SISFO">SISFO</option>
					<option value="GD DATEL LT 1">GD DATEL LT 1</option>
					<option value="GD DATEL LT 2">GD DATEL LT 2</option>
					<option value="GD DATEL LT 3">GD DATEL LT 3</option>
					<option value="GD DATEL LT 4">GD DATEL LT 4</option>
					<option value="GD DATEL LT 5">GD DATEL LT 5</option>
					<option value="GD DATEL LT 6">GD DATEL LT 6</option>
					<option value="GD DATEL LT 7">GD DATEL LT 7</option>
					<option value="GD OPMC LT 1">GD OPMC LT 1</option>
					<option value="GD OPMC LT 2">GD OPMC LT 2</option>
					<option value="GD OPMC LT 3">GD OPMC LT 3</option>
					<option value="GD OPMC LT 4">GD OPMC LT 4</option>
					<option value="GD OPMC LT 5">GD OPMC LT 5</option>
					<option value="GD OPMC LT 5 GUDANG">GD OPMC LT 5 GUDANG
					</option>
					<option value="STO TG PRIOK">STO TG PRIOK</option>
					<option value="SERPO CIDENG">SERPO CIDENG</option>
					<option value="STO CIDENG">STO CIDENG</option>
					<option value="SERPO CILINCING">SERPO CILINCING</option>
					<option value="STO CILINCING">STO CILINCING</option>
					<option value="SERPO MARINA">SERPO MARINA</option>
					<option value="SERPO GN SAHARI">SERPO GN SAHARI</option>
					<option value="GD GN SAHARI">GD GN SAHARI</option>
					<option value="SERPO KEMAYORAN">SERPO KEMAYORAN</option>
					<option value="STO KEMAYORAN">STO KEMAYORAN</option>
					<option value="SERPO KOTA">SERPO KOTA</option>
					<option value="STO KOTA">STO KOTA</option>
					<option value="STO MANGGA BESAR">STO MANGGA BESAR</option>
					<option value="STO MANGGA DUA">STO MANGGA DUA</option>
					<option value="STO MUARA KARANG">STO MUARA KARANG</option>
					<option value="STO PADEMANGGAN">STO PADEMANGAN</option>
					<option value="STO SUNTER">STO SUNTER</option>
					</select></td>
				</tr>
				<tr>
					<td width="18%" height="1" align="left" bgcolor="#D6DFF7"><font color="#000080">
					<span style="background-color: #D6DFF7">PEMILIK</span></font></td>
					<td width="3%" height="1" bgcolor="#D6DFF7">
					<span style="background-color: #D6DFF7">:</span></td>
					<td width="78%" height="1" bgcolor="#D6DFF7">
					<select size="1" name="pemilik">
					<option value=" " selected></option>
					<option value="SISFO">SISFO</option>
					<option value="AGIT PT (DSM)">AGIT PT (DSM)</option>
					<option value="DATEL UT">DATEL UT</option>
					<option value="SEWA MMI">SEWA MMI</option>
					<option value="SEWA BERCA PT">SEWA BERCA PT</option>
					<option value="SEWA ALDIRA PT">SEWA ALDIRA PT</option>
					<option value="SEWA DATA SCRIP PT">SEWA DATA SCRIP PT
					</option>
					<option value="SEWA KOPEG JAYA">SEWA KOPEG JAYA</option>
					<option value="SEWA KOPEG DOLPHIN">SEWA KOPEG DOLPHIN
					</option>
					<option value="LAIN-LAIN">LAIN LAIN</option>
					</select></td>
				</tr>
				<tr>
					<td width="18%" height="6" align="left" bgcolor="#D6DFF7"><font color="#000080">
					<span style="background-color: #D6DFF7">PEMAKAI (NIK)</span></font></td>
					<td width="3%" height="6" bgcolor="#D6DFF7">
					<span style="background-color: #D6DFF7">:</span></td>
					<td width="78%" height="6" bgcolor="#D6DFF7">
					<input size="50" name="nik"></td>
				</tr>
				<tr>
					<td width="18%" height="6" align="left" bgcolor="#D6DFF7">
					<font color="#000080">
					<span style="background-color: #D6DFF7">ALAMAT IP</span></font></td>
					<td width="3%" height="6" bgcolor="#D6DFF7">
					<span style="background-color: #D6DFF7">:</span></td>
					<td width="78%" height="6" bgcolor="#D6DFF7">
					<input size="50" name="keterangan"></td>
				</tr>
				<tr>
					<td width="18%" height="10" align="right" bgcolor="#D6DFF7"></td>
					<td width="3%" height="10" bgcolor="#D6DFF7"></td>
					<td width="78%" height="10" bgcolor="#D6DFF7"></td>
				</tr>
				<tr>
					<td width="18%" height="20" bgcolor="#D6DFF7">
					<p align="right">
					&nbsp;</td>
					<td width="3%" height="20" bgcolor="#D6DFF7">&nbsp;</td>
					<td width="78%" height="20" bgcolor="#D6DFF7">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="reset" value="BATAL" name="B3" style="background-color: #D6DFF7">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="submit" value="SIMPAN" name="B1" style="background-color: #D6DFF7"></td>
				</tr></form>
			</table>
			</TD></TR></TBODY></TABLE>
   	</div>
   </TD></TR></TBODY></TABLE></BODY></HTML>