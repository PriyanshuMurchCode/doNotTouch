<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>
    <style>
        .delivery_address{
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
    </style>
</head>

<body>


    <div class="container d-flex justify-content-center">
        <div class="col-6 mct-resize">
            <div class="text-end"><button id="btn-print" class="noPrint" onclick="window.print()">Print</button></div>
            <table class="table table-bordered table-light">
                <thead>
                    <tr>
                        <th>PREPAID</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    
                    <tr>
                        <td><strong>Delivery Address:</strong>
                            <p class="delivery_address">John Doe</p>
                            <p class="delivery_address">100 Harris St, Bellevue Hill</p>
                            <p class="delivery_address">Contact Number: +61 854528254</p>
                            <p class="delivery_address">New South Wales, Sydney (Australia)</p>
                            <p class="delivery_address">2023</p>
                        </td>
                    </tr>
                    <tr>
                        <td> <div><strong>Courier Name: </strong>YOCOSO B_2_B</div>
                            <div><strong>Booking No.: </strong>45629596562</div>
                        </td>
                    </tr>
                    <tr> 
                            <td class=" text-center">{!! DNS1D::getBarcodeSVG('45629596562', 'C128',3,60) !!}</td>
                           
                    </tr>
                    <tr>
                        <td> <strong>Refrence No.:</strong>45629596562-0001</td>
                    </tr>
                    <tr> <td class=" text-center">{!! DNS1D::getBarcodeSVG('45629596562-0001', 'C128',3,60) !!}</td></tr>
                    
                </tbody>
                <tfoot class="table-group-divider">
                    <tr><td><small><strong>Sold By: </strong>company name with full address and postal code 2023</small></td></tr>
                </tfoot>
            </table>
        </div>
    </div>
</body>

</html>