/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function () {
    $.ajax({
        type: 'POST',
        url: '/poll.php',
        dataType: "json",
        success: function (data, textStatus, jqXHR) {
            $("#title_poll").html(data.title);
            console.log('success', data);
            str = "";
            for (i in data.choices) {
                str += "<div class=radio><label><input type=radio  id=select>" + data.choices[i] + "</label></div>";
            }
            $("#choices").html(str);
        }
    });
});