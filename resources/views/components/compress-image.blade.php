@extends('page-layout.layout')

@section('style')
    <style>
        #multiFileUpload {
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
                        <label for="multiFileUpload" class="form-label">
                            <span class="btn btn-dark">Choose a File</span>
                        </label>
                        <input type="file" id="multiFileUpload" name="multiFileUpload" type="image/*" max="1">
                        <a id="link" download class="btn btn-outline-success">Download Image</a>
                        <div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        const compressImage = async (file, {
            quality = 1,
            type = file.type
        }) => {
            // Get as image data
            const imageBitmap = await createImageBitmap(file);

            // Draw to canvas
            const canvas = document.createElement('canvas');
            canvas.width = imageBitmap.width;
            canvas.height = imageBitmap.height;
            const ctx = canvas.getContext('2d');
            ctx.drawImage(imageBitmap, 0, 0);

            // Turn into Blob
            const blob = await new Promise((resolve) =>
                canvas.toBlob(resolve, type, quality)
            );

            // Turn Blob into File
            return new File([blob], file.name, {
                type: blob.type,
            });
        };

        // Get the selected file from the file input
        const input = document.querySelector('#multiFileUpload');
        const link = document.getElementById('link');
        var objectURL;
        input.addEventListener('change', async (e) => {
            // Get the files
            const {
                files
            } = e.target;

            // No files selected
            if (!files.length) return;

            // We'll store the files in this data transfer object
            const dataTransfer = new DataTransfer();

            // For every file in the files list
            for (const file of files) {
                // We don't have to compress files that aren't images
                if (!file.type.startsWith('image')) {
                    // Ignore this file, but do add it to our result
                    dataTransfer.items.add(file);
                    continue;
                }

                // We compress the file by 50%
                const compressedFile = await compressImage(file, {
                    quality: 0.8,
                    type: 'image/jpeg',
                });

                // Save back the compressed file instead of the original file
                dataTransfer.items.add(compressedFile);
            }

            // Set value of the file input to our new files list
            e.target.files = dataTransfer.files;

            // if (objectURL) {
            //     // revoke the old object url to avoid using more memory than needed
            //     URL.revokeObjectURL(objectURL);
            // }

            for(const file of e.target.files){
                console.log(file)
                objectURL = URL.createObjectURL(file);
                console.log("running")
                link.download = file.name; // this name is used when the user downloads the file
                link.href = objectURL;
            }

            
        });
    </script>
@endsection
