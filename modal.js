
var array = [];


function clearInput() {
    document.querySelector(".input1").value = "";
    document.querySelector(".input2").value = "";
    document.querySelector(".input3").value = "";
}

$('#submit').click(function () {
    value1 = $('.input1').val();
    value2 = $('.input2').val();
    value3 = $('.input3').val();
    value4 = [value1, value2, value3];
    array.push(value4);
    
  
    lentele();
    function lentele() {
        lentele = '';
        // array.forEach((a, i) => 
        for (var i = 0; i <array.length; i++)
        {
            lentele +=
                '<tr>'
                + '<td contentEditable = true>' + array[i][0] + '</td>'
                + '<td contentEditable = true>' + array[i][1] + '</td>'
                + '<td contentEditable = true>' + array[i][2] + '</td>'
                // + '<td> <button onClick="eile('+ i +')">redaguoti</button> </td>'
                + '<td> <button type="button" class="btn btn-primary" onclick="deleteRow(' + i + ')">Trinti</button></td>'
                + '</tr>';
        };
        document.getElementById('output').innerHTML = lentele;
        clearInput();
        
    }

});
// function deleteRow(argumentas) {
//     document.getElementById("output").deleteRow(argumentas);
//     lentele();
// }



function deleteRow(eilute) {
    array.splice(eilute, 1);
    lentele();
}