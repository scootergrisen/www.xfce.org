<?php
    include ("version.php");
?>
<a name="stable"></a>
<h1>Bertsio Egonkorra deskargatu (<?php echo $version; ?>) </h1>
<p>Banaketa gehienek Xfce dakarte. Baina bertsio berriago bat nahiago edo Xfce maila 
baxuenetik eraiki nahi izanez gero beharrezko paketeak beherago aurki ditzakezu. Xfce erabiltzen duten banaketei ere 
begirada bota diezaiekezu <a href="/download/distros">hemen</a>.</p>

<h2 id="source">Iturburu kodea</h2>
<p>Xfce modulu guztiak gure SourceForge errepositorioan pakete bakar batetan daude eskuragarri, baita ispilu anitzen 
bitartez (pakete bakar batetan <em>edo</em> ezberdinetan:</p>
<?php printServers("", $servers); ?>

<!--
<h2 id="installer">Instalatzaile grafikoak</h2>
<p> Xfce-Instalatzailea Xfce eta zenbait hedapen instalatzeko prozesua asko errazten duten pakete bilduma da. 
Instalatzaileaz gehiago irakurri nahi izanez gero <a href="/documentation/installers/xfce/index.html">hemen</a> egin dezakezu.</p>
<?php printServers("installers", $servers); ?>
-->

<h2 id="binaries">Bitarrak</h2>
<table cellspacing="5">
  <tr>
    <td><img src="../../images/download/debian.png" alt="Debian" width="40" height="40" /></td>
    <td><strong>Debian Probak / Ezegonkorra</strong><br />
      <a href="http://pkg-xfce.alioth.debian.org/">Debian Xfce Group</a></td>
  </tr>
  <!--
  <tr>
    <td><img src="../../images/download/fedora.png" alt="Fedora" width="40" height="40" /></td>
    <td><strong>Redhat eta Fedora</strong><br />
    <a href="http://sourceforge.net/project/showfiles.php?group_id=19869&package_id=187881&release_id=<?php echo $sf_release_id; ?>">SourceForge.net<br />
    </a><a href="http://mocha.xfce.org/archive/xfce-<?php echo $version; ?>">xfce.org</a> | <a href="http://www.ca-us.xfce.org/archive/xfce-<?php echo $version; ?>" target="_blank">ca-us.xfce.org</a> | <a href="http://www.de.xfce.org/archive/xfce-<?php echo $version; ?>" target="_blank">de.xfce.org</a> <br />
    <a href="http://www.p0llux.be/xfce/xfce-<?php echo $version; ?>/installers/">p0llux.be</a></td>
  </tr>
  -->
  <tr>
    <td><img src="../../images/download/suse.png" alt="Suse" width="40" height="40" /></td>
    <td><strong>openSUSE (SUSE Linux)</strong><br />
      <a href="http://en.opensuse.org/X11:xfce">openSUSE Errepositorioa (SUSE Linux)</a></td>
  </tr>
  <tr>
    <td><img src="../../images/download/mandriva.png" alt="Mandriva" width="40" height="40" /></td>
    <td><strong>Mandriva eta  Mandrake</strong><br />
      <a href="ftp://mandrivauser.de/rpm/GPL/">ftp://mandrivauser.de/rpm/GPL/</a><br />
      <a href="http://www.eslrahc.com/">http://www.eslrahc.com/</a></td>
  </tr>
  <tr>
    <td><img src="../../images/download/solaris.png" alt="Solaris" width="40" height="40" /></td>
    <td><strong>Solaris SPARC/x86/AMD</strong><br />
      <a href="http://www.blastwave.org">http://www.blastwave.org</a></td>
  </tr>
</table>

<?php if(isset($version_unstable)) { ?>

<a name="unstable"></a>
<h1>Download Unstable version (<?php echo $version_unstable; ?>) </h1>
<p>
Below you can find download locations for the latest development/unstable
release of Xfce.  Note that this software almost certainly contains bugs,
many of which might affect your desire to use it in a production
environment.  You should back up all configuration files before installing
and using these releases.  If you're uncertain about downloading this
release, you should probably use the <a href="#stable">stable version</a>
above.
</p>

<h2 id="source-unstable">Source code</h2>
<p>All Xfce modules are available in one single tarball from our SourceForge  repository, and from several mirrors (in one single tarball <em>or</em> separate  tarballs):</p>
<?php printServers("", $servers_unstable); ?>

<?php } /* isset($version_unstable) */ ?>
