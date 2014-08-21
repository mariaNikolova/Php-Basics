<!DOCTYPE html>
<html>
<head>
    <title>CV Generator</title>

</head>
<body>
<script>
    var nextId = 0;
    function addInput() {
        nextId++;
        var inputDiv = document.createElement("div");
        inputDiv.setAttribute("id", "num" + nextId);
        inputDiv.innerHTML =
            "<input type='text' name='programerLanguages[]' /> " +
                '<select name="level[]" id="level">' +
                '<option value="Beginner">Beginner</option>' +
                '<option value="Programmer">Programmer</option>' +
                '<option value="Ninja">Ninja</option>' +
                '</select>' +
                '<br/>';
        document.getElementById('parentOne').appendChild(inputDiv);
    }
    function addLanguages(){
        nextId++;
        var inputDiv = document.createElement("div");
        inputDiv.setAttribute("id", "num" + nextId);
        inputDiv.innerHTML=
                    '<input type="text" name="languages[]" />'+
                            '<select name="comprehension[]">'+
                            '<option>-Comprehension-</option>'+
                            '<option>Intermediate</option>'+
                            '<option>Advanced</option>'+
                            '<option>Beginner</option>'+
                        '</select>'+
                            '<select name="reading[]">'+
                            '<option>-Reading-</option>'+
                            '<option>Intermediate</option>'+
                            '<option>Advanced</option>'+
                            '<option>Beginner</option>'+
                        '</select>'+
                            '<select name="writing[]">'+
                            '<option>-Writing-</option>'+
                            '<option>Intermediate</option>'+
                            '<option>Advanced</option>'+
                            '<option>Beginner</option>'+
                        '</select>'
        document.getElementById('parentTwo').appendChild(inputDiv);
    }
    function removeElement(id) {
        var getChild = document.getElementById("parentOne").lastChild;
            document.getElementById("parentOne").removeChild(getChild);
    }
    function removeLanguages(id) {
        var getChild = document.getElementById("parentTwo").lastChild;
        document.getElementById("parentTwo").removeChild(getChild);
    }

</script>


<form action="" method="get">
    <fieldset>
    <legend>Personal Information</legend>
    <input type="text" name="fname" placeholder="First Name"><br>
    <input type="text" name="lname" placeholder="Last Name"><br>
    <input type="text" name="email" placeholder="Email"><br>
    <input type="text" name="phone" placeholder="Phone Number"><br>
    <label for="female">Female</label>
    <input type="radio" name="gender"><br>
    <label for="male">Male</label>
    <input type="radio" name="gender"><br>
    <div>Birth Date</div>
    <input type="date" name="b-day" >
    <div>Nationality</div>
    <select name="nation">
        <option value="Bulgarian">Bulgarian</option>
        <option value="Indian">Indian</option>
    </select>
    </fieldset>
    <fieldset>
        <legend>Last Work Possiton</legend>
        <label for="companyName">Company Name</label>
        <input type="text" name="companyName"><br>

        <label for="from">From</label>
        <input type="date" name="fromDate"><br>

        <label for="to">To</label>
        <input type="date" name="toDate">
    </fieldset>
    <fieldset>
        <legend>Computer Skills</legend>
        <div>Programing Languages</div>
        <div id="parentOne">
            <!-- We shall add inputs here with JavaScript -->
        </div>
        <script>addInput();</script>
        <a href="javascript:addInput()">[Add]</a>
        <a href="javascript:removeElement()">[Remove]</a>
    </fieldset>
    <fieldset>
        <legend>Other Skills</legend>
        <div>Languages</div>
        <div id="parentTwo">
            <!-- We shall add inputs here with JavaScript -->
        </div>
        <script>addLanguages();</script>
        <a href="javascript:addLanguages()">[Add]</a>
        <a href="javascript:removeLanguages()">[Remove]</a>
        <br>
        <input type="checkbox" name="a">
        <label for="a">A</label>
        <input type="checkbox" name="b">
        <label for="b">B</label>
        <input type="checkbox" name="c">
        <label for="c">C</label>
    </fieldset>
    <br>
    <input type="submit" value="Generate CV" name="generate">
</form>
</body>
</html>
<?php
if(isset($_GET['fname'])){ ?>
    <br>
    <table border="1">
    <tr>
    <td colspan="2">Personal Information </td>
    </tr>
    <tr>
    <td>First Name</td>
    <td><?php echo $_GET['fname']; ?></td>
    </tr>
    <tr>
    <td>Last Name</td>
    <td> <?php echo $_GET['lname']; ?> </td>
    </tr>
    <tr>
    <td>Email</td>
    <td> <?php echo $_GET['email']; ?> </td>
    </tr>
    <tr>
    <td>Phone Number</td>
    <td> <?php echo $_GET['phone']; ?> </td>
    </tr>
    <tr>
        <td>Gender</td>
        <td><?php echo $_GET['gender']; ?></td>
    </tr>
    <tr>
    <td>Birth Date</td>
    <td> <?php echo $_GET['b-day']; ?> </td>
    </tr>
    <tr>
    <td>Nationality</td>
    <td> <?php echo $_GET['nation']; ?> </td>
    </tr>
    </table>
    <br>
    <table border="1">
        <tr>
            <td colspan="2">Last Work Positon</td>
        </tr>
        <tr>
            <td>Company name</td>
            <td><?php echo $_GET['companyName'] ; ?></td>
        </tr>
        <tr>
            <td>From</td>
            <td><?php echo $_GET['fromDate'] ; ?></td>
        </tr>
        <tr>
            <td>To</td>
            <td><?php echo $_GET['toDate'] ; ?></td>
        </tr>
    </table>
    <br>
    <?php
    $programingLanguages = $_GET['programerLanguages'] ;
    $computerSkillsTable = '<table border="1"><thead><tr><th colspan="2">Computer Skills</th></tr></thead><tbody>' .
        '<tr><td>Programming Languages</td><td><table border="1"><thead><tr><th>Language</th><th>Skill Level</th></tr></thead>' .
                    '<tbody>';
                    for($i = 0; $i < count($_GET['level']) ;$i++) {
                    $computerSkillsTable .= '<tr>';
                        $computerSkillsTable .= '<td>' . $programingLanguages[$i] . '</td>';
                        $computerSkillsTable .= '<td>' . $_GET['level'][$i] . '</td>';
                        $computerSkillsTable .= '</tr>';

                    }
                    $computerSkillsTable .= '</tbody></table></tr></tbody></table><br>';
    echo $computerSkillsTable ;

    $otherSkillsTable = '<table border="1">'.
    '<thead>'.
    '<tr><th colspan="2">Other Skills</th></tr>'.
    '</thead>'.
    '<tbody>'.
        '<tr>'.
        '<td>Languages</td>'.
        '<td>'.
        '<table border="1">'.
        '<thead>'.
            '<tr>'.
            '<th>Language</th><th>Comprehension</th><th>Reading</th><th>Writing</th>'.
            '</tr>'.
         '</thead>'.
         '<tbody>';
    for($i = 0; $i < count($_GET['comprehension']) ;$i++) {
        $otherSkillsTable .= '<tr>';
        $otherSkillsTable .= '<td>' . $_GET['languages'][$i] . '</td>';
        $otherSkillsTable .= '<td>' . $_GET['comprehension'][$i] . '</td>';
        $otherSkillsTable .= '<td>' . $_GET['reading'][$i] . '</td>';
        $otherSkillsTable.= '<td>' . $_GET['writing'][$i] . '</td>';
    }
    $bCategory = ''; $cCategory = ''; $aCategory = '';
    if(isset($_GET['b'])) {
        $bCategory = 'B';
    }
    if(isset($_GET['a'])) {
        $aCategory = 'A';
    }
    if(isset($_GET['c'])) {
        $cCategory = 'C';
    }
    $otherSkillsTable .=   '</tbody></table></td></tr>'.
        '<tr><td>Driver liecense</td><td>'.$bCategory." ".$aCategory." ".$cCategory.'</td><tr></table>' ;
    echo $otherSkillsTable ;

   ?>

<?php } ?>