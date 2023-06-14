$(document).ready(function() {
    $('#searchInput').on('keyup', function() {
        var value = $(this).val().toLowerCase();
        $('#mal_alis tbody tr').filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });

var searchInput = document.querySelector("#searchInput");
searchInput?.addEventListener("keyup", function() {

    // kullanıcının arama yapması durumunda görüntülenecek satırları belirleyin
    var searchTerm = searchInput.value.toLowerCase();
    var rows = document.querySelectorAll("#mal_alis tbody tr");
    for (var i = 0; i < rows.length; i++) {
        var category = rows[i].querySelectorAll("td")[1].textContent.toLowerCase();
        var product = rows[i].querySelectorAll("td")[2].textContent.toLowerCase();
        if (category.indexOf(searchTerm) > -1 || product.indexOf(searchTerm) > -1) {
            rows[i].style.display = "";
        } else {
            rows[i].style.display = "none";
        }
    }

    // görüntülenen satırların id'si miqdar olanlarını seçin ve cəmini hesaplayın
    var visibleRows = document.querySelectorAll("#mal_alis tbody tr:not([style='display: none;'])");
    var total = 0;
    for (var i = 0; i < visibleRows.length; i++) {
        var miqdar = parseFloat(visibleRows[i].querySelector("#miqdar").textContent);
        total += miqdar;
    }

    // sonucu görüntüleyin
    $('#total').html(total);
    console.log("Total miqdar: " + total);
});

var searchInput = document.querySelector("#searchInput");
searchInput.addEventListener("keyup", function() {

    // kullanıcının arama yapması durumunda görüntülenecek satırları belirleyin
    var searchTerm = searchInput.value.toLowerCase();
    var rows = document.querySelectorAll("#mal_alis tbody tr");
    for (var i = 0; i < rows.length; i++) {
        var category = rows[i].querySelectorAll("td")[1].textContent.toLowerCase();
        var product = rows[i].querySelectorAll("td")[2].textContent.toLowerCase();
        if (category.indexOf(searchTerm) > -1 || product.indexOf(searchTerm) > -1) {
            rows[i].style.display = "";
        } else {
            rows[i].style.display = "none";
        }
    }

    // görüntülenen satırların id'si miqdar olanlarını seçin ve cəmini hesaplayın
    var visibleRows = document.querySelectorAll("#mal_alis tbody tr:not([style='display: none;'])");
    var total = 0;
    for (var i = 0; i < visibleRows.length; i++) {
        var miqdar = parseFloat(visibleRows[i].querySelector("#alis_qiy").textContent);
        total += miqdar;
    }

    // sonucu görüntüleyin
    $('#total_alis_qiy').html(total);
    console.log("Total miqdar: " + total);
});
var searchInput = document.querySelector("#searchInput");
searchInput.addEventListener("keyup", function() {

    // kullanıcının arama yapması durumunda görüntülenecek satırları belirleyin
    var searchTerm = searchInput.value.toLowerCase();
    var rows = document.querySelectorAll("#mal_alis tbody tr");
    for (var i = 0; i < rows.length; i++) {
        var category = rows[i].querySelectorAll("td")[1].textContent.toLowerCase();
        var product = rows[i].querySelectorAll("td")[2].textContent.toLowerCase();
        if (category.indexOf(searchTerm) > -1 || product.indexOf(searchTerm) > -1) {
            rows[i].style.display = "";
        } else {
            rows[i].style.display = "none";
        }
    }

    // görüntülenen satırların id'si miqdar olanlarını seçin ve cəmini hesaplayın
    var visibleRows = document.querySelectorAll("#mal_alis tbody tr:not([style='display: none;'])");
    var total = 0;
    for (var i = 0; i < visibleRows.length; i++) {
        var miqdar = parseFloat(visibleRows[i].querySelector("#alis_meb").textContent);
        total += miqdar;
    }

    // sonucu görüntüleyin
    $('#total_alis_meb').html(total);
    console.log("Total miqdar: " + total);
});
var searchInput = document.querySelector("#searchInput");
searchInput.addEventListener("keyup", function() {

    // kullanıcının arama yapması durumunda görüntülenecek satırları belirleyin
    var searchTerm = searchInput.value.toLowerCase();
    var rows = document.querySelectorAll("#mal_alis tbody tr");
    for (var i = 0; i < rows.length; i++) {
        var category = rows[i].querySelectorAll("td")[1].textContent.toLowerCase();
        var product = rows[i].querySelectorAll("td")[2].textContent.toLowerCase();
        if (category.indexOf(searchTerm) > -1 || product.indexOf(searchTerm) > -1) {
            rows[i].style.display = "";
        } else {
            rows[i].style.display = "none";
        }
    }

    // görüntülenen satırların id'si miqdar olanlarını seçin ve cəmini hesaplayın
    var visibleRows = document.querySelectorAll("#mal_alis tbody tr:not([style='display: none;'])");
    var total = 0;
    for (var i = 0; i < visibleRows.length; i++) {
        var miqdar = parseFloat(visibleRows[i].querySelector("#satis_qiy").textContent);
        total += miqdar;
    }

    // sonucu görüntüleyin
    $('#total_satis_qiy').html(total);
    console.log("Total miqdar: " + total);
});
var searchInput = document.querySelector("#searchInput");
searchInput.addEventListener("keyup", function() {

    // kullanıcının arama yapması durumunda görüntülenecek satırları belirleyin
    var searchTerm = searchInput.value.toLowerCase();
    var rows = document.querySelectorAll("#mal_alis tbody tr");
    for (var i = 0; i < rows.length; i++) {
        var category = rows[i].querySelectorAll("td")[1].textContent.toLowerCase();
        var product = rows[i].querySelectorAll("td")[2].textContent.toLowerCase();
        if (category.indexOf(searchTerm) > -1 || product.indexOf(searchTerm) > -1) {
            rows[i].style.display = "";
        } else {
            rows[i].style.display = "none";
        }
    }

    // görüntülenen satırların id'si miqdar olanlarını seçin ve cəmini hesaplayın
    var visibleRows = document.querySelectorAll("#mal_alis tbody tr:not([style='display: none;'])");
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
    $('#mal_alis tbody tr').each(function() {
        var miqdar = parseFloat($(this).find('#miqdar').text());
        if (!isNaN(miqdar)) {
            sumMiqdar += miqdar;
        }
    });
    $('#total').text(sumMiqdar);
});

$(document).ready(function() {
    var sumMiqdar = 0;
    $('#mal_alis tbody tr').each(function() {
        var miqdar = parseFloat($(this).find('#alis_qiy').text());
        if (!isNaN(miqdar)) {
            sumMiqdar += miqdar;
        }
    });
    $('#total_alis_qiy').text(sumMiqdar);
});
$(document).ready(function() {
    var sumMiqdar = 0;
    $('#mal_alis tbody tr').each(function() {
        var miqdar = parseFloat($(this).find('#alis_meb').text());
        if (!isNaN(miqdar)) {
            sumMiqdar += miqdar;
        }
    });
    $('#total_alis_meb').text(sumMiqdar);
});
$(document).ready(function() {
    var sumMiqdar = 0;
    $('#mal_alis tbody tr').each(function() {
        var miqdar = parseFloat($(this).find('#satis_qiy').text());
        if (!isNaN(miqdar)) {
            sumMiqdar += miqdar;
        }
    });
    $('#total_satis_qiy').text(sumMiqdar);
});
$(document).ready(function() {
    var sumMiqdar = 0;
    $('#mal_alis tbody tr').each(function() {
        var miqdar = parseFloat($(this).find('#satis_meb').text());
        if (!isNaN(miqdar)) {
            sumMiqdar += miqdar;
        }
    });
    $('#total_satis_meb').text(sumMiqdar);
});



var searchInput = document.querySelector("#searchInput");
searchInput.addEventListener("keyup", function() {

    // kullanıcının arama yapması durumunda görüntülenecek satırları belirleyin
    var searchTerm = searchInput.value.toLowerCase();
    var rows = document.querySelectorAll("#mal_alis tbody tr");
    for (var i = 0; i < rows.length; i++) {
        var category = rows[i].querySelectorAll("td")[1].textContent.toLowerCase();
        var product = rows[i].querySelectorAll("td")[2].textContent.toLowerCase();
        if (category.indexOf(searchTerm) > -1 || product.indexOf(searchTerm) > -1) {
            rows[i].style.display = "";
        } else {
            rows[i].style.display = "none";
        }
    }

    // görüntülenen satırların id'si miqdar olanlarını seçin ve cəmini hesaplayın
    var visibleRows = document.querySelectorAll("#mal_alis tbody tr:not([style='display: none;'])");
    var total = 0;
    for (var i = 0; i < visibleRows.length; i++) {
        var miqdar = parseFloat(visibleRows[i].querySelector("#miqdar").textContent);
        total += miqdar;
    }

    // sonucu görüntüleyin
    $('#total').html(total);
    console.log("Total miqdar: " + total);
});