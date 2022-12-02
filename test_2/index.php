<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .mainDiv{
            text-align: center;
        }
        .headerText{
            text-align: center;
        }
    </style>
    <title >Test 2 Devprox</title>
</head>
<body>
    <h3 class="headerText">Test 2 DevProx</h3>
    <div class="mainDiv">
        <form class="form" action="random.php" method="post">
            <input style="width: 220px;"  type="number" id="idNum" required name="idNum" placeholder="Number of records to generate"><br><br>
            <div class="d-grid gap-2">
                <button class="btn btn-success btn-lg" type="submit">Submit</button>
                <button class="btn btn-danger btn-lg" type="reset">Clear</button>
            </div>
        </form>
    </div>
 
   <?php 
        echo randomName();
        function randomName() {
            $firstname = array(
                'Johnathon',
                'Anthony',
                'Erasmo',
                'Raleigh',
                'Nancie',
                'Tama',
                'Camellia',
                'Augustine',
                'Christeen',
                'Luz',
                'Diego',
                'Lyndia',
                'Thomas',
                'Georgianna',
                'Leigha',
                'Alejandro',
                'Marquis',
                'Joan',
                'Stephania',
                'Elroy',
            );
        
            $lastname = array(
                'Mischke',
                'Serna',
                'Pingree',
                'Mcnaught',
                'Pepper',
                'Schildgen',
                'Mongold',
                'Wrona',
                'Geddes',
                'Lanz',
                'Fetzer',
                'Schroeder',
                'Block',
                'Mayoral',
                'Fleishman',
                'Roberie',
                'Latson',
                'Lupo',
                'Motsinger',
                'Drews',
            );
        
            $name = $firstname[rand ( 0 , count($firstname) -1)];
            $name .= ' ';
            $name .= $lastname[rand ( 0 , count($lastname) -1)];
            return $name; 
        }
    ?> 

</body>
</html>