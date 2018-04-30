


// $('#submit').click(function(){
//     value1 = $('.input1').val();
//     value2 = $('.input2').val();
//     value3 = $('.input3').val();
//     value4 = [value1, value2, value3];
//     array.push(value4);

//     lentele();
//     function lentele(){
//         lentele = '';
//         array.forEach((a, i) => {
//             lentele +=
//             '<tr>'
//             + '<td  id="editRow">' + array[i][0] + '</td>'
//             + '<td  id="editRow2">' + array[i][1]+ '</td>'
//             + '<td  id="editRow3">' + array[i][2]+ '</td>'
//             // + "<td> <button onClick='editRow()'>redaguoti</button> </td>"
//             + '<td><button onclick="trinti(' + i + ')">Trinti</button></td>';
//         });
//         document.getElementById('output').innerHTML = lentele;
//     }
    
// });

// function trinti(index) {
//     auto.splice(index, 1);
//     lentele();
// }

// function editRow() {
//     document.getElementById("editRow").contentEditable = true;
//     document.getElementById("editRow2").contentEditable = true;
//     document.getElementById("editRow3").contentEditable = true;
// }

// function deleteRow() {
//     document.getElementById("output").deleteRow(0);
// }





var array = [
    {}
];



function add() {
    array.push({'vardas': document.querySelector('.input1').value});
    // array.push({'tema': document.querySelector('.input2').value});
    // array.push({'zinute': document.querySelector('.input3').value});
    lentele();

    // document.querySelector('.input1').value = '';
    // document.querySelector('.input2').value = '';
    // document.querySelector('.input3').value = '';
}


lentele();

        function lentele() {
            var lentele = '';
            // sortOrder = sortOrder || sort('data');
            // auto.sort(sortOrder);
            array.forEach((a, i) => {
                lentele += 
                    '<tr>' +
                        '<td id="edit>' + a.vardas + '</td>' +
                        '<td id="edit>' + a.tema + '</td>' +
                        '<td id="edit>' + a.zinute + '</td>' +
                        '<td><button onclick="trinti(' + i + ')">Trinti</button></td>' +
                    '</tr>';
            });
            document.getElementById('output').innerHTML = lentele;
        }

        function add() {
            array.push({'vardas': document.querySelector('.input1').value})
            // {'tema': document.querySelector('.input2').value},
            // {'zinute': document.querySelector('.input3').value}
            ;
            array.push({'tema': document.querySelector('.input2').value});
            array.push({'zinute': document.querySelector('.input3').value});
            lentele();
        
            document.querySelector('.input1').value = '';
            document.querySelector('.input2').value = '';
            document.querySelector('.input3').value = '';
        }



function trinti(index) {
    array.splice(index, 1);
    lentele();
}



// function deleteTable(row) {
//     array.splice(row, 1);
//     lentele();



