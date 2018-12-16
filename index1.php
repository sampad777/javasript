<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8" />
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="bayzel" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

	<title>Лаврик 5 урок ajax</title>
</head>

<body>

    

    

    <script>
    var test01 = 55;

    while(test01 < 60){
        console.log(test01++);
    }


    do {
        console.log("do: "+test01++);
    } 
    while(test01 < 70);

    for(let i=0; i<8; i++){
        
        if(i == 2){
            continue;
        }

        if(i == 6){
            break;
        }
        console.log(i);
        
         
        //(i == 2) ? continue : console.log(i);
       // (i == 6) ? continue : true;
    }
        

    </script>

</body>
</html>