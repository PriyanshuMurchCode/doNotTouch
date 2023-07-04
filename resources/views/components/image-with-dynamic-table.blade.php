@extends('page-layout.layout')


@section('style')
    <style>
        #image_preview {
            margin-top: 20px;
        }

        .image-td {
            display: flex;
            justify-content: center;
        }

        .preview {
            border: 1px solid grey;
            margin: 0.5rem 0.2rem;
            background-size: cover;
            background-position: center center;
            background-repeat: no-repeat;
            height: 50px;
            width: 50px;
            border-radius: 10px;
        }

        #myTable {
            text-align: center;
            border-collapse: collapse;
        }

        tr:hover {
            background-color: #e0e0e0;
        }

        #multiFileUpload {
            display: none;
        }

        #myTable {
            display: none;
        }

        th {
            padding: 20px 0px;
            background-color: #000;
            color: #fff;
        }

        #file-size-error {
            display: none;
        }

        #file-height-width-error {
            display: none;
        }
    </style>
@endsection

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12 justify-content-between">
                        <form action="#" method="post" id="myForm"
                            class="d-flex justify-content-between align-items-center">
                            <label for="multiFileUpload" class="form-label">
                                {{-- <button class="btn btn-dark" type="button">Choose a File</button> --}}
                                <span class="btn btn-dark">Choose a File</span>
                                {{-- <div> --}}
                                <small class="text-danger" id="file-size-error">(File Size allowed Upto 2MB)</small>
                                <small class="text-danger" id="file-height-width-error">(Maximum Height & Width upto 1000px
                                    )</small>
                                {{-- </div> --}}
                            </label>
                            <input type="file" id="multiFileUpload" multiple="multiple" name="multiFileUpload">
                            <div>
                                <button class="btn btn-outline-success text-end" type="button" id="submitBtn"
                                    [disabled]="!form.form.valid">
                                    Save
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div id="image_preview">
                            <table id="myTable" cellpadding="1" width="100%">
                                <tr>
                                    <th width="10%">Sr.no</th>
                                    <th width="30%">Image</th>
                                    <th width="30%">Design No.</th>
                                    <th width="30%">Active/Inactive</th>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        const inputFile = document.getElementById('multiFileUpload'); // Input type File
        const imagePreviewBox = document.getElementById('image_preview'); // div where the table will be created
        const table = document.getElementById('myTable'); // table
        const btn = document.getElementById('submitBtn'); // Submit Button 
        const form = document.getElementById('myForm'); // Form 
        let formdata = new FormData(form); // form data to append all data
        let rowCount = 0; // to keep records of hoe many rows are created
        imageData = []; // array to store images data
        inputFieldData = []; // array to store input field data
        checkboxFieldData = []; // array to store checkbox data
        bodyData = []; // array to the final data


        /* ############################# Function on save Button ######################################## */

        btn.addEventListener('click', () => {
            bodyData = [];
            inputFieldData = [];
            checkboxFieldData = [];
            for (i = 1; i <= rowCount; i++) {
                var temp = document.getElementById(`input_${i}`).value
                inputFieldData.push(temp);
                if (document.getElementById(`checkbox_${i}`).checked) {
                    var tempChecked = 1;
                    checkboxFieldData.push(tempChecked);
                } else {
                    var tempChecked = 0;
                    checkboxFieldData.push(tempChecked);
                }

                var tempData = [];
                tempData.push(imageData[i - 1]);
                tempData.push(inputFieldData[i - 1]);
                tempData.push(checkboxFieldData[i - 1]);

                bodyData.push(tempData);
            }

            console.log(bodyData);

        });


        /* ############################# Function For Change in Input type File ######################################## */

        inputFile.addEventListener('change', function() {
            files = inputFile.files
            for (let i = 0; i < files.length; i++) {
                if (getFileSizeInMB(files[i]) > 2) {
                    document.getElementById('file-size-error').style.display = 'block';
                } else {
                    document.getElementById('file-size-error').style.display = 'none';
                    if(1){
                        createPreviewForImage(files[i]);
                    }else{
                        document.getElementById('file-height-width-error').style.display = 'block'; 
                    }
                }
            }
        })



        /* ############################# To Creative Preview of Image and Table  ######################################## */

        function createPreviewForImage(data) {

            table.style.display = 'table';
            // Creating elements Dynamically
            // ----- table row -------- //
            const tableRow = document.createElement('tr');

            // tableRow.setAttribute('draggable', true);
            // tableRow.setAttribute('ondragstart', 'start()');
            // tableRow.setAttribute('ondragover', 'dragover()');




            // -----for sr.no ------ //
            rowCount++;
            const indexData = document.createElement('td');
            const paragraph = document.createElement('p');
            paragraph.innerHTML = rowCount;
            indexData.append(paragraph);

            // ------- for input -------//
            const inputData = document.createElement('td');
            const inputBox = document.createElement('input')
            inputBox.setAttribute('type', 'text');
            inputBox.setAttribute('id', `input_${rowCount}`);
            inputData.append(inputBox);

            // ------ switch box --------- //

            const switchData = document.createElement('td');
            const checkbox = document.createElement('input');
            checkbox.setAttribute('type', 'checkbox');
            checkbox.setAttribute('id', `checkbox_${rowCount}`);
            checkbox.setAttribute('checked', 'checked');
            switchData.append(checkbox);

            //----- For Image ------ //
            const preview = document.createElement('td');
            preview.classList.add('image-td')
            const imagePreview = document.createElement('div');
            imagePreview.classList.add('preview');
            const reader = new FileReader();
            reader.readAsDataURL(data);

            reader.addEventListener("load", function() {
                imagePreview.style.backgroundImage = `url(${reader.result})`;
            })
            preview.append(imagePreview);
            tableRow.append(indexData);
            tableRow.append(preview);
            tableRow.append(inputData);
            tableRow.append(switchData);
            table.append(tableRow);

            imageData.push(data);
        }

        /* ############################# For Checking Size in KB ######################################## */

        function getFileSizeInKB(data) {
            var tempFile = data;
            sizeInKB = tempFile.size / 1024

            // console.log(sizeInKB.toFixed(2));
        }


        /* ############################# For Checking Size in MB ######################################## */


        function getFileSizeInMB(data) {
            var tempFile = data;
            sizeInMB = tempFile.size / 1024 / 1024

            return sizeInMB.toFixed(2);
        }



        /* ############################## For Drag and Reorder ################################# */


        // var row;

        // function start() {
        //     row = event.target;
        // }

        // function dragover() {
        //     var e = event;
        //     e.preventDefault();

        //     let children = Array.from(e.target.parentNode.parentNode.children);
        //     if (children.indexOf(e.target.parentNode) > children.indexOf(row))

        //         e.target.parentNode.after(row);
        //     else
        //         e.target.parentNode.before(row);
        // }


        /* ################################ To Check Height and Width of Image */


        function checkImageHeightWidth(data) {
            var flag;
            var reader = new FileReader();
            //Read the contents of Image File.
            reader.readAsDataURL(data);
            reader.onload = function(e) {
                //Initiate the JavaScript Image object.
                var image = new Image();
                //Set the Base64 string return from FileReader as source.
                image.src = e.target.result;
                image.onload = function() {
                    //Determine the Height and Width.
                    var height = this.height;
                    var width = this.width;
                    if (height > 1000 || width > 1000) {
                        flag = false;
                    } else {
                        flag = true;
                    }

                };
            }
            return flag;
        }
    </script>
@endsection
