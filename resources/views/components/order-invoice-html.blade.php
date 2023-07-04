<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Pranjul Fashion Pvt Ltd.</title>
    <style>
        body {
            background-color: #d2d2d2;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .body {
            height: 100%;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .mct-invoice {
            font-size: 16px;
            font-weight: 500;
        }

        .mct-invoice-brand {
            font-size: 20px;
            font-weight: 500;
        }

        .mct-invoice-ordernumber {
            font-size: 12px;
            font-weight: 500;
            color: #333
        }

        .mct-invoice-number {
            font-size: 14px;
            font-weight: 500;
            color: #333
        }

        .mct-invoice-date {
            font-size: 12px;
            color: #525252;
            display: flex;
            align-items: center;
        }

        .table-container {
            background-color: #fff;
        }

        .invoice-table-body tr td small {
            font-size: 11px;
            ;
        }

        .invoice-table-body tr td small strong {
            font-size: 12px;
            color: #555;
        }

        .invoice-table-body tr td h6 {
            margin-bottom: 0 !important;
            font-size: 13px;
        }

        .order-table-body tr td {
            font-size: 10px;
        }

        .order-table-head tr th {
            font-size: 11px;
        }

        .order-table-footer td {
            font-size: 11px;
        }

        #btn-print {
            height: 1.2rem;
            width: 3rem;
            background-color: #bdbdbd;
            border: 1px solid #d0d0d0;
            color: #000;
            font-size: 11px;
            font-weight: 500;
        }

        .mct-customer-details-col2 {
            border-left: 1px solid #e5e5e5;
        }

        .mct-product-details-product-head {
            font-size: 1.1rem;
        }

        .mct-product-details-product-titles {
            border-bottom: 1px solid #f3f3f3;
        }

        .mct-product-inner-table {
            font-size: 12px;
        }

        .mct-product-inner-fonts-H {
            padding: 3px !important;
        }

        .mct-product-inner-fonts-D {
            padding: 3px !important;
        }

        .accordion-item {
            border: none !important;
        }

        .accordion-body {
            padding: 1rem 0px !important;
        }

        .mct-overflow {
            overflow: auto !important;
        }

        th,
        td {
            font-size: 12px;
            border: 1px solid black !important;
        }

        .mct-logo img {

            width: 6rem;
            height: auto;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .mct-sales-order {
            padding: 3px !important;
        }

        .mct-table-header {
            position: absolute;
        }

        @media only screen and (max-width:541px) {
            .mct-customer-details-col2 {
                border-left: none;
            }
        }

        @media print {
            .noPrint {
                display: none !important;
            }

            .mct-resize {
                width: 100% !important;
                height: 100% !important;
            }
        }
    </style>
</head>

<body>
    <div class="row body">
        <div class="col-md-6 table-container p-2 mct-resize">
            <table class="table w-100 table-bordered mct-main-table">
                <tbody class="invoice-table-body">
                    <tr>
                        <td colspan="2">
                            <div class="">
                                <div class="pb-1 d-flex align-items-center ">
                                    <div class="mct-logo d-flex align-items-center mct-table-header">
                                        <!--Logo Image Here-->
                                        <img src="AppLogo.png" alt="Logo Image">
                                    </div>
                                    <div class="w-100 d-flex justify-content-center align-items-center py-2">
                                        <div class="d-flex justify-content-center align-items-center">
                                            <div class="d-flex align-items-center mct-invoice-brand">Pranjul Fashion
                                                Pvt. Ltd
                                            </div>
                                        </div>
                                        <div class="mct-invoice-brand-address mb-4 text-center">
                                            {{-- 44M,Industrial Area,Pali --}}
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="mct-sales-order">
                            <div class="mct-invoice text-center">
                                <strong>Sale Order</strong>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div class="">
                                <div class="mct-invoice-ordernumber">Sale Order No.</div>
                                <div class="mct-invoice-number"> 108245</div>
                                <div class="mct-invoice-date">21-06-2023</div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="w-50" rowspan="2">
                            <div class=" d-flex justify-content-between">
                                <div>
                                    <h6>Billed To:</h6>
                                    <div class="mt-2"><small><strong>John McClane</strong></small></div>
                                    <div> <small>Twitter, Inc.</small></div>
                                    <div> <small>795 Folsom Ave, Suite 600</small></div>
                                    <div><small>San Francisco, CA 94107</small></div>
                                    <div><small>P: (123) 456-7890</small></div>
                                </div>
                            </div>
                        </td>
                        <td class="w-50">
                            <div class=" d-flex justify-content-between">
                                <div>
                                    <h6>Shipping Address:</h6>
                                    <div class="mt-2"> <small>Elaine Hernandez</small></div>
                                    <div> <small>P. Sherman 42,</small></div>
                                    <div><small>Wallaby Way, Sidney</small></div>
                                    <div><small>P: (123) 345-6789</small></div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div class="">
                                <h6>Transport:</h6>
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <div class="mt-2"> <small>99,Swaai Baag</small></div>
                                        <div> <small>989 5th Avenue, New York, 55832</small></div>
                                        <div><small>john@email.com</small></div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-0 pb-0" colspan="2">
                            <h6 class="px-2">ORDER SUMMARY</h6>
                            <table class="w-100 mt-2 text-center table table-bordered mct-product-table mb-0">
                                <thead class="text-center">
                                    <tr>

                                        <th width="10%">Sr No.</th>
                                        <th width="70%" class="text-start">Product</th>
                                        <th width="10%">Piece</th>
                                        <th width="10%">Bales</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center align-top">
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <div class="text-start">Assortment Type</div>
                                            <div class="accordion" id="accordionExample">
                                                <div class="accordion-item">
                                                    <div id="collapseOne" class="accordion-collapse collapse show">
                                                        <div class="accordion-body">

                                                            {{-- Assortment Type --}}
                                                            @if (1)
                                                                <table
                                                                    class="mct-product-inner-table w-100 table table-bordered mb-1">
                                                                    <thead class="thead-light">
                                                                        <tr>
                                                                            <td scope="col"
                                                                                class="text-start mct-product-inner-fonts-H">
                                                                                Design No.</td>
                                                                            <td scope="col"
                                                                                class="mct-product-inner-fonts-H">S</td>
                                                                            <td scope="col"
                                                                                class="mct-product-inner-fonts-H">M</td>
                                                                            <td scope="col"
                                                                                class="mct-product-inner-fonts-H">L</td>
                                                                            <td scope="col"
                                                                                class="mct-product-inner-fonts-H">XL
                                                                            </td>
                                                                            <td scope="col"
                                                                                class="mct-product-inner-fonts-H">XXL
                                                                            </td>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td
                                                                                class="text-start mct-product-inner-fonts-D">
                                                                                1561</td>
                                                                            <td class="mct-product-inner-fonts-D">20
                                                                            </td>
                                                                            <td class="mct-product-inner-fonts-D">20
                                                                            </td>
                                                                            <td class="mct-product-inner-fonts-D">20
                                                                            </td>
                                                                            <td class="mct-product-inner-fonts-D">20
                                                                            </td>
                                                                            <td class="mct-product-inner-fonts-D">20
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            @endif

                                                            {{-- Size wise --}}

                                                            @if (0)
                                                                <table
                                                                    class="mct-product-inner-table w-100 table table-bordered mb-1">
                                                                    <thead class="thead-light">
                                                                        <tr>
                                                                            <td scope="col"
                                                                                class="mct-product-inner-fonts-H">S</td>
                                                                            <td scope="col"
                                                                                class="mct-product-inner-fonts-H">M</td>
                                                                            <td scope="col"
                                                                                class="mct-product-inner-fonts-H">L</td>
                                                                            <td scope="col"
                                                                                class="mct-product-inner-fonts-H">XL
                                                                            </td>
                                                                            <td scope="col"
                                                                                class="mct-product-inner-fonts-H">XXL
                                                                            </td>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>

                                                                            <td class="mct-product-inner-fonts-D">20
                                                                            </td>
                                                                            <td class="mct-product-inner-fonts-D">20
                                                                            </td>
                                                                            <td class="mct-product-inner-fonts-D">20
                                                                            </td>
                                                                            <td class="mct-product-inner-fonts-D">20
                                                                            </td>
                                                                            <td class="mct-product-inner-fonts-D">20
                                                                            </td>
                                                                        </tr>
                                                                        <tr>

                                                                            <td class="mct-product-inner-fonts-D">20
                                                                            </td>
                                                                            <td class="mct-product-inner-fonts-D">20
                                                                            </td>
                                                                            <td class="mct-product-inner-fonts-D">20
                                                                            </td>
                                                                            <td class="mct-product-inner-fonts-D">20
                                                                            </td>
                                                                            <td class="mct-product-inner-fonts-D">20
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            @endif

                                                            {{-- Bale Wise --}}
                                                            @if (0)
                                                            @endif

                                                            {{-- Design Wise --}}
                                                            @if (0)
                                                                <table
                                                                    class="mct-product-inner-table w-100 table table-bordered mb-1">
                                                                    <thead class="thead-light">
                                                                        <tr>
                                                                            <td scope="col"
                                                                                class="text-start mct-product-inner-fonts-H">
                                                                                Design No.</td>
                                                                            <td scope="col"
                                                                                class="mct-product-inner-fonts-H">Bale
                                                                                Qty.
                                                                            </td>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td
                                                                                class="text-start mct-product-inner-fonts-D">
                                                                                1561</td>
                                                                            <td class="mct-product-inner-fonts-D">20
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td
                                                                                class="text-start mct-product-inner-fonts-D">
                                                                                1562</td>
                                                                            <td class="mct-product-inner-fonts-D">20
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            @endif
                                                            <div class="text-start"><small class="text-danger">Note:
                                                                    Lorem
                                                                    ipsum dolor sit amet consectetur adipisicing elit.
                                                                    In,
                                                                    ratione.</small></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>100</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>
                                            <div class="text-start">Size Wise</div>
                                            <div class="accordion" id="accordionExample2">
                                                <div class="accordion-item">
                                                    <div id="collapseTwo" class="accordion-collapse collapse show">
                                                        <div class="accordion-body">

                                                            {{-- Assortment Type --}}
                                                            @if (0)
                                                                <table
                                                                    class="mct-product-inner-table w-100 table table-bordered mb-1">
                                                                    <thead class="thead-light">
                                                                        <tr>
                                                                            <td scope="col"
                                                                                class="text-start mct-product-inner-fonts-H">
                                                                                Design No.</td>
                                                                            <td scope="col"
                                                                                class="mct-product-inner-fonts-H">S
                                                                            </td>
                                                                            <td scope="col"
                                                                                class="mct-product-inner-fonts-H">M
                                                                            </td>
                                                                            <td scope="col"
                                                                                class="mct-product-inner-fonts-H">L
                                                                            </td>
                                                                            <td scope="col"
                                                                                class="mct-product-inner-fonts-H">XL
                                                                            </td>
                                                                            <td scope="col"
                                                                                class="mct-product-inner-fonts-H">XXL
                                                                            </td>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td
                                                                                class="text-start mct-product-inner-fonts-D">
                                                                                1561</td>
                                                                            <td class="mct-product-inner-fonts-D">20
                                                                            </td>
                                                                            <td class="mct-product-inner-fonts-D">20
                                                                            </td>
                                                                            <td class="mct-product-inner-fonts-D">20
                                                                            </td>
                                                                            <td class="mct-product-inner-fonts-D">20
                                                                            </td>
                                                                            <td class="mct-product-inner-fonts-D">20
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            @endif

                                                            {{-- Size wise --}}

                                                            @if (1)
                                                                <table
                                                                    class="mct-product-inner-table w-100 table table-bordered mb-1">
                                                                    <thead class="thead-light">
                                                                        <tr>
                                                                            <td scope="col"
                                                                                class="mct-product-inner-fonts-H">S
                                                                            </td>
                                                                            <td scope="col"
                                                                                class="mct-product-inner-fonts-H">M
                                                                            </td>
                                                                            <td scope="col"
                                                                                class="mct-product-inner-fonts-H">L
                                                                            </td>
                                                                            <td scope="col"
                                                                                class="mct-product-inner-fonts-H">XL
                                                                            </td>
                                                                            <td scope="col"
                                                                                class="mct-product-inner-fonts-H">XXL
                                                                            </td>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>

                                                                            <td class="mct-product-inner-fonts-D">20
                                                                            </td>
                                                                            <td class="mct-product-inner-fonts-D">20
                                                                            </td>
                                                                            <td class="mct-product-inner-fonts-D">20
                                                                            </td>
                                                                            <td class="mct-product-inner-fonts-D">20
                                                                            </td>
                                                                            <td class="mct-product-inner-fonts-D">20
                                                                            </td>
                                                                        </tr>
                                                                        <tr>

                                                                            <td class="mct-product-inner-fonts-D">20
                                                                            </td>
                                                                            <td class="mct-product-inner-fonts-D">20
                                                                            </td>
                                                                            <td class="mct-product-inner-fonts-D">20
                                                                            </td>
                                                                            <td class="mct-product-inner-fonts-D">20
                                                                            </td>
                                                                            <td class="mct-product-inner-fonts-D">20
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            @endif

                                                            {{-- Bale Wise --}}
                                                            @if (0)
                                                            @endif

                                                            {{-- Design Wise --}}
                                                            @if (0)
                                                                <table
                                                                    class="mct-product-inner-table w-100 table table-bordered mb-1">
                                                                    <thead class="thead-light">
                                                                        <tr>
                                                                            <td scope="col"
                                                                                class="text-start mct-product-inner-fonts-H">
                                                                                Design No.</td>
                                                                            <td scope="col"
                                                                                class="mct-product-inner-fonts-H">Bale
                                                                                Qty.
                                                                            </td>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td
                                                                                class="text-start mct-product-inner-fonts-D">
                                                                                1561</td>
                                                                            <td class="mct-product-inner-fonts-D">20
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td
                                                                                class="text-start mct-product-inner-fonts-D">
                                                                                1562</td>
                                                                            <td class="mct-product-inner-fonts-D">20
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            @endif
                                                            <div class="text-start"><small class="text-danger">Note:
                                                                    Lorem
                                                                    ipsum dolor sit amet consectetur adipisicing elit.
                                                                    In,
                                                                    ratione.</small></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </td>
                                        <td>200</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>
                                            <div class="text-start">Bale Wise</div>
                                            <div class="accordion" id="accordionExample2">
                                                <div class="accordion-item">
                                                    <div id="collapseThree" class="accordion-collapse collapse show">
                                                        <div class="accordion-body">

                                                            {{-- Assortment Type --}}
                                                            @if (0)
                                                                <table
                                                                    class="mct-product-inner-table w-100 table table-bordered mb-1">
                                                                    <thead class="thead-light">
                                                                        <tr>
                                                                            <td scope="col"
                                                                                class="text-start mct-product-inner-fonts-H">
                                                                                Design No.</td>
                                                                            <td scope="col"
                                                                                class="mct-product-inner-fonts-H">S
                                                                            </td>
                                                                            <td scope="col"
                                                                                class="mct-product-inner-fonts-H">M
                                                                            </td>
                                                                            <td scope="col"
                                                                                class="mct-product-inner-fonts-H">L
                                                                            </td>
                                                                            <td scope="col"
                                                                                class="mct-product-inner-fonts-H">XL
                                                                            </td>
                                                                            <td scope="col"
                                                                                class="mct-product-inner-fonts-H">XXL
                                                                            </td>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td
                                                                                class="text-start mct-product-inner-fonts-D">
                                                                                1561</td>
                                                                            <td class="mct-product-inner-fonts-D">20
                                                                            </td>
                                                                            <td class="mct-product-inner-fonts-D">20
                                                                            </td>
                                                                            <td class="mct-product-inner-fonts-D">20
                                                                            </td>
                                                                            <td class="mct-product-inner-fonts-D">20
                                                                            </td>
                                                                            <td class="mct-product-inner-fonts-D">20
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            @endif

                                                            {{-- Size wise --}}

                                                            @if (0)
                                                                <table
                                                                    class="mct-product-inner-table w-100 table table-bordered mb-1">
                                                                    <thead class="thead-light">
                                                                        <tr>
                                                                            <td scope="col"
                                                                                class="mct-product-inner-fonts-H">S
                                                                            </td>
                                                                            <td scope="col"
                                                                                class="mct-product-inner-fonts-H">M
                                                                            </td>
                                                                            <td scope="col"
                                                                                class="mct-product-inner-fonts-H">L
                                                                            </td>
                                                                            <td scope="col"
                                                                                class="mct-product-inner-fonts-H">XL
                                                                            </td>
                                                                            <td scope="col"
                                                                                class="mct-product-inner-fonts-H">XXL
                                                                            </td>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>

                                                                            <td class="mct-product-inner-fonts-D">20
                                                                            </td>
                                                                            <td class="mct-product-inner-fonts-D">20
                                                                            </td>
                                                                            <td class="mct-product-inner-fonts-D">20
                                                                            </td>
                                                                            <td class="mct-product-inner-fonts-D">20
                                                                            </td>
                                                                            <td class="mct-product-inner-fonts-D">20
                                                                            </td>
                                                                        </tr>
                                                                        <tr>

                                                                            <td class="mct-product-inner-fonts-D">20
                                                                            </td>
                                                                            <td class="mct-product-inner-fonts-D">20
                                                                            </td>
                                                                            <td class="mct-product-inner-fonts-D">20
                                                                            </td>
                                                                            <td class="mct-product-inner-fonts-D">20
                                                                            </td>
                                                                            <td class="mct-product-inner-fonts-D">20
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            @endif

                                                            {{-- Bale Wise --}}
                                                            @if (1)
                                                            @endif

                                                            {{-- Design Wise --}}
                                                            @if (0)
                                                                <table
                                                                    class="mct-product-inner-table w-100 table table-bordered mb-1">
                                                                    <thead class="thead-light">
                                                                        <tr>
                                                                            <td scope="col"
                                                                                class="text-start mct-product-inner-fonts-H">
                                                                                Design No.</td>
                                                                            <td scope="col"
                                                                                class="mct-product-inner-fonts-H">Bale
                                                                                Qty.
                                                                            </td>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td
                                                                                class="text-start mct-product-inner-fonts-D">
                                                                                1561</td>
                                                                            <td class="mct-product-inner-fonts-D">20
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td
                                                                                class="text-start mct-product-inner-fonts-D">
                                                                                1562</td>
                                                                            <td class="mct-product-inner-fonts-D">20
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            @endif
                                                            <div class="text-start"><small class="text-danger">Note:
                                                                    Lorem
                                                                    ipsum dolor sit amet consectetur adipisicing elit.
                                                                    In,
                                                                    ratione.</small></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </td>
                                        <td>600</td>
                                        <td>6</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>
                                            <div class="text-start">Design Wise</div>
                                            <div class="accordion" id="accordionExample2">
                                                <div class="accordion-item">
                                                    <div id="collapsefour" class="accordion-collapse collapse show">
                                                        <div class="accordion-body">

                                                            {{-- Assortment Type --}}
                                                            @if (0)
                                                                <table
                                                                    class="mct-product-inner-table w-100 table table-bordered mb-1">
                                                                    <thead class="thead-light">
                                                                        <tr>
                                                                            <td scope="col"
                                                                                class="text-start mct-product-inner-fonts-H">
                                                                                Design No.</td>
                                                                            <td scope="col"
                                                                                class="mct-product-inner-fonts-H">S
                                                                            </td>
                                                                            <td scope="col"
                                                                                class="mct-product-inner-fonts-H">M
                                                                            </td>
                                                                            <td scope="col"
                                                                                class="mct-product-inner-fonts-H">L
                                                                            </td>
                                                                            <td scope="col"
                                                                                class="mct-product-inner-fonts-H">XL
                                                                            </td>
                                                                            <td scope="col"
                                                                                class="mct-product-inner-fonts-H">XXL
                                                                            </td>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td
                                                                                class="text-start mct-product-inner-fonts-D">
                                                                                1561</td>
                                                                            <td class="mct-product-inner-fonts-D">20
                                                                            </td>
                                                                            <td class="mct-product-inner-fonts-D">20
                                                                            </td>
                                                                            <td class="mct-product-inner-fonts-D">20
                                                                            </td>
                                                                            <td class="mct-product-inner-fonts-D">20
                                                                            </td>
                                                                            <td class="mct-product-inner-fonts-D">20
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            @endif

                                                            {{-- Size wise --}}

                                                            @if (0)
                                                                <table
                                                                    class="mct-product-inner-table w-100 table table-bordered mb-1">
                                                                    <thead class="thead-light">
                                                                        <tr>
                                                                            <td scope="col"
                                                                                class="mct-product-inner-fonts-H">S
                                                                            </td>
                                                                            <td scope="col"
                                                                                class="mct-product-inner-fonts-H">M
                                                                            </td>
                                                                            <td scope="col"
                                                                                class="mct-product-inner-fonts-H">L
                                                                            </td>
                                                                            <td scope="col"
                                                                                class="mct-product-inner-fonts-H">XL
                                                                            </td>
                                                                            <td scope="col"
                                                                                class="mct-product-inner-fonts-H">XXL
                                                                            </td>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>

                                                                            <td class="mct-product-inner-fonts-D">20
                                                                            </td>
                                                                            <td class="mct-product-inner-fonts-D">20
                                                                            </td>
                                                                            <td class="mct-product-inner-fonts-D">20
                                                                            </td>
                                                                            <td class="mct-product-inner-fonts-D">20
                                                                            </td>
                                                                            <td class="mct-product-inner-fonts-D">20
                                                                            </td>
                                                                        </tr>
                                                                        <tr>

                                                                            <td class="mct-product-inner-fonts-D">20
                                                                            </td>
                                                                            <td class="mct-product-inner-fonts-D">20
                                                                            </td>
                                                                            <td class="mct-product-inner-fonts-D">20
                                                                            </td>
                                                                            <td class="mct-product-inner-fonts-D">20
                                                                            </td>
                                                                            <td class="mct-product-inner-fonts-D">20
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            @endif

                                                            {{-- Bale Wise --}}
                                                            @if (0)
                                                            @endif

                                                            {{-- Design Wise --}}
                                                            @if (1)
                                                                <table
                                                                    class="mct-product-inner-table w-100 table table-bordered mb-1">
                                                                    <thead class="thead-light">
                                                                        <tr>
                                                                            <td scope="col"
                                                                                class="text-start mct-product-inner-fonts-H">
                                                                                Design No.</td>
                                                                            <td scope="col"
                                                                                class="mct-product-inner-fonts-H">Bale
                                                                                Qty.
                                                                            </td>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td
                                                                                class="text-start mct-product-inner-fonts-D">
                                                                                1561</td>
                                                                            <td class="mct-product-inner-fonts-D">4
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td
                                                                                class="text-start mct-product-inner-fonts-D">
                                                                                1562</td>
                                                                            <td class="mct-product-inner-fonts-D">6
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            @endif
                                                            <div class="text-start"><small class="text-danger">Note:
                                                                    Lorem
                                                                    ipsum dolor sit amet consectetur adipisicing elit.
                                                                    In,
                                                                    ratione.</small></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>1000</td>
                                        <td>10</td>
                                    </tr>
                                    <tr>
                                        <td width="80%" colspan="2" class="text-end"><strong>Total</strong>
                                        </td>
                                        <td width="10%"><strong>1900</strong></td>
                                        <td width="10%"><strong>19</strong></td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
