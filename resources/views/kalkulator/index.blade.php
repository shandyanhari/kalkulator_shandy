<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            margin: 0;
            background-color: none;
            background-image: linear-gradient(to left, #621462, cyan);
        }

        label {}

        table {
            border: 1px solid black;
            margin-left: auto;
            margin-right: auto;
            border-radius: 10px;
            box-shadow: 5px 5px 5px rgba(red, green, blue, alpha);
            background-color: darkgray;
            outline: 1px solid black;
        }

        input[type="submit"] {
            width: 100%;
            padding: 25px 40px;  
            font-size: large;
            background-color: #4CAF50;
            color: black;
            font-weight: bold;
            border: none;
            border-radius: 10px;
            box-shadow: 5px 5px 5px rgba(red, green, blue, alpha);
            outline-color: black;
            border: 1px solid black;
        }

        input[type="submit"]:hover {
            background-color: goldenrod;
        }


        input[type="Reset"] {
            font-style: unset;
            font-size: larger;
            width: 100%;
            padding: 20px 40px;
            background-color: goldenrod;
            color: whitesmoke;
            font-weight: bold;
            margin-bottom: 5px;
            border: 1px solid black;
            border-radius: 5px;
            box-shadow: 5px 5px 5px rgba(red, green, blue, alpha);
        }

        input[type="Reset"]:hover {
            background-color: tomato;
        }

        input [type="number"] {
            width: 200%;
            padding: 30px;
            font-size: 24px;
            font-weight: bold;
            border: 1px solid black;
            border-radius: 5px;
            border: 1px solid black;
            align-items: center;


        }
    </style>
</head>

<body>
    <h1>
        <center></center>
    </h1>

    <center>
        <form action="{{ route('proses.store') }}" method="post">
            @csrf
            <table border=1 width=450 height=400>

                <tr>
                    <td colspan=4>
                        <h1>
                            <center>KALKULATOR SHANDY</center>
                        </h1>
                    </td>
                </tr>
                <tr>
                    <td colspan=2><input type="number" name="a" id""></td>

                    <td colspan=2 rowspan=2>
                        <center><input type="reset" value="RESET" value="RESET" name="op"></center>
                    </td>

                </tr>

                <tr>
                    <td colspan=2><input type="number" name="b" id""></td>



                </tr>

                <tr>
                    <td colspan=4>HASIL : </td>

                </tr>

                <tr>
                    <td>
                        <center><input type="submit" value="+" value="+" name="op"></center>
                    </td>
                    <td>
                        <center><input type="submit" value="-" value="-" name="op"></center>
                    </td>
                    <td>
                        <center><input type="submit" value="x" value="x" name="op"></center>
                    </td>
                    <td>
                        <center><input type="submit" value="/" value="/" name="op"></center>
                    </td>
                </tr>

                <tr>
                    <td colspan=4>
                        Nama : Shandy Anhari Putra<br>
                        Kelas : XII PPLG2
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>