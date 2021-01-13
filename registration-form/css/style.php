<!DOCTYPE html>
<html>
<head>
    <title>css</title>
    <style type="text/css">
        body {
    padding: 0px;
    margin: 0px;
}

.form{
    margin: 10px auto !important;
    padding: 40px;
}
.side{ 
    border-right: 1px solid black;
    margin: 150px auto; 
    padding-top: 85px;
    border-radius: 8%;
    width: 80%;
}
.side h1{
    margin-bottom: 50px;
    position: relative;
}

.sideh{
    position: relative;
}
.sideh::after{
    content: "";
    border-bottom: 4px solid grey;
    width: 30%;
    position: absolute;
    left: 0%;
    bottom: -20%;
}

.side a{
    text-decoration: none;
    margin-top: 50px;
    border-radius: 20px;
    padding: 10px 20px;
    color: white;
    background-color: #868181;
    border: 2px solid #868181;
    font-weight: bold;
}
.fa-trash{
color: red;
}

@media(max-width: 768px){
    .side{ 
    margin: 50px auto; 
    padding-top: 30px;
    margin-bottom: 50px;
    text-align: center;
}
.sideh::after{
    width: 25%;
    left: 50%;
    transform: translateX(-50%);
}
}


    </style>
</head>
<body>

</body>
</html>