<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
     <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('public/assets/img/apple-icon.png') }}">

     <link rel="icon" type="image/png" href="{{ asset('public/assets/img/favicon.png') }}">
     
     <title>Zebra Dashboard</title>
    <style type="text/css">
        body
        {
            font-family: Arial;
            font-size: 10pt;
        }
        table
        {
            border: 1px solid #ccc;
            border-collapse: collapse;
        }
        table th
        {
            background-color: #F7F7F7;
            color: #333;
            font-weight: bold;
        }
        table th, table td
        {
            padding: 5px;
            border: 1px solid #ccc;
        }
    </style>
       
</head>
<body>
    <table border="0" cellpadding="3" cellspacing="0">
        <tr>
            <td>
             Reset you password please click on bleow link:
            </td>
            
        </tr>

        <tr>
            <td>
            <p><a href="{{ $link }}">Reset</a></p>
            </td>
            
        </tr>
</table>
</body>
</html>
