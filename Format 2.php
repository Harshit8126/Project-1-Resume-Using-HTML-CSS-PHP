<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume Design</title>
    <style>
        body {
            border: 3px solid black;
            padding: 30px;
            width: 732px;
            display: block;
            margin: auto;
        }

        #box1 {
            text-align: center;
        }

        #container .box {
            border: 1px solid black;
            float: right;
            width: 100px;
            height: 65px;
            padding-top: 57px;
            text-align: center;
        }

        .writing {
            font-size: 20px;
        }

        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        td {
            padding-left: 6px;
        }
    </style>
</head>

<body>
    <h1 id="box1"><u>RESUME</u></h1>
    <div id="container">
        <div class="box">
            <img src="" alt="No Photo">
        </div>
        <h1>Harshit Verma</h1>
        <p>
            E-mail: <a href="mailto: harshit.verma_cs18@gla.ac.in">harshit.verma_cs18@gla.ac.in</a><br>

            Contact No.: <a href="contactto: 8126929092">+91-8126929092</a><br>

            Najibabad , Bijnor 246732 (Uttar-Pradesh)
        </p>
    </div>
    <hr>

    <h2><u>OBJECTIVE:</u></h2>
    <p class="writing"><strong><?php echo "To be a part of an organisation where get a chance to use my knowledge and skills to
            contribute in the progress of the organisation as well as myself."?></strong></p>
    <br>
    <h2><u><?php echo "TECHNICAL SKILLS:"?></u></h2>
    <p class="writing"><strong>Programming Languages: </strong> C, Core JAVA, Python.<br>
        <strong>Web Technology: </strong>HTML, CSS, JavaScript, PHP.<br>
        <strong>Database: </strong>SQL.<br>
        <strong>Concepts: </strong>DBMS and Data Structure.<br>
        <strong>Operating System: </strong>Windows.</p>
    <br>

    <h2><u><?php echo "EDUCATIONAL QUALIFICATION:" ?></u></h2>
    <table style="width: 100%;">
        <thead>
            <tr class="writing">
                <th>Qualification</th>
                <th>Board/University</th>
                <th>Year</th>
                <th>Percentage</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo "Bachelor of Technology(B.TECH)"?></td>
                <td><?php echo "GLA University"?></td>
                <td><?php echo "2022"?></td>
                <td>--</td>
            </tr>
            <tr>
                <td><?php echo "Intermediate"?></td>
                <td><?php echo "C.B.S.E."?></td>
                <td><?php echo "2018"?></td>
                <td><?php echo "82.6%"?></td>
            </tr>
            <tr>
                <td><?php echo "High School"?></td>
                <td><?php echo "C.B.S.E."?></td>
                <td><?php echo "2016"?></td>
                <td><?php echo "95%"?></td>
            </tr>
        </tbody>
    </table>
    <br>

    <h2><u><?php echo "INDUSTRIAL TRAINING:"?></u></h2>
    <p><strong><?php echo "Name of Organisation: "?></strong><?php echo "Dysmech Consultancy Services Pvt. Ltd., Pune" ?><br>
        <strong><?php echo "Duration:"?> </strong> <?php echo "4 weeks."?><br>
        <strong>Project Name: </strong>Smart Water Management Using IOT.</p>
</body>

</html>
