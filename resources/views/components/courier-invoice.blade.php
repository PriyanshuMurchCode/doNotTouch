<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>
    <style>
        .extra_spacing {
            margin: 0 !important;
        }

        #btn-print {
            height: 1.2rem;
            width: 3rem;
            background-color: #f5f4f4;
            border: 1px solid #dadada;
            color: #000;
            font-size: 11px;
            font-weight: 500;
        }

        @media print {
            .noPrint {
                display: none;
            }

            .mct-resize {
                width: 100%;
                height: 100%;
            }
        }

        td {
            font-size: .805em;
            text-align: center;
        }
        .strong_fS{
            font-size: 0.9em;
        }

        th {
            font-size: .805em;
            text-align: center;
        }

        small {
            font-size: .805em;
        }

        strong {
            font-size: 1.09em;
        }
    </style>
</head>

<body>


    <div class="container d-flex justify-content-center">
        <div class="mct-resize col-md-7 col-12">
            <div class="text-end"><button id="btn-print" class="noPrint" onclick="window.print()">Print</button></div>
            <div class="d-flex mt-4">
                <div class="col-3">
                    <img src="login.png" alt="YOCOSO" style="width: 100%; height: auto;">
                </div>
                <div class="col-9 d-flex justify-content-end align-items-center">
                    <h5 class="m-0">Invoice Detail</h5>
                </div>
            </div>

            <div class="d-flex justify-content-between mt-2">
                <div class="col-5 text-start">
                    <div><strong><small>Collection From:</small> </strong></div>
                    <div>
                        <small class="extra_spacing">Priyansu Chouhan</small>
                    </div>
                    <div>
                        <small class="extra_spacing">2 K 4, Old Housing Board</small>
                        <small class="extra_spacing">Pali-Marwar</small>
                    </div>
                    <div>
                        <small class="extra_spacing">+91 7789546525</small>
                    </div>
                    <div>
                        <small class="extra_spacing">Pali,Rajasthan,306401</small>
                    </div>
                    <div>
                        <small class="extra_spacing">India</small>
                    </div>
                </div>
                <div class="col-5 text-end ">
                    <div><strong><small>Billing Address:</small></strong></div>
                    <div>
                        <small>Lalit Chouhan</small>
                    </div>
                    <div>
                        <small>418,Bajrang Nagar</small>
                        <small>Pali-Marwar</small>
                    </div>
                    <div>
                        <small>+91 9521040882</small>
                    </div>
                    <div>
                        <small>Pali,Rajasthan,306401</small>
                    </div>
                    <div>
                        <small>India</small>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between mt-2">
                <div class="col-5 text-start mt-3">
                    <div class="">
                        <div><small><strong>PAN No: </strong>12312HJD8K</small></div>
                        <div><small><strong>GST Registration No: </strong>2342342342342</small></div>
                    </div>
                    <div class="mt-2">
                        <div><small><strong>Order Number: </strong>406-55554-000454</small></div>
                        <div><small><strong>Order Date: </strong>05-07-2023</small></div>
                    </div>
                </div>
                <div class="col-5 text-end">
                    <div><small><strong>Delivery Address:</strong></small></div>
                    <div>
                        <small>Lalit Chouhan</small>
                    </div>
                    <div>
                        <small>418,Bajrang Nagar</small>
                    </div>
                    <div>
                        <small>+91 9521040882</small>
                    </div>
                    <div>
                        <small>Pali,Rajasthan,306401</small>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between mt-2">
                <div class="col-5 text-start">
                    <div><small><strong>Invoice Number: </strong>DEL33-1553 </small> </div>
                    <div><small><strong>Invoice Details: </strong>RJ-DEL33-5494554-1553 </small> </div>
                    <div><small><strong>Invoice Date: </strong>05-07-2023 </small> </div>
                </div>
                <div class="col-5 text-end">
                    <div><small><strong>State/UT Code: </strong>08 </small> </div>
                    <div><small><strong>Place of supply: </strong>RAJASTHAN </small> </div>
                    <div><small><strong>Place of delivery: </strong>RAJASTHAN </small> </div>
                </div>
            </div>


            <!--############################### Table Start ###############################-->
            <div class="mt-3 overflow-auto">
                <table class="table table-bordered table-light table-responsive">
                    <thead>
                        <tr>
                            <th width="2%">Sr.no</th>
                            <th width="45%">Description</th>
                            <th width="10%">Dangerous Goods</th>
                            <th width="3%">Sensitive Goods</th>
                            <th width="10%">Fragile Goods</th>
                            <th width="10%">Total Amount</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        <tr>
                            <td>1</td>
                            <td class="text-start">Lorem, ipsum dolor sit amet consectetur
                                adipisicing elit.</td>
                            <td>1500</td>
                            <td>1500</td>
                            <td>270</td>
                            <td>1770</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td class="text-start">Lorem, ipsum dolor sit amet consectetur
                                adipisicing elit.</td>
                            <td>1500</td>
                            <td>1500</td>
                            <td>270</td>
                            <td>1770</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td class="text-start">Lorem, ipsum dolor sit amet consectetur
                                adipisicing elit.</td>
                            <td>1500</td>
                            <td>1500</td>
                            <td>270</td>
                            <td>1770</td>
                        </tr>

                        <tr>
                            <th colspan="4">Total:</th>
                            <th>184.94</th>
                            <th>1,867.94</th>
                        </tr>
                        <tr>
                            <td colspan="6" class="text-start">
                                <div><strong class="strong_fS">Amount in words:</strong></div>
                                <div><strong class="strong_fS">One Thousend Eight Hundred Sixty Seven</strong></div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="6" class="text-end">
                                <label style="font-size: 1.1em;">Priyanshu Chouhan</label><br>
                                <strong class="strong_fS">Authorized Signature</strong>
                            </td>
                        </tr>
                    </tbody>
                    <!-- <tfoot class="table-group-divider">
                        <td colspan="7">Total:</td>
                        <td>184.94</td>
                        <td>1,867.94</td>
                    </tfoot> -->
                </table>
            </div>
        </div>
    </div>
</body>

</html>