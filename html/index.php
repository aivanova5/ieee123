<!DOCTYPE HTML>
<HTML>
<!-- IEEE-123 realtime simulation configuration
     Copyright (C) 2016, Stanford University
     Author: dchassin@slac.stanford.edu
-->
<TITLE>GridLAB-D Realtime Server</TITLE>
<BODY>
<H1>Welcome</H1>
The following simulations are currently running on this server:
<TABLE CELLSPACING=10>
<TR><TH>Model<HR/></TH><TH>Loads<HR/></TH><TH>Solar panels<HR/></TH><TH>Webpage<HR/></TH><TH>Database<HR/></TH><TH>Status<HR/></TH><TH>Metric<HR/></TH></TR>
<TR><TD>IEEE 123</TD><TD>Static</TD><TD>No</TD><TD><A TARGET="_blank" HREF="http://gridlabd.slac.stanford.edu:6266/rt/control.htm">http://gridlabd.slac.stanford.edu:6266/rt/control.htm</A></TD><TD><A TARGET="_blank" HREF=data>gridlabd_ro@gridlabd.slac.stanford.edu:3306/ieee123z_{model,ami,scada}</A></TD><TD><?php passthru('/home/gridlabd/bin/gridlabd-ctl -q status model-6266');?></TD><TD><?php passthru("curl 'http://gridlabd.slac.stanford.edu:6266/raw/realtime_metric'");?></TD></TR>
<TR><TD>IEEE 123</TD><TD>Dynamic</TD><TD>No</TD><TD><A TARGET="_blank" HREF="http://gridlabd.slac.stanford.edu:6267/rt/control.htm">http://gridlabd.slac.stanford.edu:6267/rt/control.htm</A></TD><TD><A TARGET="_blank" HREF=data>gridlabd_ro@gridlabd.slac.stanford.edu:3306/ieee123_{model,ami,scada}</A></TD><TD><?php passthru('/home/gridlabd/bin/gridlabd-ctl -q status model-6267');?></TD><TD><?php passthru("curl 'http://gridlabd.slac.stanford.edu:6267/raw/realtime_metric'");?></TD></TR>
<TR><TD>IEEE 123</TD><TD>Static</TD><TD>Yes</TD><TD><A TARGET="_blank" HREF="http://gridlabd.slac.stanford.edu:6268/rt/control.htm">http://gridlabd.slac.stanford.edu:6268/rt/control.htm</A></TD><TD><A TARGET="_blank" HREF=data>gridlabd_ro@gridlabd.slac.stanford.edu:3306/ieee123zs_{model,ami,scada}</A></TD><TD><?php passthru('/home/gridlabd/bin/gridlabd-ctl -q status model-6268');?></TD><TD><?php passthru("curl 'http://gridlabd.slac.stanford.edu:6268/raw/realtime_metric'");?></TD></TR>
<TR><TD>IEEE 123</TD><TD>Dynamic</TD><TD>Yes</TD><TD><A TARGET="_blank" HREF="http://gridlabd.slac.stanford.edu:6269/rt/control.htm">http://gridlabd.slac.stanford.edu:6269/rt/control.htm</A></TD><TD><A TARGET="_blank" HREF=data>gridlabd_ro@gridlabd.slac.stanford.edu:3306/ieee123s_{model,ami,scada}</A></TD><TD><?php passthru('/home/gridlabd/bin/gridlabd-ctl -q status model-6269');?></TD><TD><?php passthru("curl 'http://gridlabd.slac.stanford.edu:6269/raw/realtime_metric'");?></TD></TR>
</TABLE>

</HTML>