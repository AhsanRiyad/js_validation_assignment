<!DOCTYPE html>
<html>
<head>
    <title>Form</title>
</head>
<body>
    <form>
        <table border="1" width="500px" align="center">
            <tr height="100px">
                <td colspan="3" align="center"><h2>PERSON PROFILE</h2></td>
            </tr>
            <tr height="40px">
                <td width="100px"><b>Name</b></td>
                <td width="350px"> <input onblur="first_name_validation1(this);" ; type="text" name="" > <br>
                    <p id="name1"></p>
                </td>
                <td></td>
            </tr>
            <tr height="40px">
                <td><b>Email</b></td>
                
                <td>
                <p id='emailP'></p> 
                    <input onblur="emailVal(this)" type="text" name=""></td>
                <td></td>
            </tr>
            <tr height="40px">
                <td><b>Gender</b></td>
                <td>
                    <input type="radio" name="Gender" onblur="genderVal()">Male
                    <input type="radio" name="Gender" onblur="genderVal()">Female
                    <input type="radio" name="Gender" onblur="genderVal()">Other
                </td>
                <td></td>
            </tr>
            <tr height="40px">
                <td><b>Date of Berth</b></td>
                <td>
                    <p id='date1'></p>
                    <input id='day12' type="number" name="" style="width: 45px" onblur='dayVal(this);'>/
                    <input onblur="monthVal(this); " type="number" name="" style="width: 45px">/
                    <input onblur="yearVal(this);" type="number" name="" style="width: 45px"><i>(dd/mm/yyy)</i>
                </td>
                <td></td>
            </tr>
            <tr height="40px">
                <td><b>Blood Group</b></td>
                <td>
                    <select onblur="bloodVal();" id='bloodGrp'>
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                    </select>
                </td>
                <td></td>
            </tr>
            <tr height="40px">
                <td><b>Degree</b></td>
                <td>
                    <input type="checkbox" name="">SSC
                    <input type="checkbox" name="">HSC
                    <input type="checkbox" name="">BSc.
                    <input type="checkbox" name="">MSc.
                </td>
                <td></td>
            </tr>
            <tr height="40px">
                <td><b>Photo</b></td>
                <td> <input type="file" name=""></td>
                <td></td>
            </tr>
            <tr>
                <td colspan="3" height="40px"></td>
            </tr>
            <tr>
                <td colspan="3" height="40px" align="right">
                    <input type="submit" name="" value="Submit">
                    <input type="reset" name="" value="Reset">
                </td>
            </tr>
        </table>
    </form>

    <script type="text/javascript">
        function isNumeric(n) {
          return !isNaN(parseFloat(n)) && isFinite(n);
      }

      function first_name_validation1(e) {
       var obj = document.getElementById('name1');
       obj.innerHTML = e.value;
       var count = 0;

       var first_name = e.value;
         //obj.innerHTML = first_name.length;

         var lenth = first_name.length;

         if (first_name == "") {
           obj.innerHTML = "invalid";
           obj.innerHTML = first_name.length;

       }
       else {    
        if(lenth < 2) {

            obj.innerHTML = "invalid";

        }else {
            if (isNumeric(first_name.substr(0,1)) || first_name.substr(0,1) == '.' || first_name.substr(0,1) == '-') {
               count = 2;
               obj.innerHTML = "invalid";
           }
       }}}




       function dayVal(e){
        var i = e.value;
        var obj = document.getElementById('date1');
        obj.innerHTML = "valid";
        if(i<1 || i>30)
        {
           obj.innerHTML = "invalid";


       }
   }

   function monthVal(e){
    var i = e.value;
    var obj = document.getElementById('date1');
    obj.innerHTML = "valid";
    if(i<1 || i>12)
    {
       obj.innerHTML = "invalid";


   }
}



function yearVal(e){
    var i = e.value;
    var obj = document.getElementById('date1');
    obj.innerHTML = "valid";
    if(i<1991 || i>2016)
    {
       obj.innerHTML = "invalid";


   }
}


function emailVal(e){
    var val =  e.value;
    var obj = document.getElementById('emailP');
    obj.innerHTML = 'invalid';
    if(val=="")
    {
        
    }
}



// function bloodVal(){
//     var obj = document.getElementById('date1');


//     obj.innerHTML = "invalid";

//     var e = document.getElementById("bloodGrp");
//     var i = e.options[e.selectedIndex].value;

//     if(i== 'A+' || i== 'A-' || i== 'B-' || i= 'B+')
//     {
//        obj.innerHTML = "valid";


//    }
// }


// function genderVal(){
//     var radios = document.getElementsByName('Gender');

//     for (var i = 0, length = radios.length; i < length; i++)
//     {
//        if (radios[i].checked)
//        {
//   // do whatever you want with the checked radio
//   alert(radios[i].value);

//   // only one radio can be logically checked, don't check the rest
//   break;
// }
// }
// }




//    function first_name_validation(){
//     var obj = document.getElementById('name1');
//     var obj2 = document.getElementById('name2');
//     obj.innerHTML = obj2.value;
// }




//    function first_name_validation33(e) {

//     var obj = document.getElementById('name1');
//     var obj2 = document.getElementById('name2');
//     obj.innerHTML = e.value;
//     var count = 0;

//     var first_name = obj2.value;
//     if (first_name == "") {
//         obj.innerHTML = "invalid";

//     } else {
//         if (first_name.length < 2) {

//             obj.innerHTML = "invalid";

//         } else {
//             if (isNumeric(first_name.substr(0,1)) || first_name.substr(0,1) == '.' || first_name.substr(0,1) == '-') {
//                 count = 2;
//                 obj.innerHTML = "invalid";
//             } else {
//                 var first_name_array = first_name.split("");
//                 var value;
//                 foreach (first_name_array as value) {
//                     if (value == 'a' || value == 'b' || value == 'c' || value == 'd' || value == 'e' || value == 'f' || value == 'g' || value == 'h' || value == 'i' || value == 'j' || value == 'k' || value == 'l' || value == 'm' || value == 'n' || value == 'o' || value == 'p' || value == 'q' || value == 'r' || value == 's' || value == 't' || value == 'u' || value == 'v' || value == 'w' || value == 'x' || value == 'y' || value == 'z' || value == 'A' || value == 'B' || value == 'C' || value == 'D' || value == 'E' || value == 'F' || value == 'G' || value == 'H' || value == 'I' || value == 'J' || value == 'K' || value == 'L' || value == 'M' || value == 'N' || value == 'O' || value == 'P' || value == 'Q' || value == 'R' || value == 'S' || value == 'T' || value == 'U' || value == 'V' || value == 'W' || value == 'X' || value == 'Y' || value == 'Z' || value == '.' || value == '-') {
//                     } else {

//                         obj.innerHTML = "invalid";

//                         break;
//                     }
//                 }
//             }
//         }

//     } else {

//         obj.innerHTML = "valid";
//     }
// }







</script>


</body>
</html>