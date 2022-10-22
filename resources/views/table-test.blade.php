<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <style type="text/css">
        .respon{
            display: none;
        }
        @media screen and (max-width:600px){
            .respon{
                display: block;
            }
            .utama{
                display: none;
            }
        }
    </style>
</head>
<body>
<div style="width:80%;">
    <table class="utama">
        <thead>
            <tr>
                <th>Judul</th>                
                <th>Autho</th>                
                <th>Tanggal</th>                
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit, ducimus!</td>
                <td>Lorem, ipsum.</td>
                <td>{{ now() }}</td>
            </tr>
            <tr>
                <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit, ducimus!</td>
                <td>Lorem, ipsum.</td>
                <td>{{ now() }}</td>
            </tr>
            <tr>
                <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit, ducimus!</td>
                <td>Lorem, ipsum.</td>
                <td>{{ now() }}</td>
            </tr>
            <tr>
                <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit, ducimus!</td>
                <td>Lorem, ipsum.</td>
                <td>{{ now() }}</td>
            </tr>
            <tr>
                <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit, ducimus!</td>
                <td>Lorem, ipsum.</td>
                <td>{{ now() }}</td>
            </tr>
        </tbody>
    </table>

    <table class="respon">
        <tbody>
            <tr>
                <th>Judul</th>
            </tr>    
            <tr>
                <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aperiam, obcaecati.</td>
            </tr>
            <tr>
                <th>Tanggal Post</th>
            </tr> 
            <tr>
                <td>{{ now() }}</td>
            </tr>   
            <tr>
                <th>Judul</th>
            </tr>    
            <tr>
                <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aperiam, obcaecati.</td>
            </tr>
            <tr>
                <th>Tanggal Post</th>
            </tr> 
            <tr>
                <td>{{ now() }}</td>
            </tr>  
            <tr>
                <th>Judul</th>
            </tr>    
            <tr>
                <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aperiam, obcaecati.</td>
            </tr>
            <tr>
                <th>Tanggal Post</th>
            </tr> 
            <tr>
                <td>{{ now() }}</td>
            </tr>          
        </tbody>
    </table>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>    
</body>
</html>