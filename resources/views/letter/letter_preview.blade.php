

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
                width:150px;
                height:150px;
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
                <span style='font-weight:bolder;'>Date :</span> <ins>{{ $date }}</ins><br/><br>
                <span style='font-weight:bolder'>Ref No :</span> <ins>{{ $ref }}</ins><br/>
            </div>

            <div style="padding-top:15px;padding-bottom:15px;">
                Subject : <ins>{!! $subject==""?"<span style='color:red'>No letter subject!!</span>":$subject !!}</ins>
            </div>
            <div style='width:100%;text-align: justify;'>

                {!! $content=="" ? "<span style='color:red'>No letter body!!</span>" : $content !!}

            </div>




           <br/>

            <div style='font-size:16px;padding-right:20px;width:100%'>
                <table style="width:100%">
                    <tr>
                        <td>
                            <ins style="font-weight:bolder">C/C</ins><br/>
                            <table style="margin-top:10px">
                                <tr>
                                    <td style="padding-right:15px;vertical-align:top"><img style='width:15px;height:15px' src="{{ public_path('list.jpg') }}"></td>
                                    <td>To ethiopian minister of trade(Motri)</td>
                                </tr>
                                <tr>
                                    <td style="padding-right:15px"></td>
                                    <td><ins style="font-size:14px">Addis Abeba<ins></td>
                                </tr>
                                <tr>
                                    <td style="height:3px"></td>
                                </tr>
                                <tr>
                                    <td style="padding-right:15px;vertical-align:top"><img style='width:15px;height:15px' src="{{ public_path('list.jpg') }}"></td>
                                    <td>To Ethiopian Immigration AND Passport Facilitation(INVEA)</td>
                                </tr>
                                <tr>
                                    <td style="padding-right:15px"></td>
                                    <td><ins style="font-size:14px">Addis Abeba<ins></td>
                                </tr>
                                <tr>
                                    <td style="height:3px"></td>
                                </tr>
                                <tr>
                                    <td style="padding-right:15px;vertical-align:top"><img style='width:15px;height:15px' src="{{ public_path('list.jpg') }}"></td>
                                    <td>To Ethiopian police commission (EPC)</td>
                                </tr>
                                <tr>
                                    <td style="padding-right:15px"></td>
                                    <td><ins style="font-size:14px">Addis Abeba<ins></td>
                                </tr>
                            </table>
                        </td>
                        <td style='padding-top:50px'>
                            <table style="float:right">
                                <tr>
                                    <td style="padding-right:20px;padding-top:20px">
                                        <img class='stamp' src="{{ public_path('stamp.jpg') }}" alt="img">
                                    </td>
                                    <td style="padding:0px;vertical-align:top">
                                        <span>
                                            @if($closure!="")
                                                <span style="color:black">
                                                    {{  $closure }}
                                                </span>
                                            @else
                                                <span style="color:red">
                                                    With regards
                                                </span>
                                            @endif
                                        </span><br/>
                                        <img class='signature' src="{{ public_path('signature.png') }}" alt="img">
                                    </td>
                                </tr>

                            </table>
                        </td>
                    </tr>
                </table>

            </div>

        </main>


    </body>
</html>
