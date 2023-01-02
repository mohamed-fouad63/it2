$("select").prop("selectedIndex", 3); // select 4th option

// Using plain JavaScript this can be achieved

// use first select element
var el = document.getElementsByTagName("select")[0];
// assuming el is not null, select 4th option
el.selectedIndex = 3;
