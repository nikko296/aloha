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
                <TD><STRONG><BIG>�</BIG></STRONG>&nbsp;<A 
                  href="tambah_alamat_ip.php">Alamat IP</A><BR>
				  <STRONG><BIG>�</BIG></STRONG>&nbsp;<A 
                  href="tambah_data_pegawai.php">Data Pegawai</A><BR>
                  <STRONG><BIG>�</BIG></STRONG>&nbsp;<A 
                  href="tambah_hardware_pegawai.php">Hardware</A><BR>
				  <STRONG><BIG>�</BIG></STRONG>&nbsp;<A 
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
                <TD><STRONG><BIG>�</BIG></STRONG>&nbsp;<A 
                  href="ubah_alamat_ip.php">Alamat IP</A><BR>
                  <STRONG><BIG>�</BIG></STRONG>&nbsp;<A 
                  href="ubah_data_pegawai.php">Data Pegawai</A><BR>
                  <STRONG><BIG>�</BIG></STRONG>&nbsp;<A 
                  href="ubah_hardware_pegawai.php">Hardware</A><BR>
				  <STRONG><BIG>�</BIG></STRONG>&nbsp;<A 
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
    <TD width="90%" vAlign=top bordercolor="1"><BR><br>
      <TABLE cellSpacing=1 cellPadding=0 width="90%" align=center 
      bgColor=#6487dc border=0>
        <TBODY>
        <TR>
          <TD>
            <TABLE cellSpacing=1 cellPadding=8 width="100%" bgColor=#d6dff7 
            border=0>
              <TBODY>
              <TR>
                <TD><b>Portal ALOHA Telkom Sisfo Jakarta Utara</b><BR>
                  <BR>
                <FONT class=content>Selamat Datang Di Portal ALOHA Sisfo Jakarta Utara </FONT>
                  </TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE><BR>
                  <BR>
      <TABLE cellSpacing=1 cellPadding=0 width="90%" align=center 
      bgColor=#6487dc border=0>
        <TBODY>
        <TR>
          <TD>
            <TABLE cellSpacing=1 cellPadding=8 width="100%" bgColor=#d6dff7 
            border=0>
              <TBODY>
              <TR>
                <TD><b>Apakah Portal?</b><BR>
                    <BR>
                    Portal adalah sebuah situs yang menjadi pintu gerbang (pusat) 
				dari kumpulan beberapa situs pada internet/intranet/ekstranet 
				yang memberikan beberapa layanan atau fungsi yang bermanfaat 
				bagi pengunjungnya seperti search engine, e-mail, news, chat 
				rooms, dst nya. Jika diletakkan pada internet biasanya bersifat 
				komersial yang memberikan beberapa keuntungan/fasilitas tertentu 
				kepada anggotanya.<FONT class=content> </FONT></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE>
	<br>
      <TABLE cellSpacing=1 cellPadding=0 width="90%" align=center 
      bgColor=#6487dc border=0>
        <TBODY>
        <TR>
          <TD>
            <TABLE cellSpacing=1 cellPadding=8 width="100%" bgColor=#d6dff7 
            border=0>
              <TBODY>
              <TR>
                <TD><b>Portal ALOHA Telkom Sisfo Jakarta Utara dibuat di:</b><BR>
                  <BR>
                <FONT class=content>Operating System: Microsoft Windows XP Proffesional Service 
				Pack 2 (5.1, Build 2600)<br>Language: English (Regional Setting: 
				English)<br>System Manufacturer: Dell Computer Corporation<br>
				System Model: OptiPlex 170L<br>BIOS: Phoenix ROM BIOS PLUS 
				Version 1.10 A02<br> Processor: Intel(R) Pentium(R) 4 CPU 2.80 
				GHz<br>Memory: 256 MB RAM<br>DirectX Version: DirectX 9.0c 
				(4.09.0000.0904)<br>VGA: Intel(R) 82865G Graphics Controller</FONT></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE>
	<br>
      <TABLE cellSpacing=1 cellPadding=0 width="90%" align=center 
      bgColor=#6487dc border=0>
        <TBODY>
        <TR>
          <TD>
            <TABLE cellSpacing=1 cellPadding=8 width="100%" bgColor=#d6dff7 
            border=0>
              <TBODY>
              <TR>
                <TD><b>Portal ALOHA Telkom Sisfo Jakarta Utara dibuat oleh:</b><BR>
                  <BR>
                Design<FONT class=content>, Layout, and Programming by Nikko 
				Haendratnio</FONT><p>Image Effect<FONT class=content> by Rendy 
				Resanatha</FONT></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p></TD></TR></TBODY></TABLE></BODY></HTML>
