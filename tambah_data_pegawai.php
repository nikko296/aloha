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
				<p align="center"><b>TAMBAH DATA PEGAWAI</b></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE><BR>
                  <BR>
      <TABLE cellSpacing=1 cellPadding=0 width="90%" align=center 
      bgColor=#6487dc border=1>
        <TBODY>
        <TR>
          <TD>
          
            <TABLE cellSpacing=1 cellPadding=8 width="100%" bgColor=#d6dff7 
            border=0>
              <TBODY>

                  
<form method="post" action="simpan_tambah_data_pegawai.php">
  <tr>
    <td width="21%" height="17">
	<p align="left"><font color="#000080">NIK PEGAWAI</font></td>
    <td width="1%" height="17">:</td>
    <td width="69%" height="17"><p align="left"><input type="text" name="nik" size="50"></p></td>
  </tr>

  <tr>
    <td width="21%" height="1"></td>
    <td width="1%" height="1"></td>
    <td width="69%" height="1"></td>
  </tr>

  <tr>
    <td width="21%" height="17">
	<p align="left"><font color="#000080">NAMA PEGAWAI</font></td>
    <td width="1%" height="17">:</td>
    <td width="69%" height="17"><input type="text" name="nama" size="50"></td>
  </tr>
  <tr>
    <td width="21%" height="1"></td>
    <td width="1%" height="1"></td>
    <td width="69%" height="1"></td>
  </tr>
  <tr>
    <td width="21%" height="17">
	<p align="left"><font color="#000080">JABATAN PEGAWAI</font></td>
    <td width="1%" height="17">:</td>
    <td width="69%" height="17"><input type="text" name="jabatan" size="50"></td>
  </tr>
  <tr>
    <td width="21%" height="1"></td>
    <td width="1%" height="1"></td>
    <td width="69%" height="1"></td>
  </tr>
    <td width="21%" height="1">
	<p align="left"><font color="#000080">LOKASI KERJA PEGAWAI</font></td>
    <td width="1%" height="1">:</td>
    <td width="69%" height="1"><select size="1" name="loker">
          <option value=" " selected>  </option>
          <option value="KANDATEL JAKARTA UTARA">KANDATEL JAKARTA UTARA</option>
          <option value="GENERAL SUPPORT">GENERAL SUPPORT</option>
          <option value="TECHNICAL ACCESS SUPPORT/MDF MANGGA BESAR">TECHNICAL ACCESS SUPPORT/MDF MANGGA BESAR</option>
          <option value="SEKDATEL">SEKDATEL</option>
          <option value="TECHNICAL ACCESS SUPPORT/GEDUNG OPMC LT 3">TECHNICAL ACCESS SUPPORT/GEDUNG OPMC LT 3</option>
          <option value="ACCESS DATA MGT/GD OPMC LANTAI 3">ACCESS DATA MGT/GD OPMC LANTAI 3</option>
          <option value="ACCESS DATA MGT/GD OPMC LANTAI 4">ACCESS DATA MGT/GD OPMC LANTAI 4</option>
          <option value="FINANCE SUB AREA JAKARTA-">FINANCE SUB AREA JAKARTA-UTARA</option>
          <option value="HR REPRESENTATIVE DATEL J">HR REPRESENTATIVE DATEL JAKARTA-UTARA</option>
          <option value="SECRETARY DATEL JAKARTA-U">SECRETARY DATEL JAKARTA-UTARA</option>
          <option value="SUB SUBDIV SAS AREA JAKUT">SUB SUBDIV SAS AREA JAKUT</option>
          <option value="HRC">HRC</option>
          <option value="UNIT IS AREA JAKARTA-UTAR">UNIT IS AREA JAKARTA-UTARA</option>
          <option value="COLLECTION AREA2">COLLECTION AREA2</option>
          <option value="BUSINESS PERF">BUSINESS PERF</option>
          <option value="PERFORMANCE">PERFORMANCE</option>
          <option value="FRAUD MGT">FRAUD MGT</option>
          <option value="QUALITY MGT">QUALITY MGT</option>
          <option value="ACCESS NETWORK MAINTENANC">ACCESS NETWORK MAINTENANCE</option>
          <option value="COPPER ACCESS MAINTENANCE">COPPER ACCESS MAINTENANCE</option>
          <option value="FIBER & RADIO ACCESS MAIN">FIBER & RADIO ACCESS MAIN</option>
          <option value="ACCESS PROGRAM & PERF">ACCESS PROGRAM & PERF</option>
          <option value="ACCESS DATA MGT">ACCESS DATA MGT</option>
          <option value="OM ACCESS SUPPORT">OM ACCESS SUPPORT</option>
          <option value="ACCESS NW OPERATION">ACCESS NW OPERATION</option>
          <option value="CCAN">CCAN</option>
          <option value="PCAN">PCAN</option>
          <option value="CPE & PUBLIC PHONE">CPE & PUBLIC PHONE</option>
          <option value="TECHNICAL ACCESS SUPPORT">TECHNICAL ACCESS SUPPORT</option>
          <option value="FIXED PHONE SALES">FIXED PHONE SALES</option>
          <option value="WIRELINE SALES & PROMOTIO">WIRELINE SALES & PROMOTION</option>
          <option value="CUSTOMER DATA MGT">CUSTOMER DATA MGT</option>
          <option value="DATA & VAS SALES">DATA & VAS SALES</option>
          <option value="DATA & INTERNET SALES & P">DATA & INTERNET SALES & PROMO</option>
          <option value="CONTENT & VAS SALES & PRO">CONTENT & VAS SALES & PROMO</option>
          <option value="CUSTOMER CARE">CUSTOMER CARE</option>
          <option value="PRIME CUSTOMER CARE">PRIME CUSTOMER CARE</option>
          <option value="PERSONAL CUSTOMER CARE">PERSONAL CUSTOMER CARE</option>
          <option value="DIRECT CHANNEL MGT">DIRECT CHANNEL MGT</option>
          <option value="INDIRECT CHANNEL MGT">INDIRECT CHANNEL MGT</option>
          <option value="GENERAL SUPPORT">GENERAL SUPPORT</option>
          <option value="KANDATEL SECRETARY">KANDATEL SECRETARY</option>
          <option value="LOGISTIC">LOGISTIC</option>
          <option value="ASSET MGT">ASSET MGT</option>
          </select></td>
  </tr>
  <tr>
    <td width="21%" height="10"></td>
    <td width="1%" height="10"></td>
    <td width="69%" height="10"></td>
  </tr>

  <tr>
    <td width="21%" height="20">
      <p align="right">&nbsp;</td>
    <td width="1%" height="20"></td>
    <td width="69%" height="20">
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="reset" value="BATAL" name="B3" style="background-color: #D6DFF7">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;<input type="submit" value="SIMPAN" name="B1" style="background-color: #D6DFF7"></td>
  </tr></form>
</TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE>
   </TD></TR></TBODY></TABLE></BODY></HTML>
