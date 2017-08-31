<?php 
        $mpdf = new mPDF('L',  // mode - default ''
                         'A4',    // format - A4, for example, default ''
                         0,     // font size - default 0
                         '',    // default font family
                         10,    // margin_left
                         10,    // margin right
                         16,     // margin top
                         16,    // margin bottom
                         9,     // margin header
                         9,     // margin footer
                         'L');  //


$mpdf->mirrorMargins = 1; // Use different Odd/Even headers and footers and mirror margins

$mpdf->defaultheaderfontsize = 10;  /* in pts */
$mpdf->defaultheaderfontstyle = B;  /* blank, B, I, or BI */
$mpdf->defaultheaderline = 1;   /* 1 to include line below header/above footer */

$mpdf->defaultfooterfontsize = 12;  /* in pts */
$mpdf->defaultfooterfontstyle = B;  /* blank, B, I, or BI */
$mpdf->defaultfooterline = 1;   /* 1 to include line below header/above footer */


$mpdf->SetHeader('||PT.Sembada Karya Mandiri');
$mpdf->SetFooter('{PAGENO}'); /* defines footer for Odd and Even Pages - placed at Outer margin */

$mpdf->SetFooter(array(
  'L' => array(
    'content' => 'PT.Sembada Karya Mandiri',
    'font-family' => 'sans-serif',
    'font-style' => 'B',  /* blank, B, I, or BI */
    'font-size' => '10',  /* in pts */
  ),
  'C' => array(
    'content' => '- {PAGENO} -',
    'font-family' => 'serif',
    'font-style' => 'BI',
    'font-size' => '18',  /* gives default */
  ),
  'R' => array(
    'content' => 'Tercetak @ {DATE j-m-Y H:m}',
    'font-family' => 'monospace',
    'font-style' => '',
    'font-size' => '10',
  ),
  'line' => 1,    /* 1 to include line below header/above footer */
), 'E'  /* defines footer for Even Pages */
);


$html = '

<h2>Laporan Data Aset</h2>
';

                        foreach($css_plugin as $css){
  
               $html .= '<link href="'.$css->SRC.'" rel="stylesheet" type="text/css" media="screen"/>';
                        }
               $html .= '<div class="col-sm-12">
                      <section class="panel">
                          <table style="width:100%;border-collapse:collapse;" border="1">
                              
                              <thead>
                              <tr>
                                  <th style="border:1px solid #999;padding:8px 0;background: #D8D8D8;">No</th>
                                  <th style="border:1px solid #999;padding:8px 0;background: #D8D8D8;">ID Aset</th>
                                  <th style="border:1px solid #999;padding:8px 0;background: #D8D8D8;">No Seri</th>
                                  <th style="border:1px solid #999;padding:8px 0;background: #D8D8D8;">Jenis Aset</th>
                                  <th style="border:1px solid #999;padding:8px 0;background: #D8D8D8;">Tipe Aset</th>
                                  <th style="border:1px solid #999;padding:8px 0;background: #D8D8D8;">Status Aset</th>
                              </tr>
                              </thead>
                              <tbody>';
                            
                                      $i=1; foreach ($aset as $row){ 
                                     
                            $html .= '<tr>
                                          <td style="border:1px solid #999;padding:4px 8px;">'.$i++.'</td>
                                          <td style="border:1px solid #999;padding:4px 8px;">'.$row->KODE_ASET.'</td>
                                          <td style="border:1px solid #999;padding:4px 8px;">'.$row->NO_SERI.'</td>
                                          <td style="border:1px solid #999;padding:4px 8px;">'.$row->NAMA_JENIS.'</td>
                                          <td style="border:1px solid #999;padding:4px 8px;">'.$row->TIPE.'</td>
                                          <td style="border:1px solid #999;padding:4px 8px;">'.$row->STATUS.'</td>
                                      </tr>';
                                      }
                            $html .='</tbody>
                          </table>
                      </section>
                  </div>
              </div>';

  foreach($js_plugin as $js){
  $html .= '<script  type="text/javascript" src="'.$js->SRC.'"></script>'; 
  }

 $str = preg_replace_callback('~&#x(0*[0-9a-f]{2,5});{0,1}~i',
    create_function ('$matches', 'return chr(hexdec($matches[1]));'), $ht);
     $str = preg_replace_callback('~&#([0-9]{2,4});{0,1}~',
    create_function ('$matches', 'return chr($matches[1]);'), $str);
     
       
         $mpdf->WriteHTML($html);
         $mpdf->Output();
     
    $str = preg_replace('~&#x(0*[0-9a-f]{2,5});{0,1}~ei', 'chr(hexdec("\\1"))', $str);
    $str = preg_replace('~&#([0-9]{2,4});{0,1}~e', 'chr(\\1)', $str);

?>