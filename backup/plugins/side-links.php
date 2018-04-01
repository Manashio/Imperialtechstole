<table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td class="border"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td height="40" bgcolor="#f9f9f9" class="heading">News &amp; Events </td>
                  </tr>
                  <tr>
                    <td><img src="images/line.jpg" width="232" height="16" /></td>
                  </tr>
                  <tr>
                    <td><marquee behavior="scroll" scrollamount="2" height="150" direction="up"><table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td class="newstxt"> <?php 
											 while($notydata = mysql_fetch_object($notifecation)){ 
			  echo "<p> ".$notydata->description."</p>"; }?></td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                      </tr>
                      
                      <tr>
                        <td>&nbsp;</td>
                      </tr>
                    </table>
                    </marquee></td>
                  </tr>
               
                </table></td>
                </tr>
              <tr>
                <td height="10"></td>
              </tr>
              <tr>
                <td height="50" bgcolor="#022c4d"><img src="images/notice.jpg" width="109" height="41" /></td>
              </tr>
              <tr>
                <td height="3"></td>
              </tr>
              <tr>
                <td bgcolor="#022C4D"><table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="100" class="noticetxt"> <?php 
											 while($scroll = mysql_fetch_object($scrol)){ 
			 if($scrol->link!=''){ echo "<p><a href='".$scroll->link."' targer='_blank'>".$scroll->description."</p>"; }else { echo "<p>".$scroll->description."</p>"; }}?></td>
                  </tr>
                </table></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
            </table>