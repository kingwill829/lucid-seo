// get year and append into footer
var getDate = new Date();
var footerYear = getDate.getFullYear();
var footerDateSelector = $('#footerDate');
$(footerDateSelector).text(footerYear);

