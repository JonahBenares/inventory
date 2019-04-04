<!DOCTYPE html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Print Stock Card</title>
</head>
<style type="text/css">
    .nomarg{
        margin:0px;
    }
    tr>td.dashed, 
    tr>th.dashed {
        border-right: 2px dashed #000!important;
    }
    body{
        font-size: 9px!important;
        color: #000!important;
        font-weight: 600;
    }
    .text-red{
        color: red;
        -webkit-print-color-adjust: exact;
    }
    .text-blue{
        color: blue;
        -webkit-print-color-adjust: exact;
    }
    @media print{
        .text-red{
            color: red;
            -webkit-print-color-adjust: exact;
        }
        .text-blue{
            color: blue;
            -webkit-print-color-adjust: exact;            
        }
        #print-btn{
            display: none;
        }
        td{
            font-size: 9px!important;
        }
    }
    p{
        color: #000
    }
    .padl5{
        padding-left: 2px;
    }
    .padr5{
        padding-right:2px;
    }
</style>
<body style="padding-top:0px">    
    <div>
        <table class="table-bordesred" width="100%" >
            <tr class="hidden-tr">
                <td style="width: 33.33%"></td>
                <td style="width: 33.33%"></td>
                <td style="width: 33.33%"></td>
            </tr>
            <tr>                
                <td colspan="1" align="center" style="padding-right: 15px">
                    <table class="table-bordered" width="100%" style="border:2px solid #000;">
                        <tr>
                            <td width="12%"></td>
                            <td width="12%"></td>
                            <td width="12%"></td>
                            <td width="12%"></td>
                            <td width="12%"></td>
                            <td width="12%"></td>
                            <td width="12%"></td>
                            <td width="12%"></td>
                        </tr>   
                        <tr>
                            <td colspan="8">
                                <center>
                                    <h3 class="nomarg"><b>CENPRI STOCK CARD</b></h3>
                                    <small style="color:#ffffff00!important">printed by: admin admin admin | 2019-01-10 | 20:20am</small>
                                </center>
                            </td>
                        </tr>  
                        <tr>
                            <td colspan="1" class="padr5" align="right"><p style="height: 40px">Item Desc:</p></td>
                            <td colspan="7" class="padl5"><p style="height: 40px"></p></td>
                        </tr>  
                        <tr>
                            <td colspan="1" class="padr5" align="right">Location:</td>
                            <td colspan="2" class="padl5"></td>
                            <td colspan="1" class="padr5" align="right">Rack:</td>
                            <td colspan="2" class="padl5"></td>
                            <td colspan="1" class="padr5" align="right">Ord Qty:</td>
                            <td colspan="1" class="padl5"></td>                            
                        </tr> 
                        <tr>
                            <td colspan="1" class="padr5" align="right">Brand:</td>     
                            <td colspan="7" class="padl5"></td>                            
                        </tr> 
                        <tr>
                            <td colspan="1" class="padr5" align="right">Orig PN:</td>
                            <td colspan="2" class="padl5"></td>
                            <td colspan="1" class="padr5" align="right">Cost:</td>
                            <td colspan="2" class="padl5"></td>      
                            <td colspan="1" class="padr5" align="right">U/M:</td>
                            <td colspan="1" class="padl5"></td>                      
                        </tr> 
                        <tr>
                            <td colspan="1" class="padr5" align="right">Cat PN:</td>
                            <td colspan="2" class="padl5"></td>
                            <td colspan="1" class="padr5" align="right">BarCode:</td>
                            <td colspan="2" class="padl5"></td>    
                            <td colspan="1" class="padr5" align="right">Model:</td>
                            <td colspan="1" class="padl5"></td>                         
                        </tr> 
                        <tr>
                            <td colspan="8" class="padr5" align="right"><br></td>                    
                        </tr> 
                        <tr>
                            <td rowspan="3" align="center">Date</td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center">Received</td>                        
                            <td colspan="2" align="center">Issued</td>                        
                            <td colspan="2" align="center">Restock</td>                        
                            <td colspan="1" align="center">Balance</td>                        
                        </tr> 
                        <tr>
                            <td align="center">Qty</td>                        
                            <td align="center">MRFNo.</td>                        
                            <td align="center">Qty</td>                        
                            <td align="center">MIFNO.</td>     
                            <td align="center">Qty</td>                        
                            <td align="center">MRWFNO.</td>   
                            <td align="center">Qty</td>                  
                        </tr>
                        <tr>
                            <td align="center"><p style="height: 26px"></p></td>                        
                            <td align="center"><p style="height: 26px"></p></td>                        
                            <td align="center"><p style="height: 26px"></p></td>                        
                            <td align="center"><p style="height: 26px"></p></td>                        
                            <td align="center"><p style="height: 26px"></p></td>     
                            <td align="center"><p style="height: 26px"></p></td>                        
                            <td align="center"><p style="height: 26px"></p></td>   
                            <td align="center"><p style="height: 26px"></p></td>                  
                        </tr>   
                        <tr>
                            <td align="center"><p style="height: 26px"></p></td>                        
                            <td align="center"><p style="height: 26px"></p></td>                        
                            <td align="center"><p style="height: 26px"></p></td>                        
                            <td align="center"><p style="height: 26px"></p></td>                        
                            <td align="center"><p style="height: 26px"></p></td>     
                            <td align="center"><p style="height: 26px"></p></td>                        
                            <td align="center"><p style="height: 26px"></p></td>   
                            <td align="center"><p style="height: 26px"></p></td>                  
                        </tr>
                        <tr>
                            <td align="center"><p style="height: 26px"></p></td>                        
                            <td align="center"><p style="height: 26px"></p></td>                        
                            <td align="center"><p style="height: 26px"></p></td>                        
                            <td align="center"><p style="height: 26px"></p></td>                        
                            <td align="center"><p style="height: 26px"></p></td>     
                            <td align="center"><p style="height: 26px"></p></td>                        
                            <td align="center"><p style="height: 26px"></p></td>   
                            <td align="center"><p style="height: 26px"></p></td>                  
                        </tr>
                        <tr>
                            <td align="center"><p style="height: 26px"></p></td>                        
                            <td align="center"><p style="height: 26px"></p></td>                        
                            <td align="center"><p style="height: 26px"></p></td>                        
                            <td align="center"><p style="height: 26px"></p></td>                        
                            <td align="center"><p style="height: 26px"></p></td>     
                            <td align="center"><p style="height: 26px"></p></td>                        
                            <td align="center"><p style="height: 26px"></p></td>   
                            <td align="center"><p style="height: 26px"></p></td>                  
                        </tr>
                        <tr>
                            <td align="center"><p style="height: 26px"></p></td>                        
                            <td align="center"><p style="height: 26px"></p></td>                        
                            <td align="center"><p style="height: 26px"></p></td>                        
                            <td align="center"><p style="height: 26px"></p></td>                        
                            <td align="center"><p style="height: 26px"></p></td>     
                            <td align="center"><p style="height: 26px"></p></td>                        
                            <td align="center"><p style="height: 26px"></p></td>   
                            <td align="center"><p style="height: 26px"></p></td>                  
                        </tr>   
                        <tr>
                            <td align="center"><p style="height: 26px"></p></td>                        
                            <td align="center"><p style="height: 26px"></p></td>                        
                            <td align="center"><p style="height: 26px"></p></td>                        
                            <td align="center"><p style="height: 26px"></p></td>                        
                            <td align="center"><p style="height: 26px"></p></td>     
                            <td align="center"><p style="height: 26px"></p></td>                        
                            <td align="center"><p style="height: 26px"></p></td>   
                            <td align="center"><p style="height: 26px"></p></td>                  
                        </tr>
                        <tr>
                            <td align="center"><p style="height: 26px"></p></td>                        
                            <td align="center"><p style="height: 26px"></p></td>                        
                            <td align="center"><p style="height: 26px"></p></td>                        
                            <td align="center"><p style="height: 26px"></p></td>                        
                            <td align="center"><p style="height: 26px"></p></td>     
                            <td align="center"><p style="height: 26px"></p></td>                        
                            <td align="center"><p style="height: 26px"></p></td>   
                            <td align="center"><p style="height: 26px"></p></td>                  
                        </tr>
                        <tr>
                            <td align="center"><p style="height: 26px"></p></td>                        
                            <td align="center"><p style="height: 26px"></p></td>                        
                            <td align="center"><p style="height: 26px"></p></td>                        
                            <td align="center"><p style="height: 26px"></p></td>                        
                            <td align="center"><p style="height: 26px"></p></td>     
                            <td align="center"><p style="height: 26px"></p></td>                        
                            <td align="center"><p style="height: 26px"></p></td>   
                            <td align="center"><p style="height: 26px"></p></td>                  
                        </tr>
                        <tr>
                            <td align="center"><p style="height: 26px"></p></td>                        
                            <td align="center"><p style="height: 26px"></p></td>                        
                            <td align="center"><p style="height: 26px"></p></td>                        
                            <td align="center"><p style="height: 26px"></p></td>                        
                            <td align="center"><p style="height: 26px"></p></td>     
                            <td align="center"><p style="height: 26px"></p></td>                        
                            <td align="center"><p style="height: 26px"></p></td>   
                            <td align="center"><p style="height: 26px"></p></td>                  
                        </tr>   
                        <tr>
                            <td align="center"><p style="height: 26px"></p></td>                        
                            <td align="center"><p style="height: 26px"></p></td>                        
                            <td align="center"><p style="height: 26px"></p></td>                        
                            <td align="center"><p style="height: 26px"></p></td>                        
                            <td align="center"><p style="height: 26px"></p></td>     
                            <td align="center"><p style="height: 26px"></p></td>                        
                            <td align="center"><p style="height: 26px"></p></td>   
                            <td align="center"><p style="height: 26px"></p></td>                  
                        </tr>
                        <tr>
                            <td align="center"><p style="height: 26px"></p></td>                        
                            <td align="center"><p style="height: 26px"></p></td>                        
                            <td align="center"><p style="height: 26px"></p></td>                        
                            <td align="center"><p style="height: 26px"></p></td>                        
                            <td align="center"><p style="height: 26px"></p></td>     
                            <td align="center"><p style="height: 26px"></p></td>                        
                            <td align="center"><p style="height: 26px"></p></td>   
                            <td align="center"><p style="height: 26px"></p></td>                  
                        </tr>
                        <tr>
                            <td align="center"><p style="height: 26px"></p></td>                        
                            <td align="center"><p style="height: 26px"></p></td>                        
                            <td align="center"><p style="height: 26px"></p></td>                        
                            <td align="center"><p style="height: 26px"></p></td>                        
                            <td align="center"><p style="height: 26px"></p></td>     
                            <td align="center"><p style="height: 26px"></p></td>                        
                            <td align="center"><p style="height: 26px"></p></td>   
                            <td align="center"><p style="height: 26px"></p></td>                  
                        </tr>
                        <tr>
                            <td align="center"><p style="height: 26px"></p></td>                        
                            <td align="center"><p style="height: 26px"></p></td>                        
                            <td align="center"><p style="height: 26px"></p></td>                        
                            <td align="center"><p style="height: 26px"></p></td>                        
                            <td align="center"><p style="height: 26px"></p></td>     
                            <td align="center"><p style="height: 26px"></p></td>                        
                            <td align="center"><p style="height: 26px"></p></td>   
                            <td align="center"><p style="height: 26px"></p></td>                  
                        </tr>   
                        <tr>
                            <td align="center"><p style="height: 26px"></p></td>                        
                            <td align="center"><p style="height: 26px"></p></td>                        
                            <td align="center"><p style="height: 26px"></p></td>                        
                            <td align="center"><p style="height: 26px"></p></td>                        
                            <td align="center"><p style="height: 26px"></p></td>     
                            <td align="center"><p style="height: 26px"></p></td>                        
                            <td align="center"><p style="height: 26px"></p></td>   
                            <td align="center"><p style="height: 26px"></p></td>                  
                        </tr>
                        <tr>
                            <td align="center"><p style="height: 26px"></p></td>                        
                            <td align="center"><p style="height: 26px"></p></td>                        
                            <td align="center"><p style="height: 26px"></p></td>                        
                            <td align="center"><p style="height: 26px"></p></td>                        
                            <td align="center"><p style="height: 26px"></p></td>     
                            <td align="center"><p style="height: 26px"></p></td>                        
                            <td align="center"><p style="height: 26px"></p></td>   
                            <td align="center"><p style="height: 26px"></p></td>                  
                        </tr>
                        <!-- <tr>
                            <td align="center"></td>                        
                            <td align="center"></td>                        
                            <td align="center">MreqF-2019-03-0071</td>                        
                            <td align="center"></td>                        
                            <td align="center">MIF-2019-03-0059</td>     
                            <td align="center"></td>                        
                            <td align="center">MRWF-2019-03-0002</td>   
                            <td align="center"></td>                  
                        </tr>  -->                       
                    </table>
                </td>




                
                <!-- <td colspan="2" align="center">
                    <div class="btn-group"  id="print-btn" style="position: fixed;top:10px">
                        <button  class="btn btn-primary" onclick="window.print()">Print <u><b>Stock Card</b></u></button>
                        <a href=""></a>
                    </div>
                </td> -->
            </tr>
        </table>

</body>
</html>