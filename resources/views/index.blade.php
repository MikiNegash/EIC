

<!DOCTYPE html>
<html lang="en">
    <head>
        <style>
            @page {
                margin: 100px 25px;
            }

            header {
                position: fixed;
                top: -60px;
                left: 0px;
                right: 0px;
                height: 50px;
                font-size: 20px !important;
                color: white;
                text-align: center;
                line-height: 35px;
            }

            footer {
                position: fixed;
                bottom: -60px;
                left: 0px;
                right: 0px;
                height: 50px;
                font-size: 20px !important;
                color: white;
                text-align: center;
                line-height: 35px;
            }

            .stamp{
                width:200px;
                height:200px;
                opacity:0.7

            }
            .signature{
                width:100px;
                height:100px;
            }
        </style>
    </head>
    <body style="padding-top:40px">
        <!-- Define header and footer blocks before your content -->
        <header>
            <img style='width:100%;height:110px;' src="{{ public_path('header.jpg') }}" alt="img">
        </header>

        <footer>
            <img style='width:100%;height:80px;' src="{{ public_path('footer.jpg') }}" alt="img">
        </footer>




        <!-- Wrap the content of your PDF inside a main tag -->
        <main style='text-justify: auto;padding-top:50px;text-justify: inherit'>
            <div style='text-align:right;font-size:16px;padding-right:10px'>
                <span style='font-weight:bolder;'>Date :</span> <ins>02-03-2024</ins><br/><br>
                <span style='font-weight:bolder'>Ref No :</span> <ins>EIC566-2015</ins><br/>
            </div>

            <div style='font-size:16px;padding-top:15px;padding-bottom:15px'>
                <span style='font-weight:bolder;'>For :</span> <ins>Ethiopian Immigration AND Passport Facilitation</ins><br/><br>
            </div>

            <div style='font-size:16px;'>
                <span style='font-weight:bolder;'>Subject :-</span> <ins>Asking for your support incase of opening foreign currency from national bank of ethiopia</ins><br/><br>
            </div>

            <p align="justify">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
                dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
            </p>
            <p align="justify">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
                dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
            </p>
            <p align="justify">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
                dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
            </p>

        <p align="justify">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
            dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
        </p>

        <p align="justify">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
            dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
        </p>

            <br><br><br>

            <div style='font-size:16px;padding-right:20px;width:100%'>
                <table style="float:right">
                    <tr>
                        <td style="padding-right:20px;padding-top:20px">
                            <img class='stamp' src="{{ public_path('stamp.jpg') }}" alt="img">
                        </td>
                        <td style="padding:0px;vertical-align:top">
                            <span >With regards!!</span><br/>
                            <img class='signature' src="{{ public_path('signature.png') }}" alt="img">
                        </td>
                    </tr>

                </table>


            </div>
        </main>


    </body>
</html>
