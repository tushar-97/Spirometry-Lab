<html>
<head>
</head>
<body style="background-color:#CAEBF2;">

<?php

  require("fpdf/WriteHTML.php");
  $conn = new mysqli('localhost','root','');

  $pdf=new PDF_HTML();

  error_reporting(E_ERROR);

  mysqli_select_db($conn,"pft database");

  $pointer = fopen("file.csv", "w");
  fclose($pointer);
  $count=0;
  foreach( $_POST as $stuff ) {
      if( is_array( $stuff ) ) {
          foreach( $stuff as $thing )
          {
              $id = substr($thing,0,-19);
              $time = substr($thing,strlen($id),19);

              $query = mysqli_query($conn,"SELECT * FROM pft
                     WHERE (`CRNO`= '$id') AND (`TIMESTAMP` = '$time')");
              $row = mysqli_fetch_array($query, MYSQLI_ASSOC);
              if(empty($row)){
                echo "Error in printing entry with CRNO:".$id."<br>";
                fclose($pointer);
              }
              else{
                $pointer = fopen("file.csv", "a");

                $all_keys = array_keys($row);
                $all_values = array_values($row);

                $html ='<html>

                <head>
                <meta http-equiv=Content-Type content="text/html; charset=windows-1252">
                <meta name=Generator content="Microsoft Word 15 (filtered)">
                <style>
                <!--
                 /* Font Definitions */
                 @font-face
                	{font-family:"Cambria Math";
                	panose-1:2 4 5 3 5 4 6 3 2 4;}
                @font-face
                	{font-family:Calibri;
                	panose-1:2 15 5 2 2 2 4 3 2 4;}
                 /* Style Definitions */
                 p.MsoNormal, li.MsoNormal, div.MsoNormal
                	{margin-top:0in;
                	margin-right:0in;
                	margin-bottom:8.0pt;
                	margin-left:0in;
                	line-height:107%;
                	font-size:11.0pt;
                	font-family:"Calibri",sans-serif;}
                .MsoChpDefault
                	{font-family:"Calibri",sans-serif;}
                .MsoPapDefault
                	{margin-bottom:8.0pt;
                	line-height:107%;}
                @page WordSection1
                	{size:8.5in 11.0in;
                	margin:1.0in 1.0in 1.0in 1.0in;}
                div.WordSection1
                	{page:WordSection1;}
                -->
                </style>

                </head>

                <body lang=EN-US>

                <div class=WordSection1>

                <p class=MsoNormal><span style=\'position:absolute;z-index:251659264;margin-left:
                573px;margin-top:11px;width:151px;height:156px\'><img width=121 height=125
                src="test_files/image001.png"></span>Heading</p>

                <p class=MsoNormal>&nbsp;</p>

                <p class=MsoNormal>ID:'.$all_values[0].'</p>

                <p class=MsoNormal>Name:'.$all_values[1].'</p>

                <p class=MsoNormal>&nbsp;</p>

                <p class=MsoNormal>&nbsp;</p>

                <p class=MsoNormal>&nbsp;</p>

                <p class=MsoNormal>&nbsp;</p>

                <table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0
                 style=\'border-collapse:collapse;border:none\'>
                 <tr>
                  <td width=188 valign=top style=\'width:155.8pt;border:solid windowtext 1.0pt;
                  padding:0in 5.4pt 0in 5.4pt\'>
                  <p class=MsoNormal style=\'margin-bottom:0in;margin-bottom:.0001pt;line-height:
                  normal\'>'.$all_values[7].'</p>
                  </td>
                  <td width=189 valign=top style=\'width:155.85pt;border:solid windowtext 1.0pt;
                  border-left:none;padding:0in 5.4pt 0in 5.4pt\'>
                  <p class=MsoNormal style=\'margin-bottom:0in;margin-bottom:.0001pt;line-height:
                  normal\'>'.$all_values[8].'</p>
                  </td>
                  <td width=189 valign=top style=\'width:155.85pt;border:solid windowtext 1.0pt;
                  border-left:none;padding:0in 5.4pt 0in 5.4pt\'>
                  <p class=MsoNormal style=\'margin-bottom:0in;margin-bottom:.0001pt;line-height:
                  normal\'>'.$all_values[9].'</p>
                  </td>
                 </tr>
                 <tr>
                  <td width=188 valign=top style=\'width:155.8pt;border:solid windowtext 1.0pt;
                  border-top:none;padding:0in 5.4pt 0in 5.4pt\'>
                  <p class=MsoNormal style=\'margin-bottom:0in;margin-bottom:.0001pt;line-height:
                  normal\'>'.$all_values[10].'</p>
                  </td>
                  <td width=189 valign=top style=\'width:155.85pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  padding:0in 5.4pt 0in 5.4pt\'>
                  <p class=MsoNormal style=\'margin-bottom:0in;margin-bottom:.0001pt;line-height:
                  normal\'>R</p>
                  </td>
                  <td width=189 valign=top style=\'width:155.85pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  padding:0in 5.4pt 0in 5.4pt\'>
                  <p class=MsoNormal style=\'margin-bottom:0in;margin-bottom:.0001pt;line-height:
                  normal\'>T</p>
                  </td>
                 </tr>
                 <tr>
                  <td width=188 valign=top style=\'width:155.8pt;border:solid windowtext 1.0pt;
                  border-top:none;padding:0in 5.4pt 0in 5.4pt\'>
                  <p class=MsoNormal style=\'margin-bottom:0in;margin-bottom:.0001pt;line-height:
                  normal\'>R</p>
                  </td>
                  <td width=189 valign=top style=\'width:155.85pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  padding:0in 5.4pt 0in 5.4pt\'>
                  <p class=MsoNormal style=\'margin-bottom:0in;margin-bottom:.0001pt;line-height:
                  normal\'>Y</p>
                  </td>
                  <td width=189 valign=top style=\'width:155.85pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  padding:0in 5.4pt 0in 5.4pt\'>
                  <p class=MsoNormal style=\'margin-bottom:0in;margin-bottom:.0001pt;line-height:
                  normal\'>F</p>
                  </td>
                 </tr>
                 <tr>
                  <td width=188 valign=top style=\'width:155.8pt;border:solid windowtext 1.0pt;
                  border-top:none;padding:0in 5.4pt 0in 5.4pt\'>
                  <p class=MsoNormal style=\'margin-bottom:0in;margin-bottom:.0001pt;line-height:
                  normal\'>B</p>
                  </td>
                  <td width=189 valign=top style=\'width:155.85pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  padding:0in 5.4pt 0in 5.4pt\'>
                  <p class=MsoNormal style=\'margin-bottom:0in;margin-bottom:.0001pt;line-height:
                  normal\'>Y</p>
                  </td>
                  <td width=189 valign=top style=\'width:155.85pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  padding:0in 5.4pt 0in 5.4pt\'>
                  <p class=MsoNormal style=\'margin-bottom:0in;margin-bottom:.0001pt;line-height:
                  normal\'>H</p>
                  </td>
                 </tr>
                 <tr>
                  <td width=188 valign=top style=\'width:155.8pt;border:solid windowtext 1.0pt;
                  border-top:none;padding:0in 5.4pt 0in 5.4pt\'>
                  <p class=MsoNormal style=\'margin-bottom:0in;margin-bottom:.0001pt;line-height:
                  normal\'>&nbsp;</p>
                  </td>
                  <td width=189 valign=top style=\'width:155.85pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  padding:0in 5.4pt 0in 5.4pt\'>
                  <p class=MsoNormal style=\'margin-bottom:0in;margin-bottom:.0001pt;line-height:
                  normal\'>&nbsp;</p>
                  </td>
                  <td width=189 valign=top style=\'width:155.85pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  padding:0in 5.4pt 0in 5.4pt\'>
                  <p class=MsoNormal style=\'margin-bottom:0in;margin-bottom:.0001pt;line-height:
                  normal\'>&nbsp;</p>
                  </td>
                 </tr>
                </table>

                <p class=MsoNormal>&nbsp;</p>

                </div>

                </body>

                </html>
';


                 /*$file = "pDB3F56S.html";
                 $html = file_get_contents($file);*/

                 $html = str_replace("&nbsp;", "<br>", $html);

                 $pdf->AddPage();
                 $pdf->SetFont('Arial');
                 $pdf->WriteHTML($html);

                fputcsv($pointer, $row);
                fclose($pointer);
                $count = $count+1;
              }

          }
        }
      }
    mysqli_close($conn);
    ob_end_clean();
    $pdf->Output('D','print.pdf');


?>
</body>
</html>
