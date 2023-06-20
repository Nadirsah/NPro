$(document).ready(function() {
    $('#searchInput').on('keyup', function() {
        var value = $(this).val().toLowerCase();
        $('#dataTable tbody tr').filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });

var searchInput = document.querySelector("#searchInput");
searchInput.addEventListener("keyup", function() {

    // kullanıcının arama yapması durumunda görüntülenecek satırları belirleyin
    var searchTerm = searchInput.value.toLowerCase();
    var rows = document.querySelectorAll("#mal_alis tbody tr");
    for (var i = 0; i < rows.length; i++) {
        var techizatci = rows[i].querySelectorAll("td")[1].textContent.toLowerCase();
        var sened = rows[i].querySelectorAll("td")[2].textContent.toLowerCase();
        var barcod = rows[i].querySelectorAll("td")[3].textContent.toLowerCase();
        var mal_ad = rows[i].querySelectorAll("td")[4].textContent.toLowerCase();
        var tip = rows[i].querySelectorAll("td")[5].textContent.toLowerCase();
        if (techizatci.indexOf(searchTerm) > -1 || sened.indexOf(searchTerm) > -1 || barcod.indexOf(searchTerm) > -1 
        || mal_ad.indexOf(searchTerm) > -1 || tip.indexOf(searchTerm) > -1
        ) {
            rows[i].style.display = "";
        } else {
            rows[i].style.display = "none";
        }
    }

    // görüntülenen satırların id'si miqdar olanlarını seçin ve cəmini hesaplayın
    var visibleRows = document.querySelectorAll("#dataTable tbody tr:not([style='display: none;'])");
    var total = 0;
    for (var i = 0; i < visibleRows.length; i++) {
        var miqdar = parseFloat(visibleRows[i].querySelector("#miqdar").textContent);
        total += miqdar;
    }
    // sonucu görüntüleyin
    $('#total').html(total);
    console.log("Total miqdar: " + total);

    // 
     // görüntülenen satırların id'si miqdar olanlarını seçin ve cəmini hesaplayın
     var visibleRows = document.querySelectorAll("#dataTable tbody tr:not([style='display: none;'])");
     var total = 0;
     for (var i = 0; i < visibleRows.length; i++) {
         var miqdar = parseFloat(visibleRows[i].querySelector("#alis_qiy").textContent);
         total += miqdar;
     }
 
     // sonucu görüntüleyin
     $('#total_alis_qiy').html(total);
     console.log("Total miqdar: " + total);

    //  
     // görüntülenen satırların id'si miqdar olanlarını seçin ve cəmini hesaplayın
     var visibleRows = document.querySelectorAll("#dataTable tbody tr:not([style='display: none;'])");
     var total = 0;
     for (var i = 0; i < visibleRows.length; i++) {
         var miqdar = parseFloat(visibleRows[i].querySelector("#alis_meb").textContent);
         total += miqdar;
     }
 
     // sonucu görüntüleyin
     $('#total_alis_meb').html(total);
     console.log("Total miqdar: " + total);

    //  
    // görüntülenen satırların id'si miqdar olanlarını seçin ve cəmini hesaplayın
    var visibleRows = document.querySelectorAll("#dataTable tbody tr:not([style='display: none;'])");
    var total = 0;
    for (var i = 0; i < visibleRows.length; i++) {
        var miqdar = parseFloat(visibleRows[i].querySelector("#satis_qiy").textContent);
        total += miqdar;
    }

    // sonucu görüntüleyin
    $('#total_satis_qiy').html(total);
    console.log("Total miqdar: " + total);

     // görüntülenen satırların id'si miqdar olanlarını seçin ve cəmini hesaplayın
     var visibleRows = document.querySelectorAll("#dataTable tbody tr:not([style='display: none;'])");
     var total = 0;
     for (var i = 0; i < visibleRows.length; i++) {
         var miqdar = parseFloat(visibleRows[i].querySelector("#satis_meb").textContent);
         total += miqdar;
     }
 
     // sonucu görüntüleyin
     $('#total_satis_meb').html(total);
     console.log("Total miqdar: " + total);
});
});

// total
$(document).ready(function() {
    var sumMiqdar = 0;
    $('#dataTable tbody tr').each(function() {
        var miqdar = parseFloat($(this).find('#miqdar').text());
        if (!isNaN(miqdar)) {
            sumMiqdar += miqdar;
        }
    });
    $('#total').text(sumMiqdar);
});

$(document).ready(function() {
    var sumMiqdar = 0;
    $('#dataTable tbody tr').each(function() {
        var miqdar = parseFloat($(this).find('#alis_qiy').text());
        if (!isNaN(miqdar)) {
            sumMiqdar += miqdar;
        }
    });
    $('#total_alis_qiy').text(sumMiqdar.toFixed(2));
});
$(document).ready(function() {
    var sumMiqdar = 0;
    $('#dataTable tbody tr').each(function() {
        var miqdar = parseFloat($(this).find('#alis_meb').text());
        if (!isNaN(miqdar)) {
            sumMiqdar += miqdar;
        }
    });
    $('#total_alis_meb').text(sumMiqdar.toFixed(2));
});
$(document).ready(function() {
    var sumMiqdar = 0;
    $('#dataTable tbody tr').each(function() {
        var miqdar = parseFloat($(this).find('#satis_qiy').text());
        if (!isNaN(miqdar)) {
            sumMiqdar += miqdar;
        }
    });
    $('#total_satis_qiy').text(sumMiqdar.toFixed(2));
});
$(document).ready(function() {
    var sumMiqdar = 0;
    $('#dataTable tbody tr').each(function() {
        var miqdar = parseFloat($(this).find('#satis_meb').text());
        if (!isNaN(miqdar)) {
            sumMiqdar += miqdar;
        }
    });
    $('#total_satis_meb').text(sumMiqdar.toFixed(2));
});






