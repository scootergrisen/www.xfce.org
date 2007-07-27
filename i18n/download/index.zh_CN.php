<?php
    include ("version.php");
?>
<h1>下载稳定版本 (<?php echo $version; ?>) </h1>
<p>大多数发行版有对Xfce的移植。但如果您想要更新的版本或者您想要从头开始编译Xfce，您可以从下方找到这些软件包。您也可以<a href="/download/distros">在此</a>看一看以Xfce做为默认桌面的发行版。</p>

<h2 id="source">源代码</h2>
<p>所有Xfce模块都可以从我们的SourceForge仓库和一些镜像站点中以单个源代码tarball包的形式得到，（在单独一个源代码tarball<em>或者</em>分开的源代码tarball包中）：</p>
<?php printServers("", $servers); ?>


<h2 id="installer">图形安装</h2>
<p>Xfce-Installers是软件包的一个总集，它能明显地使Xfce和一些扩展的安装进程简单化的。<a href="/documentation/installers/xfce/index.html">在此</a>阅读更多关于安装工具的信息。</p>
<?php printServers("installers", $servers); ?>


<h2 id="binaries">二进制包</h2>
<table cellspacing="5">
  <tr>
    <td><img src="../../images/download/debian.png" alt="Debian" width="40" height="40" /></td>
    <td><strong>Debian Testing / Unstable</strong><br />
      <a href="http://pkg-xfce.alioth.debian.org/" target="_blank">Debian Xfce Group</a></td>
  </tr>
  <!--
  <tr>
    <td><img src="../../images/download/fedora.png" alt="Fedora" width="40" height="40" /></td>
    <td><strong>Redhat &amp; Fedora</strong><br />
    <a href="http://sourceforge.net/project/showfiles.php?group_id=19869&package_id=187881&release_id=<?php echo $sf_release_id; ?>" target="_blank">SourceForge.net<br />
    </a><a href="http://mocha.xfce.org/archive/xfce-<?php echo $version; ?>" target="_blank">xfce.org</a> | <a href="http://www.ca-us.xfce.org/archive/xfce-<?php echo $version; ?>" target="_blank">ca-us.xfce.org</a> | <a href="http://www.de.xfce.org/archive/xfce-<?php echo $version; ?>" target="_blank">de.xfce.org</a> <br />
    <a href="http://www.p0llux.be/xfce/xfce-<?php echo $version; ?>/installers/" target="_blank">p0llux.be</a></td>
  </tr>
  -->
  <tr>
    <td><img src="../../images/download/suse.png" alt="Suse" width="40" height="40" /></td>
    <td><strong>openSUSE (SUSE Linux)</strong><br />
      <a href="http://en.opensuse.org/X11:xfce" target="_blank">Repositories for openSUSE (SUSE Linux)</a></td>
  </tr>
  <tr>
    <td><img src="../../images/download/mandriva.png" alt="Mandriva" width="40" height="40" /></td>
    <td><strong>Mandriva &amp; Mandrake</strong><br />
      <a href="ftp://mandrivauser.de/rpm/GPL/" target="_blank">ftp://mandrivauser.de/rpm/GPL/</a><br />
      <a href="http://www.eslrahc.com/" target="_blank">http://www.eslrahc.com/</a></td>
  </tr>
  <tr>
    <td><img src="../../images/download/solaris.png" alt="Solaris" width="40" height="40" /></td>
    <td><strong>Solaris SPARC/x86/AMD</strong><br />
      <a href="http://www.blastwave.org" target="_blank">http://www.blastwave.org</a></td>
  </tr>
</table>
